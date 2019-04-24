<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Certificate extends Model
{
    protected $fillable = [
        'file_path', 'qr', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
//Query Scopes
    public function scopeName($query, $name){
        if($name)
            return $query -> where('name', 'LIKE', "%$name%");
    }
    public function scopeDni($query, $dni){
        if($dni)
            return $query -> where('dni', 'LIKE', "%$dni%");
    }
    public function scopeCip($query, $cip){
        if($cip)
            return $query -> where('cip', 'LIKE', "%$cip%");
    }
//    public function scopeSearch(Builder $query, $search){
//        //las relaciones se hacen en base a las funciones
//        $relationsToLoad = ['user'];
//
//        $query->where(function($query) use ($search){
//            $query->where('name', 'LIKE', "%{$search}%");
//            $query->orWhereHas('user', function ($query) use ($search){
//                $query->where(function ($query) use ($search){
//                   $query->where('name', 'LIKE ', "%{$search}%");
//                });
//            });
//        });
//    }
}
