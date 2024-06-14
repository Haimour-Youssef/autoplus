<?php



namespace App\Traits;

use App\Models\Famille;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Image as Intervention;

Trait  FamilleTrait
{
	function saveImageTrait($picture,$famille){

		if($picture) {

			$originalImage= $picture;
			$path = time().$originalImage->getClientOriginalName();
			$folder = 'familles';

			$original = "";
			




			//// cas de modification

			if($famille->image) {
				// supprimer les images 
				Storage::delete($famille->image->module.'/'.$original.$famille->image->path);
				

				// MAJ BD
				$famille->image->path = $path;
				$famille->image->save();
			}

			///// en cas d insertion
			else {
				// stokage BD
			$famille->image()->save(Image::make(['path' => $path,'module' => $folder]));
			}


			


			// creation file

			 // original max 800
			Intervention::make($originalImage)
			->fit(350,420, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$original.$path));

			


		}
	}


}

