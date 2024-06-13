<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeSurfaceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeSurface extends Model
{
    use HasFactory;

    protected $guarded = ['id_surface'];
    protected $primaryKey = 'id_surface';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeSurfaceFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_surface');
    }
}