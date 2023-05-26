<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    protected $table = 'bikes';

    protected $fillable = ['merek', 'model', 'tahun', 'nomor_seri', 'catatan_lainnya'];
}
