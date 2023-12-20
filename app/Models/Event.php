<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'event_desc',
        'event_date',
        'event_time',
        'event_location',
        'event_bannerpath',
    ];

    public function participant()
    {
        return $this->hasMany(Participant::class);
    }
}
