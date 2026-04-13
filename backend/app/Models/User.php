<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenoms',
        'email',
        'role'
    ];

    public function isAdmin(){
        return $this -> role === 'admin';
    }

    public function isProducteur(){
        return $this -> role === 'producteur';
    }
    public function isClient(){
        return $this -> role === 'client';
    }

}