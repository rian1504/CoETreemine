<?php

namespace App\Models\Pembeli;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    // Many to One to user table
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}