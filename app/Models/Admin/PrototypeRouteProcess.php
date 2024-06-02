<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeRouteProcessFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeRouteProcess extends Model
{
    use HasFactory;

    protected $guarded = ['id_route'];
    protected $primaryKey = 'id_route';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeRouteProcessFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_route');
    }
}
