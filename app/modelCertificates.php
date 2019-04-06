<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelCertificates extends Model{
    protected $primaryKey = 'id_certificates ';
    protected $table = 't_certificates';//este es el nombre de mi tabla que quiero que me llames
    protected $appends = ["names"];
    public function enlace(){
        return $this -> belongsTo(modelCourses::class);
    }
    public function getNamesAttribute(){
        return $this -> enlace() -> first('id_course') -> id_course;
    }
}
