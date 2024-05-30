<?php

namespace App\Models\Admin;

use App\Models\Pembeli\CartCustom;
use App\Models\Pembeli\DetailOrder;
use Database\Factories\AssemblyFactory;
use Database\Factories\CustomAssemblyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomAssembly extends Model
{
    use HasFactory;

    protected $guarded = ['id_custom_assembly'];
    protected $primaryKey = 'id_custom_assembly';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new CustomAssemblyFactory();
    }

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

    // One to Many to cart_custom table
    public function cart_custom(): HasMany
    {
        return $this->HasMany(CartCustom::class, 'id_cart_custom');
    }

    // One to Many to history_cart_custom table
    public function history_cart_custom(): HasMany
    {
        return $this->HasMany(HistoryCartCustom::class, 'id_history_cart_custom');
    }

    // One to Many to detail_order table
    public function detail_order(): HasMany
    {
        return $this->HasMany(DetailOrder::class, 'id_detail_order');
    }
}
