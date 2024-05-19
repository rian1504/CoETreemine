<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id_category'];
    protected $primaryKey = 'id_category';

    // One to Many to portfolio table
    public function portfolio(): HasMany
    {
        return $this->hasMany(Portfolio::class, 'id_portfolio');
    }
}