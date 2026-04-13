<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','producteur_id','description','categorie','prix_unitaire','unite','quantite_stock','date_ajout',
    ];


    public function producteur()
    {
        return $this->belongsTo(Producteur::class);
    }

    public function lignesCommande()
    {
        return $this->hasMany(Ligne_Commande::class);
    }

    public function paniers()
    {
        return $this->hasMany(Panier::class);
    }

   
     
   
}
