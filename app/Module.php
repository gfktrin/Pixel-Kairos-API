<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
