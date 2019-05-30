<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Certificate extends Model
{
    protected $fillable = [
        'file_path',
        'qr',
        'course_id',
        'user_id',
        'type_id'
    ];

    protected $appends =  [
        "curso_name",
        "user_name",
        "user_dni",
        "user_cip",
        "type_name"
    ];

    /**curos**/
    public function getCursoNameAttribute()
    {
        return $this->course()->first(['name'])->name;
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /** user**/
    public function getUserNameAttribute()
    {
        return $this->user()->first(['name'])->name;
    }

    public function getUserDniAttribute()
    {
        return $this->user()->first(['dni'])->dni;
    }

    public function getUserCipAttribute()
    {
        return $this->user()->first(['cip'])->cip;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**Typo**/
    public function getTypeNameAttribute()
    {
        return $this->type()->first(['name'])->name;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}