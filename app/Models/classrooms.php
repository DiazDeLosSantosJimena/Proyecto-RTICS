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
    'direction_id'
    ];

    

    public function directions() {
        return $this->belongsTo(directions::class,'direction_id');

    }
}

