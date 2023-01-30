<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Maneref;
use App\Models\ValueReference;
use App\Models\Country;
use App\Models\City;
use App\Models\Quartier;
use App\Models\Company;
use App\Models\Service;

use Faker\Provider\Image;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.acceuil');
    }

    public function vitrine()
    {
        return view('affichage');
    }
    public function addentre()
    {
        $refs = DB::table('value_references')
            ->where ('idname', '=', 4)
            ->get();
            $pays = DB::table('countries')
            ->get();
           //dd($pays);
        return view('admin.addentrepriseSecon',compact('pays','refs'));
    }
    public function storeEntreprise(Request $request)
    {
        $user = new Company;

        $user->name = $request->input('name');

        $user->description = $request->input('description');
        $user->user_id =Auth::user()->id;

        $user->nomq = $request->nomq;
        $user->city_id = $request->city_id;
        $user->siteweb = $request->input('contactEmail');
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
        $valeurajouts = $request->input('valeurajout');
        //dd($valeurajouts);
        foreach($valeurajouts as $valeurajout) 
        {
            //dd(intval($valeurajout));
             Service::create([
                'type_ref_id' => intval($valeurajout),
                'boite_id' =>$user->id,
            ]); 
        }

        return redirect()->route('acces')->with('success','Entreprise bien enrégistrer');
    }


    public function adduser()
    {
        return view('admin.test');
    }

    public function comptes()
    {
        $users =DB::table('companies')
            ->join('users', 'users.id', '=', 'companies.user_id')
            ->join('roles','roles.id', '=', 'users.roles' )
                ->select ('users.*',
                    'companies.name as compagnie',
                    'roles.nom as nom')
                ->get();
        //dd($users);
        $userCount = $users->count();

        return view('admin.liste',compact('users','userCount'));
    }

    public function allcomptes()
    {
        $users = DB::select('select *,roles.nom as nom,compagnies.name as compagnie from users join compagnies on user.id = compagnies.user_id join roles on user.roles = roles.id');
dd($users);
        return view('admin.alluser',compact('users'));
    }

    public function destroy($id) 
    {
       DB::delete('delete FROM users where id = ?', [$id]);

        return redirect('comptes')->with('succes','compte BIEN SUPPRIMER');
    }
    public function update($id)
    {
        $structure=DB::select('select * from users where id = ?', [$id]);


        return view('admin.editRegister',compact('structure'));
    }
    public function updatestruct(Request $request,$id)
    {
      
    
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $profil = $request->input('profil');
        $password = Hash::make($request->input('password'));

        DB::update('update users set name = ?,email = ?,phone = ?,roles = ?,password = ? where id = ?', [$name,$email,$phone,$profil,$password,$id]);
    
            return redirect('comptes')->with('succes','Compte bien modifié');
    }

    public function addReference()
    {
        $users = DB::select('select * from manerefs');

        return view('admin.addReference',compact('users'));
    }

    public function store(Request $request)
    {
        
        $user = new User;

        $user->name = $request->input('name');

        $user->email = $request->input('email');
        $user->password = Hash::make($request['password']);

        $user->roles = $request->profil;
        $user->is_active = 1;
        $user->phone = $request->phone;
//dd($user);
        $user->save();
        //dd('salut');

        return redirect()->route('comptes')->with('success','Utilisateur bien enrégistrer');
    }

    public function quartier($id)
    {
        $produits=DB::table('cities')
            ->where ('county_id', '=', $id)
            ->get();
        return $produits;
    }
    
    public function advilleQuartier($id)
    {
        echo"salut";
        $produits=DB::table('cities')
            ->where ('county_id', '=', $id)
            ->get();
        return $produits;
       /*  $produit=DB::table('quartiers')
            ->where ('city_id', '=', $id)
            ->get(); */
            //echo"salut";
    }
    public function quartie($id)
    {
        $produits=DB::table('quartiers')
            ->where ('city_id', '=', $id)
            ->get();
        return $produits;
    }
    
    public function addRestaurant()

    {  $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('admin.addplat',compact('entreprises','comodites'));
    }

    public function addentree()

    {
        return view('admin.addentre');
    }
    public function addplat()

    {
        return view('admin.addplat');
    }
    public function adddessert()

    {
        return view('admin.adddessert');
    }

    public function addNameRefe()
    {
        return view ('admin.addNameRefe');
    }

    public function storeName(Request $request)
    {
        $user = new Maneref;

        $user->nameref = $request->input('nameref');


        $user->idtype = $request->idtype;

        $user->save();
        //dd('salut');

        return redirect()->route('addNameRefe')->with('success','Utilisateur bien enrégistrer');
    }

    public function produit($id)
    {
        $produit=DB::table('manerefs')
            ->where ('idtype', '=', $id)
            ->get();
        return $produit;
    }

    public function storeReference(Request $request)
    {
        //die($reference);
        $reference = new ValueReference();
        $reference->idname = $request->name;
        $reference->valeurajout = $request->input('valeur');
        /*$reference->valeurA = $request->input('valeurA'); 
        $reference->valeurB = $request->input('valeurB');
        $reference->valeurC = $request->input('valeurC');
        $reference->valeurD = $request->input('valeurD'); */
        $reference->idtype =$request->typereference;
        $reference->user_id =Auth::user()->id;
        
        $reference->save();
        return redirect()->route('addReference')->with('succes','Référence BIEN SUPPRIMER');
    }
    public function allReference()
    {
        $produits=DB::table('type')
        ->join('manerefs', 'type.id', '=', 'manerefs.idtype')
        ->join('value_references', 'manerefs.id', '=', 'value_references.idname')
        ->join('users','value_references.user_id','=','users.id')

            ->select ('value_references.*',
                'value_references.id as id',
                'type.name as type',
                    'users.name as createur',
                'manerefs.nameref as nom')
            ->get();
            $userCount = $produits->count();

           
        return view('admin.alluser',compact('produits','userCount'));
    }


    public function deleterefer($id)
    {
       DB::delete('delete FROM value_references where id = ?', [$id]);

        return redirect('allReference')->with('succes','reference BIEN SUPPRIMER');
    }
    public function updaterefer($id)
    {
        $structure=DB::select('select * from value_references where id = ?', [$id]);


        return view('admin.addReference',compact('structure'));
    }

    public function addPays()
    {
        return view('admin.addPays');
    }
    public function storeCouuntry(Request $request)
    {
        //die($reference);
        $reference = new Country();
        $reference->name = $request->input('name');
        $reference->country_code = $request->input('country_code');
        $reference->save();
        return redirect()->route('addPays')->with('succes','Pays BIEN SUPPRIMER');
    }

    public function addVille()
    {
        
        $pays = DB::select('select * from countries');

        return view('admin.addVille',compact('pays'));
    }
    public function storeVille(Request $request)
    {
        //die($reference);
        $reference = new City();
        $reference->nom = $request->input('nom');
        $reference->county_id = $request->county_id;
        $reference->save();
        return redirect()->route('addVille')->with('succes','Pays BIEN SUPPRIMER');
    }
    public function ville($id)
    {
        $ville=DB::table('cities')
            ->where ('county_id', '=', $id)
            ->get();
        return $ville;
    }
    public function addQuartier()
    {
        
        $pays = DB::select('select * from countries');
        return view('admin.addQuartier',compact('pays'));
    }
    public function storeQuartier(Request $request)
    {
        //die($reference);
        $reference = new Quartier();
        $reference->nomq = $request->input('nomq');
        $reference->country_id = $request->country_id;
        
        $reference->city_id = $request->city_id;
        $reference->save();
        return redirect()->route('addQuartier')->with('succes','Pays BIEN SUPPRIMER');
    }






}
