<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Offre extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['title','content','ville_id','contrat'];


    public const CONTRATS = [
        'CDI',
        'CDD',
        'Stage',
        'Intérim'

    ];


        public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

        public function ville()
    {
        return $this->belongsTo('App\Models\Ville');
    }


         public function users()
    {
        return $this->belongsToMany(
        'App\Models\User',
        'offres_users',
        'offre_id',
        'user_id');
    }



              //accessors
    public function getTitleAttribute($val){

        //return $val == 1 ? 'male' : 'female';
        return strtoupper($val);
    }


}
