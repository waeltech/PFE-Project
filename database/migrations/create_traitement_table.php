<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('traitement', function (Blueprint $table) {
            $table->bigIncrements('Num_Traitement');
            $table->date('DateTraitement');
            $table->enum('Acte', ['Traitement endodontique', 'Obturation composite', 'Détartrage', 'Surfaçage', 'Extraction', 'Extraction chirurgicale', 'Couronne ccm', 'Couronne zircone', 'Couronne ccc', 'Implant', 'Prothèse adjointe totale', 'Stellite', 'Prothèse adjointe partielle', 'Valplast', 'Inlaycore', 'Blanchiment', 'Orthodontie']);
            $table->unsignedInteger('Dent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('traitement', function (Blueprint $table) {
            Schema::dropIfExists('traitement');
        });
    }
};
