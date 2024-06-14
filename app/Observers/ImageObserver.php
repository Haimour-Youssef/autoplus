<?php

namespace App\Observers;

use App\Models\Image;
use Illuminate\Support\Facades\Cache;

class ImageObserver
{
    /**
     * Handle the image "created" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function created(Image $image)
    {
        //
    }

    /**
     * Handle the image "updated" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function updating(Image $image)
    {
        //Cache::forget("image-show-{$image->id}");
    }

    
    /**
     * Handle the image "deleted" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function deleting(Image $image)
    {
        //$image->image()->delete();
    }

    /**
     * Handle the image "restored" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function restoring(Image $image)
    {
        //$image->image()->restore();
    }

    /**
     * Handle the image "force deleted" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function forceDeleted(Image $image)
    {
        
    }
}
