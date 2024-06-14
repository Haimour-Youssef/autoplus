<?php



namespace App\Traits;

use App\Models\Categorie;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Image as Intervention;

Trait  CategorieTrait
{
	function saveImageTrait($picture,$categorie){

		if($picture) {

			$originalImage= $picture;
			$path = time().'.'.$originalImage->getClientOriginalExtension();
			$folder = 'categories';

			$original = "";
			




			//// cas de modification

			if($categorie->image) {
				// supprimer les images 
				Storage::delete($categorie->image->module.'/'.$original.$categorie->image->path);
				

				// MAJ BD
				$categorie->image->path = $path;
				$categorie->image->save();
			}

			///// en cas d insertion
			else {
				// stokage BD
			$categorie->image()->save(Image::make(['path' => $path,'module' => $folder]));
			}


			


			// creation file

			 // original max 800
			Intervention::make($originalImage)
			->resize(85,null, function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/'.$original.$path));

			


		}
	}



























	function saveIconTrait($icon,$categorie){

		

		if($icon) {

			$originalImage= $icon;
			$path = $categorie->id.'.jpg';
			$folder = 'categories';

			$original = "";

			
			




			// creation file

			 // original max 800
			Intervention::make($originalImage)
			->resize("1105",'710', function($constraint){$constraint->aspectRatio();})
			->save(public_path("storage".'/'.$folder.'/big-'.$original.$path));



			 // original max 800
			 Intervention::make($originalImage)
			 ->resize("500",'375', function($constraint){$constraint->aspectRatio();})
			 ->save(public_path("storage".'/'.$folder.'/'.$original.$path));

			


		}
	}
}

