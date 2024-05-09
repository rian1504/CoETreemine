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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id("id_portfolio");
            $table->string("portfolio_name");
            $table->integer("portfolio_price");
            $table->text("portfolio_description");
            $table->integer("portfolio_stock");
            $table->string("portfolio_picture");
            $table->unsignedBigInteger("id_category");
            $table->timestamps();

            $table->foreign("id_category")->references("id_category")->on("categories")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
