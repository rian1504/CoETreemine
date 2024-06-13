<?php

namespace App\Models\Buyer;

use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\Portfolio;
use App\Models\Buyer\Order;
use Database\Factories\DetailOrderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailOrder extends Model
{
    use HasFactory;

    protected $guarded = ['id_detail_order'];
    protected $primaryKey = 'id_detail_order';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new DetailOrderFactory();
    }

    // Many to One to order table
    public function order(): BelongsTo
    {
        return $this->BelongsTo(Order::class, 'id_order');
    }

    // Many to One to portfolio table
    public function portfolio(): BelongsTo
    {
        return $this->BelongsTo(Portfolio::class, 'id_portfolio');
    }

    // Many to One to customs_assembly table
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
