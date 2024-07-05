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
        Schema::dropIfExists('jobs');
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->date('date_scheduling');
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('address_id')->constrained();
            $table->foreignId('status_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign('job_user_id_foreign');
            $table->dropForeign('job_patient_id_foreign');
            $table->dropForeign('job_address_id_foreign');
            $table->dropForeign('job_status_id_foreign');
        });
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job');
    }
};
