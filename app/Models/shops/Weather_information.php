<?php

namespace App\Models\shops;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Weather_information extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'aria_name',
        'created_at',
        'updated_at',
    ];

    //shop_halls_management
    public function Shop_halls() {
        return $this->hasMany(Shop_hall::class);
    }

}
