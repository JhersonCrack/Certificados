<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model{
    public $timestamps = false;
    public function course(){
        return $this -> belongsTo(Course::class, 'course_id', 'id');
    }
}