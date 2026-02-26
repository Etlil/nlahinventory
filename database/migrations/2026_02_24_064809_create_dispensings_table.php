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
        Schema::create('dispensings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('medicine_id')->constrained();
            $table->integer('quantity_dispensed'); // all per piece
            $table->string('dispensed_by')->nullable(); // Name of volunteer/nurse
            $table->string('medmission_place')->nullable();
            $table->timestamps(); // This acts as the "Date of Treatment"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispensings');
    }
};
