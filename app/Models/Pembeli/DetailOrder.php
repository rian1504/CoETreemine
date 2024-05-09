<?php

namespace App\Models\Pembeli;

use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailOrder extends Model
{
    use HasFactory;

    // Many to One to orders table
    public function orders(): BelongsTo
    {
        return $this->BelongsTo(Order::class);
    }

    // Many to One to portfolios table
    public function portfolios(): BelongsTo
    {
        return $this->BelongsTo(Portfolio::class);
    }

    // Many to One to customs_assemblies table
    public function customs_assemblies(): BelongsTo
    {
        return $this->BelongsTo(CustomAssembly::class);
    }

    // Many to One to custom_prototypes table
    public function custom_prototypes(): BelongsTo
    {
        return $this->BelongsTo(CustomPrototype::class);
    }
}
