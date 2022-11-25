<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class directions extends Model
{
    use HasFactory;
    protected $fillable = [
    'teaching',
    'career',
    'classroom_id'
    ];


    
    /* Definimos la relacion de reportes con direcciones  */
    /*public function reports() {
        return $this->belongsTo(directions::class);

    }*/

    public function reports() {
        return $this->hasMany(reports::class, 'direction_id', 'id');

    }
    public function users() {
        return $this->hasMany(users::class, 'typeofusers_id', 'id');

    }
     public function classrooms() {
         return $this->belongsTo(classrooms::class,'classroom_id')->withTrashed();

     }

    //  public function classrooms() {
    //     return $this->hasMany(classrooms::class, 'classroom_id, id');

    //  }
    use SoftDeletes; 
}
