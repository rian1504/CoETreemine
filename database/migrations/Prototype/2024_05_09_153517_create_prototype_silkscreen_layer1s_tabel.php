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
        Schema::create('prototype_silkscreen_layer1s', function (Blueprint $table) {
            $table->id("id_silkscreen_layer1");
            $table->string("silkscreen_layer1_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prototype_silkscreen_layer1s');
    }
};
