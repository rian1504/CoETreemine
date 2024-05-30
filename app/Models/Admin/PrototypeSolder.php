<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeSolderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeSolder extends Model
{
    use HasFactory;

    protected $guarded = ['id_solder'];
    protected $primaryKey = 'id_solder';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeSolderFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }
}
