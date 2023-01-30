<?php

namespace App\Http\Controllers;

use App\Models\FastFood;
use App\Models\Auberge;
use App\Models\Bar;
use App\Models\Logement;
use App\Models\Patisserie;
use App\Models\Hotel;
use App\Models\Restaurant;

use App\Models\Service;
use App\Models\EquipementVie;
use App\Models\TypeBar;
use App\Models\TypeMusic;
use App\Models\ProduitFastFood;
use App\Models\EquipementFastFood;
use App\Models\Ingredient;
use App\Models\Accompagnement;
use App\Models\TypeHebergement;
use App\Models\EquipementCuisine;
use App\Models\EquipementSalleBain;
use App\Models\ProduitPatisserie;
use App\Models\EquipementPatisserie;
use App\Models\Plat;
use App\Models\Entree;
use App\Models\Dessert;
use App\Models\TypeVitesse;
use App\Models\TypeCarburant;
use App\Models\Modele;
use App\Models\Marque;
use App\Models\TypeVehicule;
use App\Models\Specialite;
use App\Models\EquipementRestaurant;


use App\Models\Location;
use App\Models\Boite;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class AnnonceController extends Controller
{
    //
    public function acces()
    {
       
        return view('Annonce.acceuill');
    }
    public function allEntreprise()
    { 
        $entreprises = DB::table('companies')
        ->join('users', 'users.id', '=', 'companies.user_id')
       // ->join('roles','roles.id', '=', 'users.roles' )
            ->select ('companies.*',
                'users.name as nom')
            ->get();
            $userCount = $entreprises->count();

        return view('admin.allEntreprise',compact('entreprises','userCount'));
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
        return view('Annonce.addHotel',compact('entreprises','comodites'));
    }
    public function addAuberge()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',8)
        ->get();
        return view('Annonce.testAuberge',compact('entreprises','comodites'));
    }
    public function storeAuberge(Request $request)
    {
        $user = new Auberge;
        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->nbreChambre = $request->input('nbreChambre');
        $user->superficie = $request->input('superficie');
        $user->nbreChambre = $request->input('nbreChambre');
        $user->price_min = $request->input('price_min');
        $user->prixmax = $request->input('prixmax');
        $user->nbrePersonne = $request->input('nbrePersonne');
        $user->save();

        $services = $request->input('service');
        //dd($services);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }
        
        $type_hebergs = $request->input('type_heberg');
        //dd($type_hebergs);
        foreach($type_hebergs as $type_heberg) 
        {
            //dd(intval($type_heberg));
             TypeHebergement::create([
                'type_ref_id' => intval($type_heberg),
                'boite_id' =>$user->id,
            ]); 
        }

        $equipement_salle_bains = $request->input('equipement_salle_bain');
        //dd($equipement_salle_bains);
        foreach($equipement_salle_bains as $equipement_salle_bain) 
        {
            //dd(intval($equipement_salle_bain));
             EquipementSalleBain::create([
                'type_ref_id' => intval($equipement_salle_bain),
                'boite_id' =>$user->id,
            ]); 
        }
        $equipement_cuisines = $request->input('equipement_cuisine');
        //dd($equipement_cuisines);
        foreach($equipement_cuisines as $equipement_cuisine) 
        {
            //dd(intval($equipement_cuisine));
             EquipementCuisine::create([
                'type_ref_id' => intval($equipement_cuisine),
                'boite_id' =>$user->id,
            ]); 
        }

        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'Location'
                ]);
               
            }
            
        }
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
        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->nbreChambre = $request->input('nbreChambre');
        $user->superficie = $request->input('superficie');
        $user->nbreChambre = $request->input('nbreChambre');
        $user->price_min = $request->input('price_min');
        $user->prixmax = $request->input('prixmax');
        $user->nbrePersonne = $request->input('nbrePersonne');

        $user->save();


        $services = $request->input('service');
        //dd($services);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }
        
        $type_hebergs = $request->input('type_heberg');
        //dd($type_hebergs);
        foreach($type_hebergs as $type_heberg) 
        {
            //dd(intval($type_heberg));
             TypeHebergement::create([
                'type_ref_id' => intval($type_heberg),
                'boite_id' =>$user->id,
            ]); 
        }
        $equipement_salle_bains = $request->input('equipement_salle_bain');
        //dd($equipement_salle_bains);
        foreach($equipement_salle_bains as $equipement_salle_bain) 
        {
            //dd(intval($equipement_salle_bain));
             EquipementSalleBain::create([
                'type_ref_id' => intval($equipement_salle_bain),
                'boite_id' =>$user->id,
            ]); 
        }
        $equipement_cuisines = $request->input('equipement_cuisine');
        //dd($equipement_cuisines);
        foreach($equipement_cuisines as $equipement_cuisine) 
        {
            //dd(intval($equipement_cuisine));
             EquipementCuisine::create([
                'type_ref_id' => intval($equipement_cuisine),
                'boite_id' =>$user->id,
            ]); 
        }
        
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'Logement'
                ]);
               
            }
            
        }
        //dd($user);
        //dd('salut');

        return redirect()->route('acces')->with('success','Logement bien enrégistrer');
    }

    public function storeHotel(Request $request)
    {
        $user = new Hotel;


        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->nbreChambre = $request->input('nbreChambre');
        $user->superficie = $request->input('superficie');
        $user->nbreChambre = $request->input('nbreChambre');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        $user->nbrePersonne = $request->input('nbrePersonne');
      
        $user->save();
        $services = $request->input('service');
        //dd($request);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }
        $type_hebergs = $request->input('type_heberg');
        //dd($type_hebergs);
        foreach($type_hebergs as $type_heberg) 
        {
            //dd(intval($type_heberg));
             TypeHebergement::create([
                'type_ref_id' => intval($type_heberg),
                'boite_id' =>$user->id,
            ]); 
        }
        $equipement_cuisines = $request->input('equipement_cuisine');
       // dd($equipement_cuisines);
        foreach($equipement_cuisines as $equipement_cuisine) 
        {
            //dd(intval($equipement_cuisine));
                EquipementCuisine::create([
                'type_ref_id' => intval($equipement_cuisine),
                'boite_id' =>$user->id,
            ]); 
        }
        $equipement_salle_bains = $request->input('equipement_salle_bain');
        //dd($equipement_salle_bains);
        foreach($equipement_salle_bains as $equipement_salle_bain) 
        {
            //dd(intval($equipement_salle_bain));
            EquipementSalleBain::create([
                'type_ref_id' => intval($equipement_salle_bain),
                'boite_id' =>$user->id,
            ]); 
        }
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'hotel'
                ]);
               
            }
            
        }
        //dd('salut');

        return redirect()->route('acces')->with('success','Hotel bien enrégistrer');
    }

    public function storeRestaurant(Request $request)
    {
        $user = new Restaurant;

        $user->owner_id = $request->name;

        $user->description = $request->input('description');       
        //dd($request);
        $user->save();
        $services = $request->input('specialite');
        foreach($services as $service) 
        {
            //dd(intval($service));
             Specialite::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }  
        
        $Equipement_restaurants = $request->input('Equipement_restaurant');
        foreach($Equipement_restaurants as $Equipement_restaurant) 
        {
            //dd(intval($service));
            EquipementRestaurant::create([
                'type_ref_id' => intval($Equipement_restaurant),
                'boite_id' =>$user->id,
            ]); 
        }


                //entre
                $entre = new Entree;
                $entre->name = $request->input('namee');
                $entre->price_min = $request->input('price_min');

                $entre->prixmax = $request->input('prixmax');
                $entre->save();
                $ingredients = $request->input('ingrediente');
                foreach($ingredients as $ingrediente) 
                {
                    //dd(intval($service));
                    Ingredient::create([
                        'type_ref_id' => intval($ingrediente),
                        'boite_id' =>$user->id,
                        'type'=>'entree',
                    ]); 
                }
        
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'Entre'
                ]);
            }
            
        }

            //plat
            $plat = new Plat;
            $plat->name = $request->input('namep');
            $plat->price_min = $request->input('price_minp');

            $plat->prixmax = $request->input('prixmaxp');
            $plat->save();
            $ingredients = $request->input('ingredientp');
            foreach($ingredients as $ingredientp) 
            {
                //dd(intval($service));
                Ingredient::create([
                    'type_ref_id' => intval($ingredientp),
                    'boite_id' =>$user->id,
                    'type'=>'entree',
                ]); 
            }
            $accompagnements = $request->input('accompagnement');
            foreach($accompagnements as $accompagnement) 
            {
                //dd(intval($service));
                Accompagnement::create([
                    'type_ref_id' => intval($accompagnement),
                    'boite_id' =>$user->id,
                    'type'=>'plat',
                ]); 
            }

        if($files = $request->file('image_pp'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'Plat'
                ]);
            }
            
        }


           //dessert
           $dessert = new Dessert();
           $dessert->name = $request->input('named');
           $dessert->price_min = $request->input('price_mind');

           $dessert->prixmax = $request->input('prixmaxd');
           $dessert->save();
           $ingredients = $request->input('ingredientd');
           foreach($ingredients as $ingrediente) 
           {
               //dd(intval($service));
               Ingredient::create([
                   'type_ref_id' => intval($ingrediente),
                   'boite_id' =>$user->id,
                   'type'=>'dessert',
               ]); 
           }





        if($files = $request->file('image_d'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'Dessert'
                ]);
            }
            
        }

        return redirect()->route('acces')->with('success','Restaurant bien enrégistrer');
    }
    public function storeDessert(Request $request)
    {
        $user = new Dessert;

        $user->owner_id = $request->input('name');

        $user->description = $request->input('description');

        $user->service = $request->service;
        $user->category_id = $request->category_id;
         $user->save();
        //dd($request);
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path
                ]);
               
            }
            
        }
        //dd($user);
      
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
        $user->save();
        //dd($request);
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'plat'
                ]);
               
            }
            
        }
        //dd($user);
       
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


        $user->description = $request->input('description');

        $user->name = $request->name;
        $user->produit = $request->input('produit');
        $user->price_min = $request->input('price_min');        
        $user->prixmax = $request->input('prixmax');
        //dd($request);
        $user->save();
        $services = $request->input('service');
        //dd($services);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }

        $accompagnements = $request->input('accompagnement');
        //dd($accompagnements);
        foreach($accompagnements as $accompagnement) 
        {
            //dd(intval($accompagnement));
             Accompagnement::create([
                'type_ref_id' => intval($accompagnement),
                'boite_id' =>$user->id,
                'type'=>1
            ]); 
        }
        
        
        $ingredients = $request->input('ingredient');
        //dd($ingredients);
        foreach($ingredients as $ingredient) 
        {
            //dd(intval($ingredient));
             Ingredient::create([
                'type_ref_id' => intval($ingredient),
                'boite_id' =>$user->id,
                'type'=>1
            ]); 
        }
        $equipement_patisseries = $request->input('equipement_patisserie');
        //dd($equipement_patisseries);
        foreach($equipement_patisseries as $equipement_patisserie) 
        {
            //dd(intval($equipement_patisserie));
             EquipementPatisserie::create([
                'type_ref_id' => intval($equipement_patisserie),
                'boite_id' =>$user->id,
                'type'=>1
            ]); 
        }
        $produit_patisserie = $request->input('produit_patisserie');
        //dd($produit_patisserie);
        foreach($produit_patisserie as $produit_patisserie) 
        {
            //dd(intval($produit_patisserie));
             ProduitPatisserie::create([
                'type_ref_id' => intval($produit_patisserie),
                'boite_id' =>$user->id,
                'type'=>1
            ]); 
        }
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path
                ]);
               
            }
            
        }
        //dd($user);
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

        $user->description = $request->input('description');

        
        $user->capacite = $request->input('capacite');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        //dd($request);
        $user->save();
        $services = $request->input('service');
        //dd($services);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
                'type'=>'bar'
            ]); 
        }
        $type_vies = $request->input('type_vie');
        //dd($type_vies);
        foreach($type_vies as $type_vie) 
        {
            //dd(intval($type_vie));
             EquipementVie::create([
                'type_ref_id' => intval($type_vie),
                'boite_id' =>$user->id,
            ]); 
        } 
         $type_musiques = $request->input('type_musique');
        //dd($type_musiques);
        foreach($type_musiques as $type_musique) 
        {
            //dd(intval($type_musique));
             TypeMusic::create([
                'type_ref_id' => intval($type_musique),
                'boite_id' =>$user->id,
            ]); 
        } 
         $type_bars = $request->input('type_bar');
        //dd($type_bars);
        foreach($type_bars as $type_bar) 
        {
            //dd(intval($type_bar));
             TypeBar::create([
                'type_ref_id' => intval($type_bar),
                'boite_id' =>$user->id,
            ]); 
        }
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'bar'
                ]);
               
            }
            
        }
        //dd($user);
        //dd('salut');

        return redirect()->route('acces')->with('success','Bar bien enrégistrer');
    }
     public function addBoite()
    {
        $entreprises = DB::table('companies')
        ->where('user_id','=',Auth::user()->id)
        ->get();
        $equip_vie_noct = DB::table('value_references')
        ->where('idname','=',9)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',9)
        ->get();
        $comodites = DB::table('value_references')
        ->where('idname','=',9)
        ->get();
        return view('Annonce.addBoitee',compact('entreprises','equip_vie_noct','comodites'));
    }  
    public function storeLocation(Request $request)
    {
        $user = new Location;

        $user->name = $request->name;
        $user->kilometrage = $request->input('kilometrage');
        $user->nbre_porte = $request->input('nbre_porte');
        $user->condition = $request->input('condition');
        
        $user->nbre_place = $request->input('nbre_place');
        $user->anne = $request->input('anne');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
        //dd($request);
        $user->save();

        $services = $request->input('service');
        //dd($services);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }

        $type_vehicules = $request->input('type_vehicule');
        //dd($type_vehicules);
        foreach($type_vehicules as $type_vehicule) 
        {
            //dd(intval($type_vehicule));
             TypeVehicule::create([
                'type_ref_id' => intval($type_vehicule),
                'boite_id' =>$user->id,
            ]); 
        }

        $marques = $request->input('marque');
        //dd($marques);
        foreach($marques as $marque) 
        {
            //dd(intval($marque));
             Marque::create([
                'type_ref_id' => intval($marque),
                'boite_id' =>$user->id,
            ]); 
        }
        $models = $request->input('model');
        //dd($models);
        foreach($models as $model) 
        {
            //dd(intval($model));
            Modele::create([
                'type_ref_id' => intval($model),
                'boite_id' =>$user->id,
            ]); 
        }
        $type_carburants = $request->input('type_carburant');
        //dd($type_carburants);
        foreach($type_carburants as $type_carburant) 
        {
            //dd(intval($type_carburant));
             TypeCarburant::create([
                'type_ref_id' => intval($type_carburant),
                'boite_id' =>$user->id,
            ]); 
        }
        $type_vitesses = $request->input('type_vitesse');
        //dd($type_vitesses);
        foreach($type_vitesses as $type_vitesse) 
        {
            //dd(intval($type_vitesse));
             TypeVitesse::create([
                'type_ref_id' => intval($type_vitesse),
                'boite_id' =>$user->id,
            ]); 
        }
      
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path,
                            'type'=>'location'
                ]);
               
            }
            
        }

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
        $user->description = $request->input('description');

        $user->produit = $request->input('produit');
        $user->price_min = $request->input('price_min');

        //$user->image_name = $request->input('image_name');
        
        $user->prixmax = $request->input('prixmax');
         $user->save();
        $services = $request->input('service');
        //dd($services);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }

        $type_produit_fasts = $request->input('type_produit_fast');
        //dd($services);
        foreach($type_produit_fasts as $type_produit_fast) 
        {
            //dd(intval($service));
             ProduitFastFood::create([
                'type_ref_id' => intval($type_produit_fast),
                'boite_id' =>$user->id,
            ]); 
        }

        $type_equipements = $request->input('type_equipement');
        //dd($type_equipements);
        foreach($type_equipements as $type_equipement) 
        {
            //dd(intval($type_equipement));
             EquipementFastFood::create([
                'type_ref_id' => intval($type_equipement),
                'boite_id' =>$user->id,
            ]); 
        }
        $ingredients = $request->input('ingredient');
        //dd($ingredients);
        foreach($ingredients as $ingredient) 
        {
            //dd(intval($ingredient));
             Ingredient::create([
                'type_ref_id' => intval($ingredient),
                'boite_id' =>$user->id,
            ]); 
        }
        $accompagnements = $request->input('accompagnement');
        //dd($accompagnement);
        foreach($accompagnements as $accompagnement) 
        {
            //dd(intval($accompagnement));
             Accompagnement::create([
                'type_ref_id' => intval($accompagnement),
                'boite_id' =>$user->id,
            ]); 
        }
        //dd($request);
        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path
                ]);
               
            }
            
        }
        //dd($user);
       
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
        $user = new Boite();

        $user->name = $request->name;

        //$user->service = $request->service;
                        //dd($user);
        $user->description = $request->input('description');

        $user->capacite = $request->input('capacite');
        $user->price_min = $request->input('price_min');

      
        //dd($user);
        $user->prixmax = $request->input('prixmax');
        $user->save();
                //dd($user);

        $services = $request->input('service');
        //dd($services);
        foreach($services as $service) 
        {
            //dd(intval($service));
             Service::create([
                'type_ref_id' => intval($service),
                'boite_id' =>$user->id,
            ]); 
        }

        
        $equipement_vies = $request->equipement_vie;

       foreach($equipement_vies as $equipement_vie) 
        {
            //dd(intval($service));
             EquipementVie::create([
                'type_ref_id' => intval($equipement_vie),
                'boite_id' =>$user->id,
            ]); 
        } 
        $type_bars = $request->type_bar;
        //dd($type_bars);

        foreach($type_bars as $type_bar) 
        {
            //dd(intval($service));
             TypeBar::create([
                'type_ref_id' => intval($type_bar),
                'boite_id' =>$user->id,
            ]); 
        } 
        $type_musics = $request->type_music;

        foreach($type_musics as $type_music) 
        {
            //dd(intval($service));
             TypeMusic::create([
                'type_ref_id' => intval($type_music),
                'boite_id' =>$user->id,
            ]); 
        } 

        if($files = $request->file('image_p'))
        {
            //dd($files);

            foreach ($files as $image)
            {
                $path = $user->capacite.'-image-'.time().rand(1,1000000).'.'.$image->extension();
                $image->move(public_path('product_images'),$path);
                Image::create([
                            'product_id'=>$user->id,
                            'image'=>$path
                ]);
               
            }
            
        }
          /*   foreach($files as $file)
            {
                $image_name = md5(rand(100000,1000000)).
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'public/storage/Image';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path,$image_full_name);
                $image[] = $image_url;
            } */
       

        //dd($request);
      /*   $filename =time() . '.' . $request->file('image_p')->extension();
        //dd($filename);
        $path = $request->file('image_p')->storeAs('LogoBoite',$filename,'public');
    
        $user->image_p = $path;
        //dd($user); */
        
        //dd('salut');

        return redirect()->route('acces')->with('success','Boite de Nuit bien enrégistrer');
    }

    public function allAnnonce()
    {
        $annonces =DB::table('companies')
            ->join('users', 'users.id', '=', 'companies.user_id')
            ->join('roles','roles.id', '=', 'users.roles' )
            ->select ('users.*',
                'companies.name as compagnie',
                'roles.nom as nom')
            ->get();
        return view('Annonce.allAnnonces',compact('annonces'));
    }
 
}
