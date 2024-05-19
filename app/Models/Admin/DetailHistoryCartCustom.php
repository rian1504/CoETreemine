<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailHistoryCartCustom extends Model
{
    use HasFactory;

    protected $guarded = ['id_detail_history_cart_custom'];
    protected $primaryKey = 'id_detail_history_cart_custom';

    // Many to One to history_cart_custom table
    public function history_cart_custom(): BelongsTo
    {
        return $this->BelongsTo(HistoryCartCustom::class, 'id_history_cart_custom');
    }

    // Many to One to custom_assembly table
    public function custom_assembly(): BelongsTo
    {
        return $this->BelongsTo(CustomAssembly::class, 'id_custom_assembly');
    }

    // Many to One to custom_prototype table
    public function custom_prototype(): BelongsTo
    {
        return $this->BelongsTo(CustomPrototype::class, 'id_custom_prototype');
    }
}