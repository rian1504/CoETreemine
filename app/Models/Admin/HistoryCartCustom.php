<?php

namespace App\Models\Admin;

use App\Models\Admin\DetailHistoryCartCustom;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HistoryCartCustom extends Model
{
    use HasFactory;

    // One to Many to detail_history_cart_customs table
    public function detail_history_cart_customs(): HasMany
    {
        return $this->HasMany(DetailHistoryCartCustom::class);
    }

    // Many to One to users table
    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
