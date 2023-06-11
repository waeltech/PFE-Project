<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('assistantes', function (Blueprint $table) {
            $table->string('idAssist')->primary();
            $table->string('NomAssist');
            $table->string('PrenomAssist');
            $table->string('TelAssist');
            $table->string('EmailAssist')->unique();
            $table->string('Password');
            $table->string('Ville');
            $table->unsignedInteger('role')->default('assistantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistantes');
    }
};
