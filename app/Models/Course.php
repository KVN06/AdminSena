<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_number',
        'day',
        'area_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }
}
