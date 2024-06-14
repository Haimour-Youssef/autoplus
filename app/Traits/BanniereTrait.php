<?php



namespace App\Traits;

use App\Models\Banniere;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Image as Intervention;

Trait  BanniereTrait
{
	function saveImageTrait($picture,$banniere){

		if($picture) {

			$originalImage= $picture;
			$path = time().'.'.$originalImage->getClientOriginalExtension();
			$folder = 'bannieres';

			$original = "";
			



			//// cas de modification

			if($banniere->image) {
				// supprimer les images 
				Storage::delete($banniere->image->module.'/'.$original.$banniere->image->path);
				
				// MAJ BD
				$banniere->image->path = $path;
				$banniere->image->save();
			}

			///// en cas d insertion
			else {
				// stokage BD
			$banniere->image()->save(Image::make(['path' => $path,'module' => $folder]));
			}


			


			// creation file

			 // original 
			Intervention::make($originalImage)
			->resize(1920,null, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$original.$path));

		


		}
	}


}

