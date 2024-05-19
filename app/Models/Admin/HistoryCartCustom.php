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

    protected $guarded = ['id_history_cart_custom'];
    protected $primaryKey = 'id_history_cart_custom';

    // One to Many to detail_history_cart_custom table
    public function detail_history_cart_custom(): HasMany
    {
        return $this->HasMany(DetailHistoryCartCustom::class, 'id_detail_history_cart_custom');
    }

    // Many to One to user table
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'id_user');
    }
}