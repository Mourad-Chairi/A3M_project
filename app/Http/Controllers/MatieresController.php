<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Matiere;


class MatieresController extends Controller
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
        $Matieres=DB::table('Matieres')->orderBy('id_matiere','asc')->get();
        $Nb_Matieres=DB::table('matieres')->get()->count();
        /*$Nb_classes=$classes->count(); */
        $tab_Matieres=['Matieres'=>$Matieres,'Nb_Matieres'=>$Nb_Matieres];
        return view('Admin/list_matiere')->with('tab_Matieres',$tab_Matieres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Matiere= new matiere;
        $Matiere->id_matiere= random_int(1,1000);
        $Matiere->Nom_matiere= $request->input('Nom_matiere');
         $Matiere->save();
        return redirect('/list_matiere');
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
