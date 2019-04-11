<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model{
    public $timestamps = false;
    public function certificates(){
        return $this -> hasMany(Certificate::class, 'course_id', 'id');
    }
}
