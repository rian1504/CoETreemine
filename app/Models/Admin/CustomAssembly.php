<?php

namespace App\Models\Admin;

use App\Models\Pembeli\DetailCartCustom;
use App\Models\Pembeli\DetailOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomAssembly extends Model
{
    use HasFactory;

    // Many to One to assembly_flexibles table
    public function assembly_flexibles(): BelongsTo
    {
        return $this->BelongsTo(AssemblyFlexible::class);
    }

    // Many to One to assembly_board_types table
    public function assembly_board_types(): BelongsTo
    {
        return $this->BelongsTo(AssemblyBoardType::class);
    }

    // Many to One to assembly_sides table
    public function assembly_sides(): BelongsTo
    {
        return $this->BelongsTo(AssemblySide::class);
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
