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
        Schema::create('prototype_inner_coopers', function (Blueprint $table) {
            $table->id("id_inner_cooper");
            $table->integer("inner_cooper_name");
            $table->integer("inner_cooper_price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prototype_inner_coopers');
    }
};
