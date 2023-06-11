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
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->string('idAdmin')->primary();
            $table->string('NomAdmin');
            $table->string('PrenomAdmin');
            $table->string('TelAdmin');
            $table->string('EmailAdmin')->unique();
            $table->string('Password');
            $table->unsignedInteger('role')->default('administrateurs');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateurs');
    }
};
