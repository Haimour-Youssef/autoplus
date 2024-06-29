<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referencement extends Model
{
    use HasFactory, Notifiable, softDeletes;

    protected $fillable = ['url','name','content','property','rel','href','indexation'];


    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
