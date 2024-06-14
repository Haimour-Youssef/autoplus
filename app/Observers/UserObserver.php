<?php

namespace App\Observers;

use App\Models\User;
use Mockery\Generator\Parameter;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updating(User $user)
    {
        //Cache::forget("user-show-{$user->id}");
    }

    
    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleting(User $user)
    {
       
       Storage::delete('users/'.$user->cv);
       Storage::delete('users/'.$user->motivation);
       
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restoring(User $user)
    {
        $user->image()->restore();
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //$path = $user->image->path;
        //$user->image()->forceDelete();
        
        //Storage::delete($path);
            
        
    }
}
