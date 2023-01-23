<?php

namespace App\Http\Controllers;

use App\Models\classrooms;
use App\Models\reports;
use App\Models\directions;
use App\Models\users;
use Illuminate\Http\Request;


class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = reports::all();
        return view('Reports.index', compact('reports'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = users::all('id','name','typeofuser_id');
        $directions = directions::all('id','teaching','career','classroom_id');
        // $classrooms = classrooms::all('id','name');
        return view('Reports.add', compact('users'), compact('directions'));
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
            'description'=> 'required',
        
            'direction_id' =>'required',
            'user_id' => 'required'
        ];

        $message = [
            'description.required' => 'La descripción es requerida',
            'direction_id.required' => 'La dirección es requerida',
            'user_id.required' => 'El usuario es requerido',
        ];

        $this->validate($request, $rules, $message);

        // $input=$request->all();
        reports::create(array(
            'description' =>$request->input('description'),
            'status' =>'Activo',
            'direction_id'=>$request->input('direction_id'),
            'user_id'=>$request->input('user_id'),
        ));
        return redirect('reports')->with('message','Se ha creado correctamente el reporte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = reports::findOrFail($id);
        return view('Reports.show')->with('reports',$report);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = users::all('id','name','typeofuser_id');
        $directions = directions::all('id','teaching','classroom_id');
        $report = reports::findOrFail($id);
        return view('Reports.edit', compact('users'), compact('directions'))->with('reports', $report);
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
        $report= reports::findOrFail($id);
        $rules =[
            'description'=> 'required',
             'status' =>'required',
            'direction_id' =>'required',
            'user_id' => 'required'
        ];

        $message = [
            'description.required' => 'La descripción es requerida',
             'status.required' => 'El status es requerido',
            'direction_id.required' => 'La dirección es requerida',
            'user_id.required' => 'El usuario es requerido',
        ];

        $this->validate($request, $rules, $message);

        $input=$request->all();
        $report->update($input);
        return redirect('reports')->with('info','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = reports::findOrFail($id);
        $report->delete();
        return back()->with('danger','correctamente el reporte');
    }
}

