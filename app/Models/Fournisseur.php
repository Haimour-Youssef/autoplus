<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



class Fournisseur extends Authenticatable

{

    use HasFactory, Notifiable;



    protected $fillable = ['libelle','slug'];



    public function getRouteKeyName()
    {
        return 'slug';
    }

     public function produits()

    {

        return $this->hasMany('App\Models\Produit');

    }



   





}

