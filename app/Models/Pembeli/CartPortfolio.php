<?php

namespace App\Models\Pembeli;

use App\Models\Admin\Portfolio;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartPortfolio extends Model
{
    use HasFactory;

    protected $guarded = ['id_cart_portfolio'];
    protected $primaryKey = 'id_cart_portfolio';

    // Many to One to portfolio table
    public function portfolio(): BelongsTo
    {
        return $this->BelongsTo(Portfolio::class, 'id_portfolio');
    }

    // Many to One to user table
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'id_user');
    }
}