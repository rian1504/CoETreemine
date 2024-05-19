<?php

namespace App\Models\Admin;

use App\Models\Pembeli\DetailCartCustom;
use App\Models\Pembeli\DetailOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomPrototype extends Model
{
    use HasFactory;

    protected $guarded = ['id_custom_prototype'];
    protected $primaryKey = 'id_custom_prototype';

    // Many to One to prototype_board_type table
    public function prototype_board_type(): BelongsTo
    {
        return $this->BelongsTo(PrototypeBoardType::class, 'id_board');
    }

    // Many to One to prototype_route_process table
    public function prototype_route_process(): BelongsTo
    {
        return $this->BelongsTo(PrototypeRouteProcess::class, 'id_route');
    }

    // Many to One to prototype_fr4 table
    public function prototype_fr4(): BelongsTo
    {
        return $this->BelongsTo(PrototypeFr4::class, 'id_fr4');
    }

    // Many to One to prototype_thickness table
    public function prototype_thickness(): BelongsTo
    {
        return $this->BelongsTo(PrototypeThickness::class, 'id_thickness');
    }

    // Many to One to prototype_layer table
    public function prototype_layer(): BelongsTo
    {
        return $this->BelongsTo(PrototypeLayer::class, 'id_layer');
    }

    // Many to One to prototype_inner_cooper table
    public function prototype_inner_cooper(): BelongsTo
    {
        return $this->BelongsTo(PrototypeInnerCooper::class, 'id_ineer_cooper');
    }

    // Many to One to prototype_finished_cooper table
    public function prototype_finished_cooper(): BelongsTo
    {
        return $this->BelongsTo(PrototypeFinishedCooper::class, 'id_finished_cooper');
    }

    // Many to One to prototype_cooper_layer table
    public function prototype_cooper_layer(): BelongsTo
    {
        return $this->BelongsTo(PrototypeCooperLayer::class, 'id_cooper_layer');
    }

    // Many to One to prototype_track table
    public function prototype_track(): BelongsTo
    {
        return $this->BelongsTo(PrototypeTrack::class, 'id_track');
    }

    // Many to One to prototype_hole table
    public function prototype_hole(): BelongsTo
    {
        return $this->BelongsTo(PrototypeHole::class, 'id_hole');
    }

    // Many to One to prototype_solder table
    public function prototype_solder(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSolder::class, 'id_solder');
    }

    // Many to One to prototype_silk table
    public function prototype_silk(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSilk::class, 'id_silk');
    }

    // Many to One to prototype_surface table
    public function prototype_surface(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSurface::class, 'id_surface');
    }

    // Many to One to prototype_via_process table
    public function prototype_via_process(): BelongsTo
    {
        return $this->BelongsTo(PrototypeViaProcess::class, 'id_via');
    }

    // Many to One to prototype_material table
    public function prototype_material(): BelongsTo
    {
        return $this->BelongsTo(PrototypeMaterial::class, 'id_material');
    }

    // Many to One to prototype_soldermask_layer1 table
    public function prototype_soldermask_layer1(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSoldermaskLayer1::class, 'id_soldermask_layer1');
    }

    // Many to One to prototype_silkscreen_layer1 table
    public function prototype_silkscreen_layer1(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSilkscreenLayer1::class, 'id_silkscreen_layer1');
    }

    // One to Many to detail_cart_custom table
    public function detail_cart_custom(): HasMany
    {
        return $this->HasMany(DetailCartCustom::class, 'id_detail_cart_custom');
    }

    // One to Many to detail_history_cart_custom table
    public function detail_history_cart_custom(): HasMany
    {
        return $this->HasMany(DetailHistoryCartCustom::class, 'id_detail_history_cart_custom');
    }

    // One to Many to detail_order table
    public function detail_order(): HasMany
    {
        return $this->HasMany(DetailOrder::class, 'id_detail_order');
    }
}