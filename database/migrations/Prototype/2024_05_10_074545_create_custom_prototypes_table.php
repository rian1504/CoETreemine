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
        Schema::create('custom_prototypes', function (Blueprint $table) {
            $table->id("id_custom_prototype");
            $table->enum("x_out", ["accept", "not accept"])->nullable();
            $table->enum("panel_requirement", ["yes", "no"]);
            $table->text("panel_requirement_description")->nullable();
            $table->integer("design_panel");
            $table->integer("length");
            $table->integer("width");
            $table->integer("quantity");
            $table->string("file")->nullable();
            $table->integer("price");
            $table->unsignedBigInteger("id_board");
            $table->unsignedBigInteger("id_route");
            $table->unsignedBigInteger("id_fr4");
            $table->unsignedBigInteger("id_thickness");
            $table->unsignedBigInteger("id_layer");
            $table->unsignedBigInteger("id_inner_cooper")->nullable();
            $table->unsignedBigInteger("id_track");
            $table->unsignedBigInteger("id_hole");
            $table->unsignedBigInteger("id_solder");
            $table->unsignedBigInteger("id_silk");
            $table->unsignedBigInteger("id_surface");
            $table->unsignedBigInteger("id_via");
            $table->unsignedBigInteger("id_finished_cooper");
            $table->unsignedBigInteger("id_material");
            $table->unsignedBigInteger("id_soldermask_layer1")->nullable();
            $table->unsignedBigInteger("id_silkscreen_layer1")->nullable();
            $table->unsignedBigInteger("id_cooper_layer")->nullable();
            $table->timestamps();

            $table->foreign("id_board")->references("id_board")->on("prototype_board_types")->onDelete("cascade");
            $table->foreign("id_route")->references("id_route")->on("prototype_route_processes")->onDelete("cascade");
            $table->foreign("id_fr4")->references("id_fr4")->on("prototype_fr4s")->onDelete("cascade");
            $table->foreign("id_thickness")->references("id_thickness")->on("prototype_thicknesses")->onDelete("cascade");
            $table->foreign("id_layer")->references("id_layer")->on("prototype_layers")->onDelete("cascade");
            $table->foreign("id_inner_cooper")->references("id_inner_cooper")->on("prototype_inner_coopers")->onDelete("cascade");
            $table->foreign("id_track")->references("id_track")->on("prototype_tracks")->onDelete("cascade");
            $table->foreign("id_hole")->references("id_hole")->on("prototype_holes")->onDelete("cascade");
            $table->foreign("id_solder")->references("id_solder")->on("prototype_solders")->onDelete("cascade");
            $table->foreign("id_silk")->references("id_silk")->on("prototype_silks")->onDelete("cascade");
            $table->foreign("id_surface")->references("id_surface")->on("prototype_surfaces")->onDelete("cascade");
            $table->foreign("id_via")->references("id_via")->on("prototype_via_processes")->onDelete("cascade");
            $table->foreign("id_finished_cooper")->references("id_finished_cooper")->on("prototype_finished_coopers")->onDelete("cascade");
            $table->foreign("id_material")->references("id_material")->on("prototype_materials")->onDelete("cascade");
            $table->foreign("id_soldermask_layer1")->references("id_soldermask_layer1")->on("prototype_soldermask_layer1s")->onDelete("cascade");
            $table->foreign("id_silkscreen_layer1")->references("id_silkscreen_layer1")->on("prototype_silkscreen_layer1s")->onDelete("cascade");
            $table->foreign("id_cooper_layer")->references("id_cooper_layer")->on("prototype_cooper_layers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_prototypes');
    }
};
