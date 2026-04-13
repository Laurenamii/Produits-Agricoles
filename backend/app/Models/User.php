<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 
        'telephone', 'adresse', 'role'
    ];

    protected $hidden = ['password'];

    public function producteur()
    {
        return $this->hasOne(Producteur::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }
}