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
        Schema::create('prototype_thicknesses', function (Blueprint $table) {
            $table->id("id_thickness");
            $table->integer("thickness_name");
            $table->integer("thickness_price");
            $table->unsignedBigInteger("id_layer");
            $table->timestamps();

            $table->foreign("id_layer")->references("id_layer")->on("prototype_layers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prototype_thicknesses');
    }
};
