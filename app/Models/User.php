<?php

namespace App\Models;

use App\Scopes\LatestScope;
use App\Scopes\AdminShowDeleteScope;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;



    public const MOBILITES = [
        'Locale',
        'Régionale',
        'Nationale',
        'Internationale'
    ];



    public const METIERS = [
        'ACHAT',
        'RH',
        'COMMERCIAL',
        'LOGISTIQUE',
        'INFORMATIQUE',
        'TRAVAUX ET MAINTENANCE'
    ];


    public const CONTRATS = [
        'CDI',
        'CDD',
        'Stage',
        'Intérim'

    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cv',
        'motivation',
        'email',
        'username',
        'prenom',
        'tel',
        'adresse',
        'contrat',
        'metier',
        'is_admin',
        'mobilite',
        'password',
        'session_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }


    public function cv() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }


    public function motivation() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }



    public function getNameAttribute($val){

        return strtoupper($val);
    }

    public function getPrenomAttribute($val){

        return strtoupper($val);
    }



    public function offres()
    {
        return $this->belongsToMany(
        'App\Models\Offre',
        'offres_users',
        'user_id',
        'offre_id');
    }
    


    protected static function booted() {

        //static::addGlobalScope(new AdminShowDeleteScope);
        //parent::boot();

        //static::addGlobalScope(new LatestScope);

    }

}
