<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model{

    public function certificate(){
        return $this->hasOne(Certificate::class);
    }
}
