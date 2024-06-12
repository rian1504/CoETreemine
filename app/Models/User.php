<?php

namespace App\Models;

use App\Models\Admin\HistoryCartCustom;
use App\Models\Pembeli\Address;
use App\Models\Pembeli\CartCustom;
use App\Models\Pembeli\CartPortfolio;
use App\Models\Pembeli\Order;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id_user'];
    protected $primaryKey = 'id_user';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // One to Many to address table
    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    // One to Many to cart_custom table
    public function cart_custom(): HasMany
    {
        return $this->hasMany(CartCustom::class);
    }

    // One to Many to history_cart_custom table
    public function history_cart_custom(): HasMany
    {
        return $this->hasMany(HistoryCartCustom::class);
    }

    // One to Many to cart_portfolio table
    public function cart_portfolio(): HasMany
    {
        return $this->hasMany(CartPortfolio::class);
    }

    // One to Many to order table
    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
