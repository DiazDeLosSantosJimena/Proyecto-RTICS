<?php

namespace App\Http\Controllers;
use App\Models\classrooms;
use App\Models\directions;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = classrooms::all();
        return view('Classrooms.index', compact('classrooms'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directions = directions::all('id','name');
        return view('Classrooms.add', compact('directions'));
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
        classrooms::create($input);
        return redirect('classrooms')->with('message','Se ha creado correctamente la aula');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom = classrooms::findOrFail($id);
        return view('Classrooms.show')->with('classrooms',$classroom);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directions = directions::all('id','name');
        $classroom = classrooms::findOrFail($id);
        return view('Classrooms.edit', compact('directions'))->with('classrooms', $classroom);
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
        $classroom = classrooms::findOrFail($id);
        $input=$request->all();
        $classroom->update($input);
        return redirect('classrooms')->with('info','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classroom = classrooms::findOrFail($id);
        $classroom->delete();
        return redirect('classrooms')->with('danger','correctamente la dirección');
    }
}
