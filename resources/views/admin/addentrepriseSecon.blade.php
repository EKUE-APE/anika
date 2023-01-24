
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Entreprise</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Tableau de Bord</a></li>
                <li class="active">Entreprise</li>
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
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;>

                            </button>
                       {{ $message }}
                        </div>

                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('storeEntreprise') }}">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="NumRod" name="name">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Numéro de Téléphone:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="phone" placeholder="+229 03294828">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Numéro Whatsapp:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="phoneWhat" placeholder="Listing Hub Search Engine Friendly Directory">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Instagram:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="instagram" placeholder="Listing, Directory, Business..">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Email:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="email" placeholder="Listing Hub Search Engine Friendly Directory">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Contact Email:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="contactEmail" placeholder="support@listinghub.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Pays:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" id="country_id" name="country_id">
                                        <optgroup label="Choisir La commodité">
                                            @foreach($pays as $pa)
                                                <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Ville:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" id="city_id" name="city_id">
                                        <optgroup label="Choisir La ville">
                                            
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3"> Quartier:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" id="nomq" name="nomq">
                                        <optgroup label="Choisir Le quartier">
                                            
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control textarea height-100" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Comodité:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="valeurajout">
                                        <optgroup label="Choisir La commodité">
                                            @foreach($refs as $pay)
                                                <option value="{{$pay->id}}">{{$pay->valeurajout}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Heure d'Ouverture et de Fermeture:</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control height-100"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Image :</label>
                                <div class="col-md-10 col-sm-9">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_name" required />
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
                                    <button type="submit" class="btn theme-btn">Enrégistrer</button>
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
@if (Session::has(''))
<script type="text/javascript">
    
        swal("Entreprise Enrégistrée avec Succes","{!! Session::get('') !!}","succes",{
            button:"OK",
        })
    
</script>
@endif

<script type="text/javascript">
    console.log("azyui");
    $('#country_id').on('change',function ( ) {
        //console.log("uty");
        console.log($('#country_id').val());
        $.ajax({
            url: '/recupererquartier-' + $('#country_id').val(),
            type: "get",
            success: function (data) {
                $('#city_id').empty();
                $('#city_id').append('<option value=""></option>')
    
                for (var i = 0; i < data.length; i++) {
    
                    $('#city_id').append('<option value="'+data[i].id+'">'+data[i].nom+'</option>')
                }
    
            }, 
            error: function (data) {
                console.log("erreur")
            },
        })
    })


    $('#city_id').on('change',function ( ) {
        //
        console.log("uty");
        console.log($('#city_id').val());
        $.ajax({
            url: '/recupererquartie-' + $('#city_id').val(),
            type: "get",
            success: function (data) {
                $('#nomq').empty();
                $('#nomq').append('<option value=""></option>')
    
                for (var i = 0; i < data.length; i++) {
    
                    $('#nomq').append('<option value="'+data[i].id+'">'+data[i].nomq+'</option>')
                }
    
            }, 
            error: function (data) {
                console.log("erreur")
            },
        })
    })
        </script>
@endsection