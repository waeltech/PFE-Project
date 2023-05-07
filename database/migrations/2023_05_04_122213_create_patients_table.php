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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('sexe');
            $table->date('dateNaiss');
            $table->string('lieuNaiss');
            $table->integer('age');
            $table->string('etatcivil');
            $table->string('addresse');
            $table->string('mutuelle');
            $table->string('profession');
            $table->string('email');
            $table->string('tel');
            $table->text('observations');                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
