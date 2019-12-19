<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Etudiant;
use App\Classe;
use App\User;

class EtudiantsController extends Controller
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
        $etudiants=DB::table('etudiants')->orderBy('Prenom','asc')->get();
        $Nb_etudiants=DB::table('etudiants')->get()->count();
        /*  $Nb_etudiant=$etudiant->count();*/
        $tab_etudiants=['etudiants'=>$etudiants,'Nb_etudiants'=>$Nb_etudiants];
        return view('Admin/list_Etudiant')->with('tab_etudiants',$tab_etudiants);

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
        $etudiant = new Etudiant;
        $etudiant->id_user=auth()->user()->id;
        $etudiant->CNE=$request->input('CNE');
        $etudiant->Nom=$request->input('Nom');
        $etudiant->Prenom=$request->input('Prenom');
        $etudiant->class=$request->input('classe');
        $etudiant->save();
        return redirect('/list_Etudiant');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant=DB::table('etudiants')->where('CNE','=',$id);
        return view()->with('etudiant',$etudiant);
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
     * Add etudiant
     */
    public function Add(){
        $classes=DB::table('classes')->select('id_classe')->orderBy('id_classe','asc')->get();
        return view('Admin/AjoutEtudiant')->with('classes',$classes);
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
