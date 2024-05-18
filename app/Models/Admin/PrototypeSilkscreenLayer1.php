<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeSilkscreenLayer1 extends Model
{
    use HasFactory;

    protected $guarded = ['id_silkscreen_layer1'];
    protected $primaryKey = 'id_silkscreen_layer1';

    // One to Many to custom_prototypes table
    public function custom_prototypes(): HasMany
    {
        return $this->HasMany(CustomPrototype::class);
    }
}