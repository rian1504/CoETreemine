<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeInnerCooper extends Model
{
    use HasFactory;

    protected $guarded = ['id_inner_cooper'];
    protected $primaryKey = 'id_inner_cooper';

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }

    // Many to One to prototype_layer table
    public function prototype_layer(): BelongsTo
    {
        return $this->BelongsTo(PrototypeLayer::class, 'id_layer');
    }
}