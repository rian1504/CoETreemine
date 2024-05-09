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
        Schema::create('detail_history_cart_customs', function (Blueprint $table) {
            $table->id("id_detail_history_cart_customs");
            $table->unsignedBigInteger("id_history_cart_custom")->nullable();
            $table->unsignedBigInteger("id_custom_assembly")->nullable();
            $table->unsignedBigInteger("id_custom_prototype")->nullable();
            $table->timestamps();

            $table->foreign("id_history_cart_custom")->references("id_history_cart_custom")->on("history_cart_customs")->onDelete("cascade");
            $table->foreign("id_custom_assembly")->references("id_custom_assembly")->on("custom_assemblies")->onDelete("cascade");
            $table->foreign("id_custom_prototype")->references("id_custom_prototype")->on("custom_prototypes")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_history_cart_customs');
    }
};
