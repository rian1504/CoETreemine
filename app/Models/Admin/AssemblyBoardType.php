<?php

namespace App\Models\Admin;

use Database\Factories\AssemblyBoardTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AssemblyBoardType extends Model
{
    use HasFactory;

    protected $guarded = ['id_board'];
    protected $primaryKey = 'id_board';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new AssemblyBoardTypeFactory();
    }

    // One to Many to custom_assembly table
    public function custom_assembly(): HasMany
    {
        return $this->HasMany(CustomAssembly::class, 'id_board');
    }
}
