<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_detail extends Model
{
    use HasFactory;
    protected $table = 'car_detail';

    protected $guarded = [
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car_model()
    {
        return $this->belongsTo(Car_model::class);
    }
}
