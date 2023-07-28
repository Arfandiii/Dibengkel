<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle_detail extends Model
{
    use HasFactory;
    protected $table = 'motorcycle_details';

    protected $guarded = [
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function motorcycle_brand()
    {
        return $this->belongsTo(Motorcycle_brand::class);
    }
}
