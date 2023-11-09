<?php

namespace App\Models\shops;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Shop_hall extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'develop_postal_code',
        'develop_address',
        'develop_building',
        'develop_symbol',
        'develop_name',
        'weather_information_id',
        'created_at',
        'updated_at',
    ];

    //shop_halls_management
    public function Weather_information() {
        return $this->belongsTo(Weather_information::class);
    }

}
