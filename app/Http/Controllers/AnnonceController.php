<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Maneref;
use App\Models\ValueReference;
use App\Models\Country;
use App\Models\City;
use App\Models\Quartier;
use App\Models\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    //
    public function acces()
    {
        return view('Annonce.acceuil');
    }
    public function addHotel()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        return view('Annonce.addHotel',compact('entreprises','comodites',''));
    }
    public function addAuberge()
    {
        return view('Annonce.addAuberge');
    }
    public function addLogement()
    { 
        return view('Annonce.addLogement');
        
    }
    public function storeEntreprise(Request $request)
    {
        $user = new Company;

        $user->name = $request->input('name');

        $user->description = $request->input('description');
        $user->user_id =Auth::user()->id;

        $user->valeurajout = $request->valeurajout;
        $user->nomq = $request->nomq;
        $user->city_id = $request->city_id;
        $user->contactEmail = $request->input('contactEmail');
        $user->instagram = $request->input('instagram');
        $user->phoneWhat = $request->input('phoneWhat');
        $user->phone = $request->input('phone');

        //$user->image_name = $request->input('image_name');
        
        $user->latitude = $request->input('latitude');
        $user->longitude = $request->input('longitude');
        //dd($request);
        $filename =time() . '.' . $request->file('image_name')->extension();
        //dd($filename);
        $path = $request->file('image_name')->storeAs('Logo',$filename,'public');
    
        $user->image_name = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Entreprise bien enrégistrer');
    }

 
}
