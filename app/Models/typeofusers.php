<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeofusers extends Model
{
    use HasFactory;
    protected $fillable = [
    'name'
    ];
    /* Definimos la relacion inversa de usuairos  de type usuarios a   */
    /*public function users() {
        return $this->belongsTo(users::class);

    }*/
    public function users() {
        return $this->hasMany(users::class, 'typeofuser_id', 'id');

    }

}
