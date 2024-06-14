<?php



namespace App\Traits;

use App\Models\Offre;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Image as Intervention;

Trait  OffreTrait
{
	function saveImageTrait($picture,$offre){

		if($picture) {

			$originalImage= $picture;
			$path = time().'.'.$originalImage->getClientOriginalExtension();
			$folder = 'offres';

			$original = "thumbails-800";
			$thumbails1 = "thumbails-450";
			$thumbails2 = "thumbails-100";




			//// cas de modification

			if($offre->image) {
				// supprimer les images 
				Storage::delete($offre->image->module.'/'.$original.$offre->image->path);
				Storage::delete($offre->image->module.'/'.$thumbails1.$offre->image->path);
				Storage::delete($offre->image->module.'/'.$thumbails2.$offre->image->path);

				// MAJ BD
				$offre->image->path = $path;
				$offre->image->save();
			}

			///// en cas d insertion
			else {
				// stokage BD
			$offre->image()->save(Image::make(['path' => $path,'module' => $folder]));
			}


			


			// creation file

			 // original max 800
			Intervention::make($originalImage)
			->fit(800,300, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$original.$path));

			// 450 * 350
			Intervention::make($originalImage)
			->fit(450,350, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$thumbails1.$path));

			// 100 * 100
			Intervention::make($originalImage)
			->fit(100,100, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$thumbails2.$path));


		}
	}


}

