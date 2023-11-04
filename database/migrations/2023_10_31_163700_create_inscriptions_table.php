<?php

use App\Models\Etudiant;


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\annee_aca;
use App\Models\formation;
use App\Models\niveau;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(niveau::class);
            $table->foreignIdFor(formation::class);
            $table->foreignIdFor(annee_aca::class);
            $table->foreignIdFor(Etudiant::class);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
