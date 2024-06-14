<?php

namespace App\Observers;

use App\Models\Commentaire;
use Mockery\Generator\Parameter;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class CommentaireObserver
{
    /**
     * Handle the commentaire "created" event.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return void
     */
    public function created(Commentaire $commentaire)
    {
        //
    }

    /**
     * Handle the commentaire "updated" event.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return void
     */
    public function updated(Commentaire $commentaire)
    {
        
    }

    
    /**
     * Handle the commentaire "deleted" event.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return void
     */
    public function deleting(Commentaire $commentaire)
    {
        

    }

    /**
     * Handle the commentaire "restored" event.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return void
     */
    public function restoring(Commentaire $commentaire)
    {
        
    }

    /**
     * Handle the commentaire "force deleted" event.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return void
     */
    public function forceDeleted(Commentaire $commentaire)
    {
        //$path = $commentaire->image->path;
        //$commentaire->image()->forceDelete();
        
        //Storage::delete($path);
            
        
    }
}
