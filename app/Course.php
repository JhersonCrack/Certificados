<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model{

    protected $fillable = [
        'name', 'hours', 'amount', 'date'
    ];

    public function certificates(){
        return $this->hasMany(Certificate::class);
    }
    public function temaries(){
        return $this->hasMany(Temary::class);
    }
}
