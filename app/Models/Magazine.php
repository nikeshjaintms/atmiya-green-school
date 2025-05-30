<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;

    public $table = 'magazines';

    protected $fillable = [
        'name',
        'published_at',
        'magazine_pdf',
    ];
}
