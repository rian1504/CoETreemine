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
        Schema::create('custom_assemblies', function (Blueprint $table) {
            $table->id("id_custom_assembly");
            $table->integer("quantity");
            $table->enum("sensitive_component", ["yes", "no"]);
            $table->string("sensitive_component_description")->nullable();
            $table->integer("unique_part")->nullable();
            $table->integer("smt_part")->nullable();
            $table->integer("bga_part")->nullable();
            $table->integer("through_hole_part")->nullable();
            $table->enum("depanel", ["yes", "no"]);
            $table->enum("function_test", ["yes", "no"]);
            $table->enum("cable_wire", ["yes", "no"]);
            $table->text("detail_information")->nullable();
            $table->integer("price");
            $table->string("file")->nullable();
            $table->unsignedBigInteger("id_flexible");
            $table->unsignedBigInteger("id_board");
            $table->unsignedBigInteger("id_side");
            $table->timestamps();

            $table->foreign("id_flexible")->references("id_flexible")->on("assembly_flexibles")->onDelete("cascade");
            $table->foreign("id_board")->references("id_board")->on("assembly_board_types")->onDelete("cascade");
            $table->foreign("id_side")->references("id_side")->on("assembly_sides")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_assemblies');
    }
};
