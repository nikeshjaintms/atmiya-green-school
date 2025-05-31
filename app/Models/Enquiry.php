<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    public $table = 'enquiry';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'response_message',
    ];
}
