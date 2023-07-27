<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle_model extends Model
{
    use HasFactory;
    protected $table = 'motorcycle_models';

    protected $guarded = [
    ];

    public function motorcycle_merek()
    {
        return $this->belongsTo(Motorcycle_brand::class);
    }
}
