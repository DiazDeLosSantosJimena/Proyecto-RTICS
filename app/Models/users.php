<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'signature',
        'direction_id',
        'typeofuser_id'
    
    ];
/* Definimos la relacion de typo de usuarios a usuarios  */
    /*public function typeofusers() {
        return $this->hasOne(typeofusers::class);

    }*/     
    public function directions() {
        return $this->belongsTo(directions::class,'direction_id')->withTrashed();

    }

    public function typeofusers() {
        return $this->belongsTo(typeofusers::class,'typeofuser_id')->withTrashed();

    }


    public function reports() {
        return $this->hasMany(reports::class);

    }
    use SoftDeletes; 

}
