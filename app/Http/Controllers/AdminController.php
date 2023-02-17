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
use App\Models\Image;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
    //
    public function index()
    {
         
        return view('welcome');
    
    }
    public function dashboard()
    {
        return view('admin.acceuil');
    }

    public function vitrine()
    {
        return view('affichage');
    }
       public function allLocalisation()
    {
        $localisations =DB::table('users')
            ->join('quartiers', 'quartiers.user_id', '=', 'users.id')
            ->join('cities', 'cities.id', '=', 'quartiers.city_id')
            ->join('countries','countries.id', '=', 'cities.county_id' )
                ->select ('quartiers.*',
                    'cities.nom as ville',
                                        'users.name as name',

                    'countries.name as pays')
                ->get();
               // dd($localisations);
                $userCount = $localisations->count();
        return view('admin.listeLocalisation',compact('localisations','userCount'));
    }
    public function addentre()
    {
        $refs = DB::table('value_references')
            ->where ('idname', '=', 4)
            ->distinct()
            ->get();
            $pays = DB::table('countries')
            ->distinct()
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
        $user->country_id = $request->country_id;

        $user->siteweb = $request->input('contactEmail');
        $user->instagram = $request->input('instagram');
        $user->phoneWhat = $request->input('phoneWhat');
        $user->phone = $request->input('phone');

        //$user->image_name = $request->input('image_name');
        
        $user->latitude = $request->input('latitude');
        $user->longitude = $request->input('longitude');
        //dd($request);

        $user->monday_start = $request->input('monday_start');
        $user->monday_end = $request->input('monday_end');
        $user->tuesday_start = $request->input('tuesday_start');
        $user->tuesday_end = $request->input('tuesday_end');
        $user->wednesday_start = $request->input('wednesday_start');
        $user->wednesday_end = $request->input('wednesday_end');
        $user->thursday_start = $request->input('thursday_start');
        $user->thursday_end = $request->input('thursday_end');
        $user->friday_start = $request->input('friday_start');
        $user->friday_end = $request->input('friday_end');
        $user->saturday_start = $request->input('saturday_start');
        $user->saturday_end = $request->input('saturday_end');
        $user->sunday_start = $request->input('sunday_start');
        $user->sunday_end = $request->input('sunday_end');
        
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
                'type'=>'Entreprise'
            ]); 
        }
        
           if($files = $request->file('image_name'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->city_id.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('Company'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'Entreprise'
                ]);
               
            }
            
        }

        return redirect()->route('acces')->with('success',' Enregistrement effectué');
    }

     public function updateEntreprise($id)
    {
        $structure=Company::find($id);
        $pays=Country::all();
        $refs=ValueReference::where('idname',10)->get();
                  //dd($structure1->services);
        return view('admin.editEntreprise',compact('structure','refs','pays'));
    }

     public function editEntreprise(Request $request,$id)
    {
        $name = $request->input('name');

        $description = $request->input('description');
        $user_id =Auth::user()->id;
        $nomq = $request->nomq;
        $city_id = $request->city_id;
        $country_id = $request->country_id;
        $siteweb = $request->input('contactEmail');
        $instagram = $request->input('instagram');
        $phoneWhat = $request->input('phoneWhat');
        $phone = $request->input('phone');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $monday_start = $request->input('monday_start');
        $monday_end = $request->input('monday_end');
        $tuesday_start = $request->input('tuesday_start');
        $tuesday_end = $request->input('tuesday_end');
        $wednesday_start = $request->input('wednesday_start');
        $wednesday_end = $request->input('wednesday_end');
        $thursday_start = $request->input('thursday_start');
        $thursday_end = $request->input('thursday_end');
        $friday_start = $request->input('friday_start');
        $friday_end = $request->input('friday_end');
        $saturday_start = $request->input('saturday_start');
        $saturday_end = $request->input('saturday_end');
        $sunday_start = $request->input('sunday_start');
        $sunday_end = $request->input('sunday_end');

        DB::update('update companies set name = ?,description = ?,user_id = ?,
        nomq = ?,city_id = ? ,country_id = ?,siteweb = ?,instagram = ?,phoneWhat = ?,phone = ?,latitude = ?,
        longitude = ?,monday_start = ?,monday_end = ?,tuesday_start = ?,tuesday_end = ?,wednesday_start = ?,wednesday_end = ?,thursday_start = ?,
        thursday_end = ?,friday_start = ?,friday_end = ?,saturday_start = ?,saturday_end = ?,
        sunday_start = ?,sunday_end = ?
        where id = ?', 
        [   $name ,  $description ,  $user_id , $nomq , $city_id , 
        $country_id , $siteweb ,$instagram , $phoneWhat ,$phone , 
        $latitude , $longitude , $monday_start ,  $monday_end ,  $tuesday_start , $tuesday_end , 
        $wednesday_start ,  $wednesday_end ,  $thursday_start ,  $thursday_end , $friday_start , 
        $friday_end , $saturday_start , $saturday_end , $sunday_start , $sunday_end ,$id]);

       /*  $valeurajouts = $request->input('valeurajout');
        //dd($valeurajouts);
        foreach($valeurajouts as $valeurajout) 
        {
            //dd(intval($valeurajout));
             Service::update([
                'type_ref_id' => intval($valeurajout),
                'boite_id' =>$user_id
            ]); 
        }
        
           if($files = $request->file('image_name'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $city_id.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('Company'),$path);
                Image::update([
                            'product_id'=>$user_id,
                            'image'=>$path,
                            'type'=>'Entreprise'
                ]);
               
            }
            
        } */

    
            return redirect('allEntreprise')->with('success','Enrégistrement Effectué');
    }
    public function adduser()
    {
        return view('admin.test');
    }

    public function comptes()
    {
        /*$users =DB::table('companies')
            ->join('users', 'users.id', '=', 'companies.user_id')
            ->join('roles','roles.id', '=', 'users.roles' )
                ->select ('users.*',
                    'companies.name as compagnie',
                    'roles.nom as nom')
                ->get();
                $users = DB::table('users')
            ->leftJoin('companies', 'users.id', '=', 'companies.user_id')
            ->select('users.*', DB::raw('CASE WHEN companies.id IS NULL THEN "No" ELSE "Yes" END as company_created'))
            ->get();*/
                
                $users = DB::table('roles')
                ->join('users','users.roles', '=', 'roles.id' )
                ->leftJoin('companies', 'users.id', '=', 'companies.user_id')
                ->select('users.*', 'companies.name as compagnie',
                    'roles.nom as nom', DB::raw('COALESCE(companies.name, "Non") as company_created'))

            ->get();
        //dd($users);
        $userCount = $users->count();
        return view('admin.liste',compact('users','userCount'));
    }

    public function allcomptes()
    {
        $users = DB::select('select *,roles.nom as nom,compagnies.name as compagnie from users join compagnies on user.id = compagnies.user_id join roles on user.roles = roles.id');
        //dd($users);
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
        $profil = $request->profil;
        $password = Hash::make($request->input('password'));

        DB::update('update users set name = ?,email = ?,phone = ?,roles = ?,password = ? where id = ?', [$name,$email,$phone,$profil,$password,$id]);
    
            return redirect('comptes')->with('success','Enrégistrement Effectué');
    }

    public function addReference()
    {
        $users = DB::select('select * from manerefs');

        return view('admin.addReference',compact('users'));
    }

    public function store(Request $request)
    {
          $request->validate([
        'email' => 'required|email|unique:users,email',
        ], [
        'email.unique' => 'L\'email est déjà pris.'
        ]);
        
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

        return redirect()->route('comptes')->with('success',' Enregistrement effectué');
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
    {  
        $entreprises = DB::table('companies')
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

        return redirect()->route('addNameRefe')->with('success',' Enregistrement effectué');
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
        return redirect()->route('addReference')->with('success',' Enregistrement effectué');
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


        return view('admin.editReférence',compact('structure'));
    }
    


    public function addPays()
    {
        return view('admin.addPays');
    }
    public function storeCouuntry(Request $request)
    {
        //die($reference);
        $field=$request->input('name');
        if ($field) {
            return back()->withInput()->withErrors(['field' => 'Le pays existe déjà : ' . $field]);
        }
        $reference = new Country();
        $reference->name = $request->input('name');
        $reference->country_code = $request->input('country_code');
        $reference->save();
        return redirect()->route('addPays')->with('success',' Enregistrement effectué');
    }

    public function addVille()
    {
        
        $pays = DB::select('select distinct name ,id  from countries');
        
            

        return view('admin.addVille',compact('pays'));
    }
    public function storeVille(Request $request)
    {
        //die($reference);
        $reference = new City();
        $reference->nom = $request->input('nom');
        $reference->county_id = $request->county_id;
        $reference->save();
        return redirect()->route('addVille')->with('success',' Enregistrement effectué');
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
        $reference->user_id = Auth::user()->id;
        $reference->save();
        return redirect()->route('addQuartier')->with('success',' Enregistrement effectué');
    }
    public function updateQ($id)
    {
        $structure=DB::select('select * from quartiers where id = ?', [$id]);
        $pays = DB::select('select * from countries');


        return view('admin.editLocalisation',compact('structure','pays'));
    }
    public function editLocalisa(Request $request , $id)
    {
        $country_id = $request->country_id;
        $city_id = $request->city_id;
        $nomq = $request->input('nomq');
        $user_id = Auth::user()->id;
        DB::update('update quartiers set country_id = ?,city_id = ?,nomq = ?,user_id = ? where id = ?', [$country_id,$city_id,$nomq,$user_id,$id]);
    
            return redirect('allLocalisation')->with('success','Enrégistrement Effectué');
    }
    
      public function editrefer(Request $request , $id)
    {
        
        $idtype = $request->county_id;
        $idname = $request->city_id;
        $valeurajout = $request->input('nomq');
        $user_id = Auth::user()->id;
        

        DB::update('update value_references set idtype = ?,idname = ?,valeurajout = ?, user_id = ? where id = ?', 
        [$idtype,$idname,$valeurajout,$user_id,$id]);
    
            return redirect('allReference')->with('success','Enrégistrement Effectué');
    }

    public function comptesProfil()
    {
                $users = DB::table('roles')
                ->join('users','users.roles', '=', 'roles.id' )
                ->leftJoin('companies', 'users.id', '=', 'companies.user_id')
                ->where('users.id','=',Auth::user()->id)
                ->select('users.*', 'companies.name as compagnie',
                    'roles.nom as nom', DB::raw('COALESCE(companies.name, "Non") as company_created'))
                ->get();
        //dd($users);
        $userCount = $users->count();
        return view('admin.allCompteProfil',compact('users','userCount'));
    }


}
