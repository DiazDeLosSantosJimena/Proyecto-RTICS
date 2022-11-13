<?php

namespace App\Http\Controllers;
use App\Models\typeofusers;
use Illuminate\Http\Request;

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
        return view('Typeofusers.index', compact('typeofusers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Typeofusers.add');
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
        return redirect('typeofusers')->with('message','Se ha creado correctamente el tipo de usuario');
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
        return view('Typeofusers.show')->with('typeofusers',$typeofuser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeofuser = typeofusers::find($id);
        return view('Typeofusers.edit')->with('typeofusers', $typeofuser);
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
        $typeofuser= typeofusers::find($id);
        $input=$request->all();
        $typeofuser->update($input);
        return redirect('typeofusers')->with('info','Se ha actualizado el registro correctamente');
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

