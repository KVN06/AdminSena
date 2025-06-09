<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    protected $fillable = ['name', 'location'];

    public function computers()
    {
        return $this->hasMany(Computer::class);
    }
}