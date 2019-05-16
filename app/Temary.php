<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temary extends Model{

    protected $fillable = [
        'name','ponent','course_id'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
