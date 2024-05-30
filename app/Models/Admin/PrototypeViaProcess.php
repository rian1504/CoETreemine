<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeViaProcessFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeViaProcess extends Model
{
    use HasFactory;

    protected $guarded = ['id_via'];
    protected $primaryKey = 'id_via';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeViaProcessFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }
}
