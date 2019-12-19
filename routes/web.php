<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin',function(){
    return view('Admin/admin');})->middleware('admin');

Route::get('/list_Etudiant','EtudiantsController@index');
Route::post('/list_Etudiant','EtudiantsController@store');

Route::post('/list_Classe','ClasseController@store');
Route::get('/list_Classe','ClasseController@index');

Route::get('/list_matiere','MatieresController@index');
Route::post('/list_matiere','MatieresController@store');

Route::get('/list_Prof','ProfController@index');
Route::post('/list_Prof','ProfController@store');

Route::get('/list_salle','SalleController@index');
Route::post('/list_salle','SalleController@store');

Route::get('/AjoutEtudiant','EtudiantsController@Add');

Route::get('/AjoutProf','ProfController@Add');

Route::get('/AjoutClasse',function(){ 
    return view('Admin/AjoutClasse'); })->middleware('admin');

Route::get('/AjoutMatiere',function(){
     return view('Admin/AjoutMatiere'); })->middleware('admin');

Route::get('/AjoutSalle',function(){ 
    return view('Admin/AjoutSalle'); })->middleware('admin');


