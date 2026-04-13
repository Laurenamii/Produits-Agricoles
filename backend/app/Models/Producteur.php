<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','prenom','contact','adresse', 'email'
    ];

    public function produits(){
        return $this ->hasMany(Produit::class);
    }
}
