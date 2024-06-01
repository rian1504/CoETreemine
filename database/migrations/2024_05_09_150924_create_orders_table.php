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
        Schema::create('orders', function (Blueprint $table) {
            $table->id("id_order");
            $table->string("address");
            $table->string("shipping_method");
            $table->string("payment_proof");
            $table->integer("total_price");
            $table->enum("status", ["not review", "reject", "accepted"]);
            $table->string("no_invoice")->nullable();
            $table->unsignedBigInteger("id_user");
            $table->timestamps();

            $table->foreign("id_user")->references("id_user")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
