<?php







namespace App\Traits;



use App\Models\Produit;

use App\Models\Image;



use Illuminate\Support\Facades\Storage;

use Image as Intervention;



Trait  ProduitTrait

{

	function saveImageTrait($picture,$produit){



		if($picture) {



			$originalImage= $picture;

			$path = time().$originalImage->getClientOriginalName();

			$folder = 'produits';



			$original = "thumbails-800";

			$thumbails1 = "thumbails-450";

			$thumbails2 = "thumbails-100";









			//// cas de modification



			if($produit->image) {

				// supprimer les images 

				Storage::delete($produit->image->module.'/'.$original.$produit->image->path);

				Storage::delete($produit->image->module.'/'.$thumbails1.$produit->image->path);

				Storage::delete($produit->image->module.'/'.$thumbails2.$produit->image->path);



				// MAJ BD

				$produit->image->path = $path;

				$produit->image->save();

			}



			///// en cas d insertion

			else {

				// stokage BD

			$produit->image()->save(Image::make(['path' => $path,'module' => $folder]));

			}





			





			// creation file



			 // original max 800

			Intervention::make($originalImage)

			->fit(800,null, function($constraint){$constraint->aspectRatio();})

			->save(public_path("storage".'/'.$folder.'/'.$original.$path));



			// 450 * 350

			Intervention::make($originalImage)

			->resize(300,400, function($constraint){$constraint->aspectRatio();})

			->save(public_path("storage".'/'.$folder.'/'.$thumbails1.$path));



			// 100 * 100

			Intervention::make($originalImage)

			->fit(100,150, function($constraint){$constraint->aspectRatio();})

			->save(public_path("storage".'/'.$folder.'/'.$thumbails2.$path));





		}

	}










	function majNote($produit){


		$produit->update(['note' => '5']);


	}




}



