<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeCooperLayerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeCooperLayer extends Model
{
    use HasFactory;

    protected $guarded = ['id_cooper_layer'];
    protected $primaryKey = 'id_cooper_layer';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeCooperLayerFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }
}
