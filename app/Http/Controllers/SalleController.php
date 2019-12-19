<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Salle;
class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $Salles=DB::table('salles')->orderBy('id_salle','asc')->get();
        $Nb_Salles=DB::table('salles')->get()->count();
        /*$Nb_classes=$classes->count(); */
        $tab_Salles=['Salles'=>$Salles,'Nb_Salles'=>$Nb_Salles];
        return view('Admin/list_salle')->with('tab_Salles',$tab_Salles);
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
        $Salle= new Salle;
        $Salle->id_salle=$request->input('id_salle');
        $Salle->Nb_places= $request->input('Nb_places');
        $Salle->save();
        return redirect('/list_salle');
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
