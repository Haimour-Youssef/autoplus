<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



class Parametre extends Authenticatable

{

    use HasFactory, Notifiable;
    public $timestamps = false;



    protected $fillable = ['valeur'];

    static function afficherLibelle($id)

    {
    	//return  $this->where('id',$id)->select('libelle')->get()->first()->libelle;
    }


   




}

