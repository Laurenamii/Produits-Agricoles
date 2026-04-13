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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producteur_id')->constrained('producteurs')->onDelete('cascade');
            $table->string('nom',50);
            $table->string('categorie',50)->index();
            $table->string('description',50)->nullable();
            $table->decimal('prix_unitaire',10,2)->default(0);
            $table->decimal('unite',10,2)->default(0);
            $table->decimal('quantite_stock', 10,3)->default(0);
            $table->date('date_ajout')->index();
            $table->timestamps();

           
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
        
    }
};
