<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable = [
       'quantite','total','date','produit_id','user_id',
    ];

    public function produit(){
        return $this -> belongsTo(Produit::class);
    }
}
