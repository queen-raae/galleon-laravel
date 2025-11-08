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
        Schema::create('galleon_actions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('art_id');
            $table->string('action_type')->default('bookmark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleon_actions');
    }
};
