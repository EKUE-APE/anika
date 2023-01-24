<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function addcompany(Request $request,$id)
    {
        $filename =time() . '.' . $request->file('avatar')->extension();
    
        $path = $request->file('avatar')->storeAs('Logo',$filename,'public');
    
        $Nom_Struc = $request->input('Nom_Struc');
        $Ville = $request->input('Ville');
        $Quartier = $request->input('Quartier');
        $Email = $request->input('Email');
        $latitude = $request->input('latitude');
        $Activites=$request->input('Activites');
        $Mission_prim=$request->input('Mission_prim');
        $Site_web=$request->input('Site_web');
        $longitude = $request->input('longitude');
        $Numero = $request->input('Numero');
    
        $Nombre_pers=$request->input('Nombre_pers');
    
        $Zone_ZDE =$request->input('Zone_ZDE') ;
        //$image =$request->input('Zone_ZDE') ;
        $image = $path;
        DB::update('update giz_csv_zips set Nom_Struc = ?,Ville = ?,Quartier = ?,Email = ?,latitude = ?,longitude = ?,Numero = ?,
        Zone_ZDE = ?,image = ? where Ident = ?', [ $Nom_Struc,$Ville,$Quartier,$Email,$latitude,$Activites,
        $Mission_prim,$Site_web,$Nombre_pers,$longitude,$Numero,$Zone_ZDE,$image,$id]);
    
            return redirect('alluser')->with('succes','STRUCTURE BIEN ENREGISTREE');
    }}
