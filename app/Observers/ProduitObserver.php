<?php



namespace App\Observers;



use App\Models\Produit;

use Mockery\Generator\Parameter;

use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\Storage;



class ProduitObserver

{

    /**

     * Handle the produit "created" event.

     *

     * @param  \App\Models\Produit  $produit

     * @return void

     */

    public function created(Produit $produit)

    {

        //

    }



    /**

     * Handle the produit "updated" event.

     *

     * @param  \App\Models\Produit  $produit

     * @return void

     */

    public function updating(Produit $produit)

    {

        //Cache::forget("produit-show-{$produit->id}");

    }



    

    /**

     * Handle the produit "deleted" event.

     *

     * @param  \App\Models\Produit  $produit

     * @return void

     */

    public function deleting(Produit $produit)

    {

        Storage::delete($produit->image->module.'/thumbails-800'.$produit->image->path);

                Storage::delete($produit->image->module.'/thumbails-450'.$produit->image->path);

                Storage::delete($produit->image->module.'/thumbails-100'.$produit->image->path);



    }



    /**

     * Handle the produit "restored" event.

     *

     * @param  \App\Models\Produit  $produit

     * @return void

     */

    public function restoring(Produit $produit)

    {

        $produit->image()->restore();

    }



    /**

     * Handle the produit "force deleted" event.

     *

     * @param  \App\Models\Produit  $produit

     * @return void

     */

    public function forceDeleted(Produit $produit)

    {

        //$path = $produit->image->path;

        //$produit->image()->forceDelete();

        

        //Storage::delete($path);

            

        

    }

}

