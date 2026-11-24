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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('patient_id');          
            $table->foreign('patient_id', 'fk_medical_records_patients')->references('id')->on('patients')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('doctor_id');
            $table->jsonb('content');
            $table->boolean('encrypted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
