<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\typeofusers;
use App\Models\directions;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = users ::all();
        return view('Users.index', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeofusers = typeofusers::all('id','name');
        $directions = directions::all('id','name');
        return view('Users.add', compact('typeofusers'), compact('directions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        users::create($input);
        return redirect('users')->with('message','Se ha creado correctamente el usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = users::find($id);
        return view('Users.show')->with('users',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeofusers = typeofusers::all('id','name');
        $directions = directions::all('id','name');
        $user = users::find($id);
        return view('Users.edit', compact('typeofusers'), compact('directions'))->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= users::find($id);
        $input=$request->all();
        $user->update($input);
        return redirect('users')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

