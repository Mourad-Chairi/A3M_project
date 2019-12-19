<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prof;
use App\Matiere;
use DB;

class ProfController extends Controller
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
        $profs=DB::table('profs')->orderBy('Prenom','asc')->get();
        $Nb_profs=DB::table('profs')->get()->count();
        $tab_profs=['profs'=>$profs,'Nb_profs'=>$Nb_profs];
        return view('Admin/list_Prof')->with('tab_profs',$tab_profs);
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
        $prof = new prof;
        $prof->id_user=auth()->user()->id;
        // determiner matiere
        $matiere=DB::table('matieres')->where('Nom_matiere','=',$request->input('matiere'))->get();
        //$matiere=Matiere::where('Nom_matiere','=',$request->input('matiere'))->get();
        $prof->matiere=$matiere[0]->id_matiere;
        $prof->id_prof=$request->input('ID');
        $prof->Nom=$request->input('Nom');
        $prof->Prenom=$request->input('Prenom');
        $prof->save();
        return redirect('/list_Prof');
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
     * Add prof
     */
    public function Add(){
        $matieres=DB::table('matieres')->orderBy('id_matiere','asc')->get();
        return view('Admin/AjoutProf')->with('matieres',$matieres);
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
