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

    // Many to One to prototype_board_types table
    public function prototype_board_types(): BelongsTo
    {
        return $this->BelongsTo(PrototypeBoardType::class);
    }

    // Many to One to prototype_route_processes table
    public function prototype_route_processes(): BelongsTo
    {
        return $this->BelongsTo(PrototypeRouteProcess::class);
    }

    // Many to One to prototype_fr4s table
    public function prototype_fr4s(): BelongsTo
    {
        return $this->BelongsTo(PrototypeFr4::class);
    }

    // Many to One to prototype_thicknesses table
    public function prototype_thicknesses(): BelongsTo
    {
        return $this->BelongsTo(PrototypeThickness::class);
    }

    // Many to One to prototype_layers table
    public function prototype_layers(): BelongsTo
    {
        return $this->BelongsTo(PrototypeLayer::class);
    }

    // Many to One to prototype_inner_coopers table
    public function prototype_inner_coopers(): BelongsTo
    {
        return $this->BelongsTo(PrototypeInnerCooper::class);
    }

    // Many to One to prototype_finished_coopers table
    public function prototype_finished_coopers(): BelongsTo
    {
        return $this->BelongsTo(PrototypeFinishedCooper::class);
    }

    // Many to One to prototype_cooper_layers table
    public function prototype_cooper_layers(): BelongsTo
    {
        return $this->BelongsTo(PrototypeCooperLayer::class);
    }

    // Many to One to prototype_tracks table
    public function prototype_tracks(): BelongsTo
    {
        return $this->BelongsTo(PrototypeTrack::class);
    }

    // Many to One to prototype_holes table
    public function prototype_holes(): BelongsTo
    {
        return $this->BelongsTo(PrototypeHole::class);
    }

    // Many to One to prototype_solders table
    public function prototype_solders(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSolder::class);
    }

    // Many to One to prototype_silks table
    public function prototype_silks(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSilk::class);
    }

    // Many to One to prototype_surfaces table
    public function prototype_surfaces(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSurface::class);
    }

    // Many to One to prototype_via_processes table
    public function prototype_via_processes(): BelongsTo
    {
        return $this->BelongsTo(PrototypeViaProcess::class);
    }

    // Many to One to prototype_materials table
    public function prototype_materials(): BelongsTo
    {
        return $this->BelongsTo(PrototypeMaterial::class);
    }

    // Many to One to prototype_soldermask_layer1s table
    public function prototype_soldermask_layer1s(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSoldermaskLayer1::class);
    }

    // Many to One to prototype_silkscreen_layer1s table
    public function prototype_silkscreen_layer1s(): BelongsTo
    {
        return $this->BelongsTo(PrototypeSilkscreenLayer1::class);
    }

    // One to Many to detail_cart_customs table
    public function detail_cart_customs(): HasMany
    {
        return $this->HasMany(DetailCartCustom::class);
    }

    // One to Many to detail_history_cart_customs table
    public function detail_history_cart_customs(): HasMany
    {
        return $this->HasMany(DetailHistoryCartCustom::class);
    }

    // One to Many to detail_orders table
    public function detail_orders(): HasMany
    {
        return $this->HasMany(DetailOrder::class);
    }
}