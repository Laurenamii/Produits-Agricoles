<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','categorie','quantite','prix','producteur_id',
    ];
    public function producteur(){
        return $this -> belongsTo(Producteur::class);
    }
    public function vente(){
        return $this -> hasMany(Vente::class);
    }
}
