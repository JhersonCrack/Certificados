<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function certificates(){
        return $this->hasMany(Certificate::class);
    }
}
