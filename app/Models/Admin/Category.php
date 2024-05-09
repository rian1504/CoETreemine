<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // One to Many to portfolios table
    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class);
    }
}
