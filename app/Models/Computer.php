<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'brand',
        'number',
        'training_center_id',
    ];

    public function trainingCenter()
    {
        return $this->belongsTo(TrainingCenter::class);
    }
}