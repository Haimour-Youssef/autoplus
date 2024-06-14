<?php



namespace App\Traits;

use App\Models\Promotion;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Image as Intervention;

Trait  PromotionTrait
{
	function saveImageTrait($picture,$promotion){

		if($picture) {

			$originalImage= $picture;
			$path = time().'.'.$originalImage->getClientOriginalExtension();
			$folder = 'promotions';

			$original = "";
			




			//// cas de modification

			if($promotion->image) {
				// supprimer les images 
				Storage::delete($promotion->image->module.'/'.$original.$promotion->image->path);
				

				// MAJ BD
				$promotion->image->path = $path;
				$promotion->image->save();
			}

			///// en cas d insertion
			else {
				// stokage BD
			$promotion->image()->save(Image::make(['path' => $path,'module' => $folder]));
			}


			


			// creation file

			 // original max 800
			Intervention::make($originalImage)
			->resize(800,null, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$original.$path));

			


		}
	}


}

