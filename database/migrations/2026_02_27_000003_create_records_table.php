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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->integer('location_area_part_id');
            $table->date('cleaning_date');
            $table->enum('period_type', ['daily', 'weekly', 'monthly']);
            $table->date('period_start');
            $table->enum('shift', ['AM', 'PM']);
            $table->enum('status', ['YES', 'NO']);
            $table->string('inspector_name')->nullable();
            $table->string('verifier_name')->nullable();
            $table->text('comments')->nullable();

            $table->unique(['location_area_part_id', 'period_type', 'period_start', 'cleaning_date', 'shift']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
