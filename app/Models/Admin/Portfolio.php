<?php

namespace App\Models\Admin;

use App\Models\Buyer\CartPortfolio;
use App\Models\Buyer\DetailOrder;
use Database\Factories\PortfolioFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = ['id_portfolio'];
    protected $primaryKey = 'id_portfolio';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PortfolioFactory();
    }

    // Many to One to category table
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    // One to Many to cart_portfolio table
    public function cart_portfolio(): HasMany
    {
        return $this->HasMany(CartPortfolio::class, 'id_cart_portfolio');
    }

    // One to Many to detail_order table
    public function detail_order(): HasMany
    {
        return $this->HasMany(DetailOrder::class, 'id_detail_order');
    }
}
