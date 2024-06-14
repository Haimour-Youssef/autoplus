<?php



namespace App\Models;





use App\Scopes\LatestScope;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



class Produit extends Authenticatable

{

    use HasFactory, Notifiable;



    protected $fillable = ['libelle', 'slug','panier','description','marque_id','fournisseur_id','famille_id','stock','prix_ttc','prix_reduis','nouveau'];


    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function image() {

        return $this->morphOne('App\Models\Image', 'imageable');

    }



    public function marque()

    {

        return $this->belongsTo('App\Models\Marque');

    }



    public function fournisseur()

    {

        return $this->belongsTo('App\Models\Fournisseur');

    }


         public function commentaires()

    {

        return $this->hasMany('App\Models\Commentaire')->orderBy('created_at','desc');

    }




    public function famille()

    {

        return $this->belongsTo('App\Models\Famille');

    }



    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }



    public function scopeOrder($query,$order,$min_price,$max_price)

    {


        $query = $query->whereHas('image');

        if($order) 
        {

            $orderby = $order;$orderMode = 'asc';

            if($order == 'prix_reduis_desc') {$orderby = 'prix_reduis';$orderMode = 'desc';}
            if($order == 'nouveau') {$orderMode = 'desc';}


            $query = $query->orderBy($orderby,$orderMode);

        }


        if($max_price) 
        {

            $query = $query->whereBetween('prix_reduis', [$min_price, $max_price]);

        }


        $query = $query->paginate(6);


        return $query;

    }



    public function users()

    {

        return $this->belongsToMany(

            'App\Models\User',

        )->withTimestamps();

    }






    public function scopeSearchKey($query,$key_search)

    {
        if(($key_search and $key_search <> ''))
        {
            $query = $query
            ->Where('produits.libelle',$key_search)
            ->OrWhere('familles.libelle',$key_search)
            ->OrWhere('marques.libelle',$key_search)
            ->OrWhere('fournisseurs.libelle',$key_search);
        }

        return $query;

    }




    public function scopeSearchEtat($query,$produit_search)

    {

/*
    if(($produit_search and $produit_search <> ''))
    {
        if ($produit_search == 'a_verifier')$query = $query->whereNull('verification_id');

        if ($produit_search == 'valider')$query = $query->whereNotNull('verification_id')->Where('valider',1);

        if ($produit_search == 'annuler')$query = $query->whereNotNull('verification_id')->Where('annuler',1);

        if ($produit_search == 'ettente')$query = $query->whereNotNull('verification_id')->Where('valider',0)->Where('annuler',0);

    } */

    return $query;

}



public function scopeSearchRange($query,$dateRange)

{

    if(($dateRange and $dateRange <> ""))
    {
        list($from, $to) = explode(" - ", $dateRange);
        $query = $query
        ->whereBetween('produits.created_at', [$from, $to]);
    }


    return $query;



}





protected static function booted() {





    parent::boot();

    //static::addGlobalScope(new LatestScope);



}







}

