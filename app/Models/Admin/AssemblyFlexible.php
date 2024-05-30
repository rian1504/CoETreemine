<?php

namespace App\Models\Admin;

use Database\Factories\AssemblyFlexibleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AssemblyFlexible extends Model
{
    use HasFactory;

    protected $guarded = ['id_flexible'];
    protected $primaryKey = 'id_flexible';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new AssemblyFlexibleFactory();
    }

    // One to Many to custom_assembly table
    public function custom_assembly(): HasMany
    {
        return $this->HasMany(CustomAssembly::class, 'id_custom_assembly');
    }
}
