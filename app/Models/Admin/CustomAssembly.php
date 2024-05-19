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

    protected $guarded = ['id_custom_assembly'];
    protected $primaryKey = 'id_custom_assembly';

    // Many to One to assembly_flexible table
    public function assembly_flexible(): BelongsTo
    {
        return $this->BelongsTo(AssemblyFlexible::class, 'id_flexible');
    }

    // Many to One to assembly_board_type table
    public function assembly_board_type(): BelongsTo
    {
        return $this->BelongsTo(AssemblyBoardType::class, 'id_board');
    }

    // Many to One to assembly_side table
    public function assembly_side(): BelongsTo
    {
        return $this->BelongsTo(AssemblySide::class, 'id_side');
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