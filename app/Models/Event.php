<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = 'events';
    public $fillable = [
        'title',
        'event_date',
        'description',
        'event_images',
    ];
}
