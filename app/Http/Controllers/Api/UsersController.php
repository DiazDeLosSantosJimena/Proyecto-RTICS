<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = users::all();
        $users = users::select(('users.id AS idusers'),'users.name','email','password','signature',('directions.teaching    AS named'),'directions.career',('typeofusers.name AS typeuser'))
        ->join('directions','users.direction_id','directions.id')        
        ->join('typeofusers','users.typeofuser_id','typeofusers.id')->get();
        return Response()->json(['Usuario'=>$users],200);
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

        return ('El usuario se dio de alta con exito');
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

        return Response()->json($user,200);
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
        $user = users::findOrFail($id);
        $input=$request->all();
        $user->update($input);

        return ('El usuario se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= users::findOrFail($id);

        $user->delete();

        return ('El usuario se elimino de manera correcta');
    }
}
