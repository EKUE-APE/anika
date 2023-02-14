
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Entreprise</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Site Settings</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>              
     <!-- /. ROW  -->
    <div id="page-inner">
        
        <div class="row bott-wid">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                
                    <div class="card-header">
                        <h4>Crée son entreprise</h4>
                    </div>
                    
                    <div class="card-body">
                            @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" method="POST" action="">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="Listing Hub Search Engine Friendly Directory">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Numéro de Téléphone:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="https://www.listing-hub.com/">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">o Whatsapp:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="Listing Hub Search Engine Friendly Directory">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Instagram:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="Listing, Directory, Business..">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">email:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="Listing Hub Search Engine Friendly Directory">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Contact email:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="support@listinghub.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Pays:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="valeurajout">
                                        <optgroup label="Choisir La commodité">
                                            @foreach($pays as $pay)
                                                <option value="{{$pay->id}}">{{$pay->valeurajout}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Ville:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="valeurajout">
                                        <optgroup label="Choisir La commodité">
                                            @foreach($pays as $pay)
                                                <option value="{{$pay->id}}">{{$pay->valeurajout}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3"> Quartier:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="valeurajout">
                                        <optgroup label="Choisir La commodité">
                                            @foreach($pays as $pay)
                                                <option value="{{$pay->id}}">{{$pay->valeurajout}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                          
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control textarea height-100" placeholder="Description"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">comodité:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="valeurajout">
                                        <optgroup label="Choisir La commodité">
                                            @foreach($pays as $pay)
                                                <option value="{{$pay->id}}">{{$pay->valeurajout}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">heure d'ouverture et de fermeture:</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control height-100"></textarea>
                                </div>
                            </div>
                            
                          
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Image :</label>
                                <div class="col-md-10 col-sm-9">
                                    <label class="btn-bs-file btn">
                                        Browse
                                        <input type="file" />
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3"> Latitude:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input class="form-control" id="latitude"   type="text" readonly name="latitude" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3"> Longitude:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input class="form-control" id="longitude"   type= "text" readonly name="longitude" >
                                </div>
                            </div>
                            
                          

                            <div id="map" class="form-group"></div>
                            
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <button type="submit" class="btn theme-btn">Save</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script type="text/javascript">
 getMyLocation();

function getMyLocation() {
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition((position) => {
            var  myposition = {
                latitude : position.coords.latitude,
                longitude : position.coords.longitude
            }
            document.getElementById("latitude").value = myposition.latitude;
            document.getElementById("longitude").value = myposition.longitude;
        })
    }else{
        return false
    }
}
</script>
<script>
    let mymap,marqueur;//variable pour la carte et le marqueur
    window.onload = () =>
    {
        mymap = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minzoom: 1,
        maxZoom: 9,
    attribution: 'Carte  '
    }).addTo(mymap);
     
    mymap.on("click", mapClickListen)
    document.querySelector("#ville").addEventListener("blur",getCity)

    }
    function mapClickListen(e)
    {
        //on recupere les coordonées du clic
        console.log(e)
        let pos = e.latlng
        //on ajoute le marqueur
        addMarker(pos)
        //on affiche les coordonéés dans le formulaire
        document.querySelector("#latitude").value = pos.lat
        document.querySelector("#longitude").value = pos.lng

    }

    function addMarker(pos)
    {
        //verifier si un marqueur existe
        if(marqueur != undefined)
            {
                mymap.removeLayer(marqueur)
            }
        marqueur = L.marker(pos,
        {
            //on rend le marqueur  deplacable
            draggable: true
        })


            // on ecoute le glisser /deposer sur le marqueur
            marqueur.on("dragend", function(e)
            {
            pos = e.target.getLatLng()

            document.querySelector("#latitude").value = pos.lat
            document.querySelector("#longitude").value = pos.lng
            })
        marqueur.addTo(mymap)
    }
    function getCity()
    {

        let adresse = document.querySelector("#adresse").
        value + "," + document.querySelector("#cp").
        value + " " + document.querySelector("ville").value
        console.log(adresse)

    // on initialise une requete ajax
    const xmlhttp = new XMLHttpRequest
//on ouvre la requete
xmlhttp.open("get","")
    }
    
</script>
@endsection