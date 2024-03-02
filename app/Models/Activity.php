<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_name',
        'activity_img',
        'category_id',
        'user_id',
        'activity_price',
        'activity_location',
        'activity_age_limit',
        'activity_status',
        'activity_start',
        'activity_end',
        'activity_desc',
        'activity_max',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
