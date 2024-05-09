<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeViaProcess extends Model
{
    use HasFactory;

    // One to Many to custom_prototypes table
    public function custom_prototypes(): HasMany
    {
        return $this->HasMany(CustomPrototype::class);
    }
}
