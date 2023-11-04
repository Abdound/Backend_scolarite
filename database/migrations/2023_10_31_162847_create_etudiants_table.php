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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code_etu');
            $table->string('ine');           
            $table->string('nom');
            $table->string('prenom');
            $table->string('mail_ugb');
            $table->date('date_naiss_etu');
            $table->string('lieu_naiss_etu');
            $table->string('sexe');
            $table->string('adresse_etu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
