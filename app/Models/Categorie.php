<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Authenticatable
{
    use HasFactory, Notifiable, softDeletes;

    protected $fillable = ['classement','title','parent','description'];


    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }





     public function partenaires()
    {
        return $this->belongsToMany(
        'App\Models\Partenaire',
        'categories_partenaires',
        'categorie_id',
        'partenaire_id');
    }


    

}
