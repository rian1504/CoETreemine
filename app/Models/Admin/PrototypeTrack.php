<?php

namespace App\Models\Admin;

use Database\Factories\PrototypeTrackFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrototypeTrack extends Model
{
    use HasFactory;

    protected $guarded = ['id_track'];
    protected $primaryKey = 'id_track';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PrototypeTrackFactory();
    }

    // One to Many to custom_prototype table
    public function custom_prototype(): HasMany
    {
        return $this->HasMany(CustomPrototype::class, 'id_custom_prototype');
    }
}
