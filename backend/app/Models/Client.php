<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
   
    protected $fillable = [
    'user_id',
    'adresse_livraison'
   ];

   public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    //Un client a plusieurs commndes
    public function commandes(){
        return $this -> hasMany(Commande::class);
    }

     //un client peut avoir pls produits dans son panier 
     public function paniers(){
        return $this -> hasMany(Panier::class);
     }
}
