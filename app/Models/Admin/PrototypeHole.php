<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeHoleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeHole extends Model
{
    use HasFactory;

    protected $guarded = ['id_hole'];
    protected $primaryKey = 'id_hole';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeHoleFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_hole');
    }
}
