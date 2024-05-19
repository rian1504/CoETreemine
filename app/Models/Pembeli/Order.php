<?php

namespace App\Models\Pembeli;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id_order'];
    protected $primaryKey = 'id_order';

    // Many to One to user table
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'id_user');
    }

    // One to Many to detail_order table
    public function detail_order(): HasMany
    {
        return $this->HasMany(DetailOrder::class, 'id_detail_order');
    }
}