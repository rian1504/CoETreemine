<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeBoardTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeBoardType extends Model
{
    use HasFactory;

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeBoardTypeFactory();
    }

    protected $guarded = ['id_board'];
    protected $primaryKey = 'id_board';

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }
}
