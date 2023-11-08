<?php

namespace App\Models\shops;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop_type extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'shop_type_name',
        'shop_work_content',
        'working_hour_id',
        'created_at',
        'updated_at',
    ];

    //shop_management
    /*public function Shop()
    {
        return $this->hasOne(shops/Shop::class);
    }*/

    //shop_management
    public function working_hour() 
    {
        return $this->belongsTo(working_hour::class);
    }

}
