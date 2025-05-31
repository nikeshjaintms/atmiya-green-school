<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = 'events';
    protected $casts = [
        'event_date' => 'datetime',
    ];
    protected $fillable = [
        'title',
        'event_date',
        'description',
        'event_images',
    ];
}
