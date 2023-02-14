
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Tableau</h4>
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