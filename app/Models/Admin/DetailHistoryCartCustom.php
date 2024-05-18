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

    // Many to One to history_cart_customs table
    public function history_cart_customs(): BelongsTo
    {
        return $this->BelongsTo(HistoryCartCustom::class);
    }

    // Many to One to custom_assemblies table
    public function custom_assemblies(): BelongsTo
    {
        return $this->BelongsTo(CustomAssembly::class);
    }

    // Many to One to custom_prototypes table
    public function custom_prototypes(): BelongsTo
    {
        return $this->BelongsTo(CustomPrototype::class);
    }
}