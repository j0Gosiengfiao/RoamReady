<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_Itinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'itinerary_id',
        'activity_id',
        'order',
        'day',
        'fare'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    public function itinerary()
    {
        return $this->belongsTo(Activity::class, 'itinerary_id');
    }
}
