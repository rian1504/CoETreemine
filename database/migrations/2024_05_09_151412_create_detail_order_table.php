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
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->id("id_detail_order");
            $table->unsignedBigInteger("id_order");
            $table->unsignedBigInteger("id_portfolio")->nullable();
            $table->unsignedBigInteger("id_custom_assembly")->nullable();
            $table->unsignedBigInteger("id_custom_prototype")->nullable();
            $table->timestamps();

            $table->foreign("id_order")->references("id_order")->on("orders")->onDelete("cascade");
            $table->foreign("id_portfolio")->references("id_portfolio")->on("portfolios")->onDelete("cascade");
            $table->foreign("id_custom_assembly")->references("id_custom_assembly")->on("custom_assemblies")->onDelete("cascade");
            $table->foreign("id_custom_prototype")->references("id_custom_prototype")->on("custom_prototypes")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_orders');
    }
};
