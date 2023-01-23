<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\reports;
use App\Models\directions;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $user = users::where('typeofuser_id','4')->count();
        $direc = users::where('typeofuser_id','1')->count();
        $report = reports::count();
        $direction = directions::count();
        return view('welcome',compact('user','report','direction','direc'));
    }
}
