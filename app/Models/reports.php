<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reports extends Model
{
    use HasFactory;
    protected $fillable = [
    'description',
    'status',
    'direction_id',
    'user_id'
    ];

    /* Definimos la relacion de direciones con reportes  */
    /*public function directions() {
        return $this->hasMany(directions::class);

    }*/

    public function directions() {
        return $this->belongsTo(directions::class,'direction_id');
    
        }

    public function users() {
        return $this->belongsTo(users::class,'user_id');

    }

}

