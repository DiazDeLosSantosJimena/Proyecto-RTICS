<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\reports;
use App\Models\directions;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $user = users::where('typeofuser_id','1','2')->count();
        $direc = users::where('typeofuser_id','3')->count();
        $report = reports::count();
        $direction = directions::count();
        return view('welcome',compact('user','report','direction','direc'));
    }
}
