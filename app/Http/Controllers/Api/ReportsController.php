<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reports;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reports = reports::all();
        $reports = reports::select(('reports.id AS idReport'),'reports.description','status',('directions.teaching    AS named'),('users.name AS user'))
        ->join('directions','reports.direction_id','directions.id')        
        ->join('users','reports.user_id','users.id')->get();

         return Response()->json(['Reportes'=>$reports],200);
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
        reports::create($input);

        return ('El reporte se dio de alta con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reports = reports::select($id)(('reports.id AS idReport'),'reports.description','status',('directions.teaching    AS named'),('users.name AS user'))
        ->join('directions','reports.direction_id','directions.id')        
        ->join('users','reports.user_id','users.id')
        ->get();

        return Response()->json($reports,200);
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
        $report = reports::findOrFail($id);
        $input=$request->all();
        $report->update($input);

        return ('El reporte se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report= reports::findOrFail($id);

        $report->delete();

        return ('El reporte se elimino de manera correcta');
    }
}
