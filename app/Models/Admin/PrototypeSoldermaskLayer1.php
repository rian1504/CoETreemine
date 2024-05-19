<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeSoldermaskLayer1 extends Model
{
    use HasFactory;

    protected $guarded = ['id_soldermask_layer1'];
    protected $primaryKey = 'id_soldermask_layer1';

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }
}