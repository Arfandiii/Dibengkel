<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $table = 'cars';

    protected $guarded = [
    ];

    public function car_detail()
    {
        return $this->hasMany(Car_detail::class, 'car_id', 'id');
    }
}
