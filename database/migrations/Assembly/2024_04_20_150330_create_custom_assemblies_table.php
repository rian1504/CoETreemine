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
            $table->string("sensitive_component_description");
            $table->integer("unique_part");
            $table->integer("smt_part");
            $table->integer("bga_part");
            $table->integer("through_hole_part");
            $table->enum("depanel", ["yes", "no"]);
            $table->enum("function_test", ["yes", "no"]);
            $table->enum("cable_wire", ["yes", "no"]);
            $table->text("detail_information");
            $table->integer("price");
            $table->string("file");
            $table->unsignedBigInteger("flexible_option");
            $table->unsignedBigInteger("board_type");
            $table->unsignedBigInteger("assembly_side");
            $table->timestamps();

            $table->foreign("flexible_option")->references("id_flexible")->on("assembly_flexibles")->onDelete("cascade");
            $table->foreign("board_type")->references("id_board")->on("assembly_board_types")->onDelete("cascade");
            $table->foreign("assembly_side")->references("id_side")->on("assembly_sides")->onDelete("cascade");
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
