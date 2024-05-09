<?php

namespace App\Models\Admin;

use App\Models\Pembeli\CartPortfolio;
use App\Models\Pembeli\DetailOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasFactory;

    // Many to One to categories table
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // One to Many to cart_portfolios table
    public function cart_portfolios(): HasMany
    {
        return $this->HasMany(CartPortfolio::class);
    }

    // One to Many to detail_orders table
    public function detail_orders(): HasMany
    {
        return $this->HasMany(DetailOrder::class);
    }
}
