<?php

namespace App\Models\shops;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class working_hour extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'shop_type_symbol',
        'opening_work',
        'Preparation',
        'payment',
        'order_work',
        '4S_Pre_closing',
        'closing_work',
        'manager_work',
        'training',
        'appointment',
        'seven_million_over',
        'ten_million_over',
        'Person_hour_sales',
        'Minimum_sales_staff',
        'created_at',
        'updated_at',
    ];

    //shop_management
    public function Shop_type()
    {
        return $this->hasMany(shops/Shop_type::class);
    }

}
