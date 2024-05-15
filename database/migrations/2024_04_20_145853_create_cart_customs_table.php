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
            $table->string("status");
            $table->integer("total_price");
            $table->unsignedBigInteger("id_user");
            $table->timestamps();

            $table->foreign("id_user")->references("id")->on("users")->onDelete("cascade");
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
