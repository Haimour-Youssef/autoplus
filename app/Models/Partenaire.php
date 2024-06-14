<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Authenticatable
{
    use HasFactory, Notifiable, softDeletes;

    protected $fillable = ['lien','libelle','categorie_id'];


    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

   

     public function categories()
    {
        return $this->belongsToMany(
        'App\Models\Categorie',
        'categories_partenaires',
        'partenaire_id',
        'categorie_id');
    }

         public function actualites()
    {
        return $this->hasMany('App\Models\Actualite');
    }

}
