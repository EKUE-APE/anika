<?php

namespace App\Http\Controllers;

use App\Models\FastFood;
use App\Models\Auberge;
use App\Models\Bar;
use App\Models\Logement;
use App\Models\Patisserie;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Boite;

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

    public function addPatisserie()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.addPatisserie',compact('entreprises','comodites'));
    }

    public function storePatisserie(Request $request)
    {
        $user = new Patisserie;

        $user->name = $request->input('name');

        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->type_heberg = $request->type_heberg;
        $user->service = $request->service;
        $user->produit = $request->input('produit');
        $user->ingredient = $request->ingredient;
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        $user->accompagnement = $request->accompagnement;
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('Logopatel',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Patisserie bien enrégistrer');
    }
    public function addBar()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.addBar',compact('entreprises','comodites'));
    } 
    public function storeBar(Request $request)
    {
        $user = new Bar;

        $user->name = $request->name;

        $user->description = $request->description;

        $user->type_musique = $request->type_musique;
        $user->type_bar = $request->type_bar;
        $user->service = $request->service;
        
        $user->capacite = $request->input('capacite');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        $user->type_vie = $request->type_vie;
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoBar',$filename,'public');
    
        $user->image_p = $path;
        dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Bar bien enrégistrer');
    }
     public function addBoite()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.addBoite',compact('entreprises','comodites'));
    }  
    public function storeLocation(Request $request)
    {
        $user = new Location;

        $user->name = $request->name;

        $user->type_vehicule = $request->type_vehicule;

        $user->marque = $request->marque;
        $user->model = $request->model;
        $user->service = $request->service;
        $user->type_carburant = $request->type_carburant;
        $user->service = $request->service;
        
        $user->kilometrage = $request->input('kilometrage');
        $user->nbre_porte = $request->input('nbre_porte');
        $user->condition = $request->input('condition');
        
        $user->nbre_place = $request->input('nbre_place');
        $user->anne = $request->input('anne');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        $user->type_vitesse = $request->type_vitesse;
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoBar',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Location bien enrégistrer');
    }
    public function addFastFood()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.addFastFood',compact('entreprises','comodites'));
    }  
    public function storeFastFood(Request $request)
    {
        $user = new FastFood;

        $user->name = $request->name;

        $user->type_produit_fast = $request->type_produit_fast;

        $user->type_equipement = $request->type_equipement;
        $user->ingredient = $request->ingredient;
        $user->accompagnement = $request->accompagnement;
        $user->service = $request->service;
        $user->description = $request->description;

        $user->produit = $request->input('produit');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoFastFood',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Fast Food bien enrégistrer');
    }
    public function addLocation()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.addLocation',compact('entreprises','comodites'));
    }
    public function storeBoite(Request $request)
    {
        $user = new Boite;

        $user->name = $request->name;

        $user->type_bar = $request->type_bar;

        $user->type_music = $request->type_music;
        $user->equipement_vie = $request->equipement_vie;
        $user->service = $request->service;
        $user->description = $request->description;

        $user->capacite = $request->input('capacite');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        //dd($request);
        $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoBar',$filename,'public');
    
        $user->image_p = $path;
        //dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('acces')->with('success','Boite de Nuit bien enrégistrer');
    }

 
}
