<?php



namespace App\Traits;

use App\Models\Partenaire;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Image as Intervention;

Trait  PartenaireTrait
{
	function saveImageTrait($picture,$partenaire){

		if($picture) {

			$originalImage= $picture;
			$path = time().'.'.$originalImage->getClientOriginalExtension();
			$folder = 'partenaires';

			$original = "";
			




			//// cas de modification

			if($partenaire->image) {
				// supprimer les images 
				Storage::delete($partenaire->image->module.'/'.$original.$partenaire->image->path);
				

				// MAJ BD
				$partenaire->image->path = $path;
				$partenaire->image->save();
			}

			///// en cas d insertion
			else {
				// stokage BD
			$partenaire->image()->save(Image::make(['path' => $path,'module' => $folder]));
			}


			


			// creation file

			 // original max 800
			Intervention::make($originalImage)
			->resize(563,null, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$original.$path));

			


		}
	}


}

