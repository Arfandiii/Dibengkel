<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle_detail extends Model
{
    use HasFactory;
    protected $table = 'motorcycle_detail';

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }
}
