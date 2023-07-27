<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_brand extends Model
{
    use HasFactory;
    
    protected $table = 'car_brands';

    protected $guarded = [
    ];

    public function car_model()
    {
        return $this->hasMany(Car_model::class, 'car_brand_id', 'id');
    }

}
