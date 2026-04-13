<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom',50);
            $table->string('prenoms',50)->nullable();
            $table->string('telephone',50) -> nullable();
            $table->string('adresse',50)-> nullable();
            $table->string('email',50)->unique();
            $table->enum('role',['admin','producteur','client']) -> default('client');
            $table->string('mot_de_passe');
            $table->timestamps();
        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        
    }
};
