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
        Schema::create('patrullaagente', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('matricula_patrulla'); 
            $table->timestamps();
            
            // Remove 'numero_placa_policia' from the primary key definition
            $table->primary(['matricula_patrulla', 'user_id']);
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('matricula_patrulla')->references('matricula')->on('patrulla');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrullaagente');
    }
};