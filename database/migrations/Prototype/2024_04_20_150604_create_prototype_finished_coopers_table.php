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
        Schema::create('prototype_finished_coopers', function (Blueprint $table) {
            $table->id("id_finished_cooper");
            $table->integer("finished_cooper_name");
            $table->integer("finished_cooper_price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prototype_finished_coopers');
    }
};
