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
            $table->text("panel_requirement_description");
            $table->integer("design_panel");
            $table->integer("length");
            $table->integer("width");
            $table->integer("quantity");
            $table->string("file");
            $table->integer("price");
            $table->unsignedBigInteger("board_type");
            $table->unsignedBigInteger("route_process");
            $table->unsignedBigInteger("fr4");
            $table->unsignedBigInteger("thickness");
            $table->unsignedBigInteger("layer");
            $table->unsignedBigInteger("inner_cooper");
            $table->unsignedBigInteger("min_track");
            $table->unsignedBigInteger("min_hole");
            $table->unsignedBigInteger("solder_mask");
            $table->unsignedBigInteger("silkscreen");
            $table->unsignedBigInteger("surface_finish");
            $table->unsignedBigInteger("via_process");
            $table->unsignedBigInteger("finished_cooper");
            $table->unsignedBigInteger("material");
            $table->unsignedBigInteger("soldermask_layer1");
            $table->unsignedBigInteger("silkscreen_layer1");
            $table->unsignedBigInteger("cooper_layer");
            $table->timestamps();

            $table->foreign("board_type")->references("id_board")->on("prototype_board_types")->onDelete("cascade");
            $table->foreign("route_process")->references("id_route")->on("prototype_route_processes")->onDelete("cascade");
            $table->foreign("fr4")->references("id_fr4")->on("prototype_fr4s")->onDelete("cascade");
            $table->foreign("thickness")->references("id_thickness")->on("prototype_thicknesses")->onDelete("cascade");
            $table->foreign("layer")->references("id_layer")->on("prototype_layers")->onDelete("cascade");
            $table->foreign("inner_cooper")->references("id_inner_cooper")->on("prototype_inner_coopers")->onDelete("cascade");
            $table->foreign("min_track")->references("id_track")->on("prototype_tracks")->onDelete("cascade");
            $table->foreign("min_hole")->references("id_hole")->on("prototype_holes")->onDelete("cascade");
            $table->foreign("solder_mask")->references("id_solder")->on("prototype_solders")->onDelete("cascade");
            $table->foreign("silkscreen")->references("id_silk")->on("prototype_silks")->onDelete("cascade");
            $table->foreign("surface_finish")->references("id_surface")->on("prototype_surfaces")->onDelete("cascade");
            $table->foreign("via_process")->references("id_via")->on("prototype_via_processes")->onDelete("cascade");
            $table->foreign("material")->references("id_material")->on("prototype_materials")->onDelete("cascade");
            $table->foreign("soldermask_layer1")->references("id_soldermask_layer1")->on("prototype_soldermask_layer1s")->onDelete("cascade");
            $table->foreign("silkscreen_layer1")->references("id_silkscreen_layer1")->on("prototype_silkscreen_layer1s")->onDelete("cascade");
            $table->foreign("cooper_layer")->references("id_cooper_layer")->on("prototype_cooper_layers")->onDelete("cascade");
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
