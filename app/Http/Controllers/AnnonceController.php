<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Auberge;
use App\Models\ValueReference;
use App\Models\Logement;
use App\Models\City;
use App\Models\Hotel;
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
        return view('Annonce.addHotell',compact('entreprises','comodites'));
    }
    public function addAuberge()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.addAuberge',compact('entreprises','comodites'));
    }
    public function storeAuberge(Request $request)
    {
        $user = new Auberge;

        $user->name = $request->input('name');

        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->type_heberg = $request->type_heberg;
        $user->service = $request->service;
        $user->nbreChambre = $request->input('nbreChambre');
        $user->superficie = $request->input('superficie');
        $user->nbreChambre = $request->input('nbreChambre');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        $user->nbrePersonne = $request->input('nbrePersonne');
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoHotel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Auberge bien enrégistrer');
    }
    public function addLogement()
    { 
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.addLogement',compact('entreprises','comodites'));
        
    }

    public function storeLogement(Request $request)
    {
        $user = new Logement;

        $user->name = $request->input('name');

        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->type_heberg = $request->type_heberg;
        $user->service = $request->service;
        $user->nbreChambre = $request->input('nbreChambre');
        $user->superficie = $request->input('superficie');
        $user->nbreChambre = $request->input('nbreChambre');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        $user->nbrePersonne = $request->input('nbrePersonne');
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoHotel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Hotel bien enrégistrer');
    }

    public function storeHotel(Request $request)
    {
        $user = new Hotel;

        $user->name = $request->input('name');

        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->type_heberg = $request->type_heberg;
        $user->service = $request->service;
        $user->nbreChambre = $request->input('nbreChambre');
        $user->superficie = $request->input('superficie');
        $user->nbreChambre = $request->input('nbreChambre');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        $user->nbrePersonne = $request->input('nbrePersonne');
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoHotel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Hotel bien enrégistrer');
    }

    public function storeRestaurant(Request $request)
    {
        $user = new Restaurant;

        $user->owner_id = $request->input('name');

        $user->description = $request->input('description');

        $user->service = $request->service;
        $user->category_id = $request->category_id;
       
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoRestel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Hotel bien enrégistrer');
    }
    public function storeDessert(Request $request)
    {
        $user = new Restaurant;

        $user->owner_id = $request->input('name');

        $user->description = $request->input('description');

        $user->service = $request->service;
        $user->category_id = $request->category_id;
       
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoRestel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Hotel bien enrégistrer');
    }
    public function storeEntre(Request $request)
    {
        $user = new Restaurant;

        $user->owner_id = $request->input('name');

        $user->description = $request->input('description');

        $user->service = $request->service;
        $user->category_id = $request->category_id;
       
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoRestel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Hotel bien enrégistrer');
    }
    public function storeplat(Request $request)
    {
        $user = new Restaurant;

        $user->owner_id = $request->input('name');

        $user->description = $request->input('description');

        $user->service = $request->service;
        $user->category_id = $request->category_id;
       
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoRestel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Hotel bien enrégistrer');
    }
    

 
}
