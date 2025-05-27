<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';
    protected $primaryKey = 'id';
    protected $fillable = ['department_id', 'name', 'profile', 'designation', 'description'];
    
    use HasFactory;
}
