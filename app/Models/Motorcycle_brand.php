<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle_brand extends Model
{
    use HasFactory;
    
    protected $table = 'motorcycle_brands';

    protected $guarded = [
    ];

    public function motorcycle_model()
    {
        return $this->hasMany(motorcycle_model::class, 'motorcycle_brand_id', 'id');
    }
}
