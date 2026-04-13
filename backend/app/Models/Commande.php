<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
       'quantite','user_id','statut','adresse_livraison',
    ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function lignes()
    {
        return $this->hasMany(Ligne_Commande::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'ligne_commandes')
                    ->withPivot('quantite', 'prix_unitaire');
    }

 
}
