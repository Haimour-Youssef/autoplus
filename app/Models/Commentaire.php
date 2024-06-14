<?php



namespace App\Models;



use App\Scopes\HasProduitsScope;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



class Commentaire extends Authenticatable

{

    use HasFactory, Notifiable;



    protected $fillable = ['name','content','email','note','valider','produit_id'];



    public function produit()

    {

        return $this->belongsTo('App\Models\Produit');

    }





    protected static function booted() {





    parent::boot();

    //static::addGlobalScope(new HasProduitsScope);



}











}

