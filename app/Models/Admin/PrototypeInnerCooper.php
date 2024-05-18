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

    // One to Many to custom_prototypes table
    public function custom_prototypes(): HasMany
    {
        return $this->HasMany(CustomPrototype::class);
    }

    // Many to One to prototype_layers table
    public function prototype_layers(): BelongsTo
    {
        return $this->BelongsTo(PrototypeLayer::class);
    }
}