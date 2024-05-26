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
        Schema::create('cart_customs', function (Blueprint $table) {
            $table->id("id_cart_custom");
            $table->enum("status", ["not review", "accepted"]);
            $table->integer("total_price");
            $table->unsignedBigInteger("id_user");
            $table->unsignedBigInteger("id_custom_assembly")->nullable();
            $table->unsignedBigInteger("id_custom_prototype")->nullable();
            $table->timestamps();

            $table->foreign("id_user")->references("id_user")->on("users")->onDelete("cascade");
            $table->foreign("id_custom_assembly")->references("id_custom_assembly")->on("custom_assemblies")->onDelete("cascade");
            $table->foreign("id_custom_prototype")->references("id_custom_prototype")->on("custom_prototypes")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_customs');
    }
};
