<?php



namespace App\Traits;

use App\Models\Actualite;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Image as Intervention;

Trait  ActualiteTrait
{
	function saveImageTrait($picture,$actualite){

		if($picture) {

			$originalImage= $picture;
			$path = time().'.'.$originalImage->getClientOriginalExtension();
			$folder = 'actualites';

			$original = "thumbails-800";
			$thumbails1 = "thumbails-450";
			$thumbails2 = "thumbails-100";




			//// cas de modification

			if($actualite->image) {
				// supprimer les images 
				Storage::delete($actualite->image->module.'/'.$original.$actualite->image->path);
				Storage::delete($actualite->image->module.'/'.$thumbails1.$actualite->image->path);
				Storage::delete($actualite->image->module.'/'.$thumbails2.$actualite->image->path);

				// MAJ BD
				$actualite->image->path = $path;
				$actualite->image->save();
			}

			///// en cas d insertion
			else {
				// stokage BD
			$actualite->image()->save(Image::make(['path' => $path,'module' => $folder]));
			}


			


			// creation file

			 // original max 800
			Intervention::make($originalImage)
			//->fit(1000,null, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$original.$path));

			// 450 * 350
			Intervention::make($originalImage)
			->fit(400,200, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$thumbails1.$path));

			// 100 * 100
			Intervention::make($originalImage)
			->fit(100,100, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$thumbails2.$path));


		}
	}


}

