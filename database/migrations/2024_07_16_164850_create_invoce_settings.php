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
        Schema::create('invoce_settings', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignId('business_id')->constrained('businesses')->cascadeOnDelete();
            $table->enum('numbering_type', ['sequential', 'random']);
            $table->string('prefix');
            $table->integer('start')->default(0);
            $table->integer('invoice_count')->default(0);
            $table->integer('total_digits')->default(0);
            $table->boolean('is_default')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoce_setting');
    }
};
