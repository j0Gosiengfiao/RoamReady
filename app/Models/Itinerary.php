<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;
    protected $fillable = [
        'itinerary_name',
        'user_id',
        'itinerary_price',
        'itinerary_location',
        //'lunch_location',
        'itinerary_start',
        'itinerary_end',
        'itinerary_pax',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'itinerary_location');
    }
}
