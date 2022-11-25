<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\typeofusers;

class TypeofusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeofusers = typeofusers::all();

         return Response()->json(['Tipo de usuario'=>$typeofusers],200);
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
        typeofusers::create($input);

        return ('El tipo de usuario se dio de alta con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeofuser = typeofusers::find($id);

        return Response()->json($typeofuser,200);
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
        $typeofuser = typeofusers::findOrFail($id);
        $input=$request->all();
        $typeofuser->update($input);

        return ('El tipo de usuario se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeofuser= typeofusers::findOrFail($id);

        $typeofuser->delete();

        return ('El tipo de usuario se elimino de manera correcta');
    }
}
