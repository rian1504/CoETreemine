<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeFr4Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeFr4 extends Model
{
    use HasFactory;

    protected $guarded = ['id_fr4'];
    protected $primaryKey = 'id_fr4';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeFr4Factory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_fr4');
    }
}
