<?php

namespace App\Models\Admin;

use App\Models\User;
use Database\Factories\HistoryCartCustomFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryCartCustom extends Model
{
    use HasFactory;

    protected $guarded = ['id_history_cart_custom'];
    protected $primaryKey = 'id_history_cart_custom';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new HistoryCartCustomFactory();
    }

    // Many to One to user table
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'id_user');
    }

    // Many to One to custom_assembly table
    public function custom_assembly(): BelongsTo
    {
        return $this->BelongsTo(CustomAssembly::class, 'id_custom_assembly');
    }

    // Many to One to custom_prototype table
    public function custom_prototype(): BelongsTo
    {
        return $this->BelongsTo(CustomPrototype::class, 'id_custom_prototype');
    }
}
