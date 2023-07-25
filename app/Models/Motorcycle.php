<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;
    
    protected $table = 'motorcycles';

    protected $guarded = [
        'id'
    ];

    public function motorcycle_detail()
    {
        return $this->hasMany(Motorcycle_detail::class);
    }
}
