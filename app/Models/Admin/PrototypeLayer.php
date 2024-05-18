<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeLayer extends Model
{
    use HasFactory;

    protected $guarded = ['id_layer'];
    protected $primaryKey = 'id_layer';

    // One to Many to custom_prototypes table
    public function custom_prototypes(): HasMany
    {
        return $this->HasMany(CustomPrototype::class);
    }

    // One to Many to prototype_thicknesses table
    public function prototype_thicknesses(): HasMany
    {
        return $this->HasMany(PrototypeThickness::class);
    }

    // One to Many to prototype_inner_coopers table
    public function prototype_inner_coopers(): HasMany
    {
        return $this->HasMany(PrototypeInnerCooper::class);
    }
}