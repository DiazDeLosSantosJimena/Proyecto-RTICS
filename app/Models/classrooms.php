<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class classrooms extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',    
    ];

     public function directions() {
          return $this->hasOneThrough(directions::class,reports::class, 'classroom_id, id','direction_id, id');
    
        }
    

    //  public function directions() {
    //      return $this->belongsTo(directions::class,'classroom_id');

    //  }
    use SoftDeletes; 
}

