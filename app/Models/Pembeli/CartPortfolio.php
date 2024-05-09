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

    // Many to One to portfolios table
    public function portfolios(): BelongsTo
    {
        return $this->BelongsTo(Portfolio::class);
    }

    // Many to One to users table
    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
