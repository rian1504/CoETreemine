<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeThicknessFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeThickness extends Model
{
    use HasFactory;

    protected $guarded = ['id_thickness'];
    protected $primaryKey = 'id_thickness';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeThicknessFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_thickness');
    }

    // Many to One to prototype_layer table
    public function prototype_layer(): BelongsTo
    {
        return $this->BelongsTo(PrototypeLayer::class, 'id_layer');
    }
}
