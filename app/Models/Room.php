<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'room_img',
        'room_rate',
        'room_location',
        'room_status',
        'room_start',
        'room_end',
        'room_max',
        'user_id',
        // Add more attributes as needed
    ];

    public function area() 
    {
        return $this->belongsTo(Area::class, 'room_location');
    }
}
