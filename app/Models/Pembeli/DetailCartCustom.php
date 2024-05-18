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

    // Many to One to cart_customs table
    public function cart_customs(): BelongsTo
    {
        return $this->BelongsTo(CartCustom::class);
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