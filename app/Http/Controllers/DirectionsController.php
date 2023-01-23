<?php

namespace App\Http\Controllers;
use App\Models\directions;
use App\Models\classrooms;
use Illuminate\Http\Request;

class DirectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directions = directions::all();;
        return view('Directions.index', compact('directions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = classrooms::all('id','name');
        return view('Directions.add', compact('classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'teaching'=> 'required',
            'career'=> 'required',
            'classroom_id'=> 'required'

        ];

        $message = [
            'teaching.required' => 'La docencia es requerida',
            'career.required' => 'La carrera es requerida',
            'classroom_id.required' => 'El aula es requerida',

        ];

        $this->validate($request, $rules, $message);
        $input=$request->all();
        directions::create($input);
        return redirect('directions')->with('message','Se ha creado correctamente la dirección');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direction = directions::findOrFail($id);
        return view('Directions.show')->with('directions',$direction);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classrooms = classrooms::all('id','name');
        $direction = directions::findOrFail($id);
        return view('Directions.edit', compact('classrooms'))->with('directions', $direction);
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
        $direction= directions::findOrFail($id);
        $rules =[
            'teaching'=> 'required',
            'career'=> 'required',
            'classroom_id'=> 'required'

        ];

        $message = [
            'teaching.required' => 'La docencia es requerida',
            'career.required' => 'La carrera es requerida',
            'classroom_id.required' => 'El aula es requerida',

        ];

        $this->validate($request, $rules, $message);
        $input=$request->all();
        $direction->update($input);
        return redirect('directions')->with('info','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $direction = directions::findOrFail($id);
         $direction->delete();
         return back()->with('danger','correctamente la dirección');

    }
}