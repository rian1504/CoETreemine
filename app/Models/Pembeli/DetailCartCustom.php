<?php

namespace App\Models\Pembeli;

use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Pembeli\CartCustom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailCartCustom extends Model
{
    use HasFactory;

    protected $guarded = ['id_detail_cart_custom'];
    protected $primaryKey = 'id_detail_cart_custom';

    // Many to One to cart_custom table
    public function cart_custom(): BelongsTo
    {
        return $this->BelongsTo(CartCustom::class, 'id_cart_custom');
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