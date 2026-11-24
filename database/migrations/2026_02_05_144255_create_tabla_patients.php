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
            $table->increments('id');
            $table->integer('internal_code')->unique()->coment('Código de historial clínico propio de la clínica.'); 
            $table->string('name',50);
             $table->string('email',250)->unique();
            $table->integer('phone');
            $table->timestamps();
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';
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
