<?php
// BCS3453 [PROJECT]-SEMESTER 2324/1
// Student ID: CB21016
// Student Name: MUHAMMAD AFIQ AMMAR BIN MURAD

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

    public function participants() {
        return $this->hasMany(Participant::class);
    }
}
