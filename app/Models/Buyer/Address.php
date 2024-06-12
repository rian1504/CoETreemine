<?php

namespace App\Models\Buyer;

use App\Models\User;
use Database\Factories\AddressFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    // Seeder and Factory
    protected static function newFactory()
    {
        return new AddressFactory();
    }

    // Many to One to user table
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
