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

    // Many to One to users table
    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    // One to Many to detail_orders table
    public function detail_orders(): HasMany
    {
        return $this->HasMany(DetailOrder::class);
    }
}