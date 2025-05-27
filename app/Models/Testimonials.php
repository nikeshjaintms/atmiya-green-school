<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = 'testimonials';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'message',
        'profile_image',
        'role',
        'status'
    ];

    use HasFactory;
}
