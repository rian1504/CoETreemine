<?php

namespace App\Models\Pembeli;

use App\Models\Pembeli\DetailCartCustom;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CartCustom extends Model
{
    use HasFactory;

    protected $guarded = ['id_cart_custom'];
    protected $primaryKey = 'id_cart_custom';

    // One to Many to detail_cart_customs table
    public function detail_cart_customs(): HasMany
    {
        return $this->hasMany(DetailCartCustom::class);
    }

    // Many to One to users table
    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}