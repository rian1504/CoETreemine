<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeInnerCooperFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeInnerCooper extends Model
{
    use HasFactory;

    protected $guarded = ['id_inner_cooper'];
    protected $primaryKey = 'id_inner_cooper';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeInnerCooperFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_inner_cooper');
    }
}
