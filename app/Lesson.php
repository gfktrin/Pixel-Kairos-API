<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'id',
        'name',
        'link',
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
