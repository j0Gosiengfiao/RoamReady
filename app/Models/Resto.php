<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    use HasFactory;

    protected $fillable = [
        'resto_name',
        'resto_img',
        'resto_rate',
        'resto_location',
        'resto_status',
        'resto_start',
        'resto_end',
        'user_id',
        // Add more attributes as needed
    ];

    public function area() 
    {
        return $this->belongsTo(Area::class, 'resto_location');
    }
}
