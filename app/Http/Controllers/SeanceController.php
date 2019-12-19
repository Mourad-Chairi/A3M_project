<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Seance;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seances=DB::table('seances')->groupBy('jour')->OrderBy('heur','asc')->get();
        return view()->with('seances',$seances);
        
        
    }
    ///// return les seance qui concerne une class
    public function getClass($param)
    {
        $seances=DB::table('seances')->where('classe','=',$param)->groupBy('jour')->OrderBy('heur','asc');
        return view()->with('seances',$seances);
        
        
    }

    public function getSalle($param)
    {
        $seances=DB::table('seances')->where('salle','=',$param)->groupBy('jour')->OrderBy('heur','asc');
        return view()->with('seances',$seances);
        
        
    }
      
    public function getProf($param)
    {
        $seances=DB::table('seances')->where('prof','=',$param)->groupBy('jour')->OrderBy('heur','asc');
        return view()->with('seances',$seances);
        
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
