<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeMaterialFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeMaterial extends Model
{
    use HasFactory;

    protected $guarded = ['id_material'];
    protected $primaryKey = 'id_material';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeMaterialFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_material');
    }
}