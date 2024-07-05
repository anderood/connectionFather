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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->date('date_scheduling');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('status_job_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('status_job_id')->references('id')->on('status_jobs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('jobs');
    }
};
