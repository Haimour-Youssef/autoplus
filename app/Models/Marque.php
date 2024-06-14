<?php



namespace App\Models;





use App\Scopes\HasProduitsScope;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



class Marque extends Authenticatable

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







    protected static function booted() {





    parent::boot();

    //static::addGlobalScope(new HasProduitsScope);



}







}

