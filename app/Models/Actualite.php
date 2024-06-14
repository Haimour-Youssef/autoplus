<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Authenticatable
{
    use HasFactory, Notifiable, softDeletes;

    protected $fillable = ['title','content','date_actualite','partenaire_id','accueil','photos'];


    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

        public function partenaire()
    {
        return $this->belongsTo('App\Models\Partenaire');
    }

}
