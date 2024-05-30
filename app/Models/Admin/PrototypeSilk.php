<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeSilkFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeSilk extends Model
{
    use HasFactory;

    protected $guarded = ['id_silk'];
    protected $primaryKey = 'id_silk';
    protected $table = 'prototype_silks';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeSilkFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }
}
