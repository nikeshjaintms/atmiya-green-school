<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityCategory extends Model
{
    use HasFactory;

    public  $table = 'activity_categories';

    protected $fillable = [
        'activity_category_name',
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class, 'activity_category_id');
    }
}
