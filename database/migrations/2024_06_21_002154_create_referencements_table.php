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
        Schema::create('referencements', function (Blueprint $table) {
            $table->id();
            $table->string('url')->default('');
            $table->boolean('indexation')->default(false);
            $table->string('name')->nullable();
            $table->text('content')->nullable();
            $table->string('property')->nullable();
            $table->string('rel')->nullable();
            $table->string('href')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referencements');
    }
};
