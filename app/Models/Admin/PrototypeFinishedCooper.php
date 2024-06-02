<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeFinishedCooperFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeFinishedCooper extends Model
{
    use HasFactory;

    protected $guarded = ['id_finished_cooper'];
    protected $primaryKey = 'id_finished_cooper';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeFinishedCooperFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_finished_cooper');
    }
}
