<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeLayerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeLayer extends Model
{
    use HasFactory;

    protected $guarded = ['id_layer'];
    protected $primaryKey = 'id_layer';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeLayerFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_layer');
    }

    // One to Many to prototype_thickness table
    public function prototype_thickness(): HasMany
    {
        return $this->HasMany(PrototypeThickness::class, 'id_layer');
    }

    // One to Many to prototype_inner_cooper table
    public function prototype_inner_cooper(): HasMany
    {
        return $this->HasMany(PrototypeInnerCooper::class, 'id_layer');
    }
}
