<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'card_img'
    ];

    public function modules(){
        return $this->hasMany(Module::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
