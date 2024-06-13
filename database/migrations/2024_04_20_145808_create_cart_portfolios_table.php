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
        Schema::create('cart_portfolios', function (Blueprint $table) {
            $table->id("id_cart_portfolio");
            $table->integer("quantity");
            $table->unsignedBigInteger("id_portfolio");
            $table->unsignedBigInteger("id_user");
            $table->timestamps();

            $table->foreign("id_portfolio")->references("id_portfolio")->on("portfolios")->onDelete("cascade");
            $table->foreign("id_user")->references("id_user")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_portfolios');
    }
};
