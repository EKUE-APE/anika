
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Hôtel</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Tableau de Bord</a></li>
                <li class="active">Hôtel</li>
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
                        <h4>Crée son Hôtel</h4>
                    </div>
                    
                    <div class="card-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-6 col-sm-4">Entreprise:</label>
                            <div class="col-md-10 col-sm-9">
                                <select class="form-control" id="country_id" name="country_id">
                                    <optgroup label="Choisir La commodité">
                                       {{--  @foreach($pays as $pa)
                                            <option value="{{$pa->id}}">{{$pa->name}}</option>
                                        @endforeach --}}
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 col-sm-3">Type d'herbergement:</label>
                            <div class="col-md-10 col-sm-9">
                                <select class="form-control" id="country_id" name="country_id">
                                    <optgroup label="Choisir La commodité">
                                     {{--    @foreach($pays as $pa)
                                            <option value="{{$pa->id}}">{{$pa->name}}</option>
                                        @endforeach --}}
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nombre de Chambre:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="number" class="form-control" placeholder="NumRod" name="name">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Superficie:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="number" class="form-control" name="phone" placeholder="+229 03294828">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix Min:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="number" class="form-control" name="phoneWhat" placeholder="Listing Hub Search Engine Friendly Directory">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix Maximum :</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="number" class="form-control" name="instagram" placeholder="Listing, Directory, Business..">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nombre de Personnes:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="number" class="form-control" name="email" placeholder="Listing Hub Search Engine Friendly Directory">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Services:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" id="country_id" name="country_id">
                                        <optgroup label="Choisir La commodité">
                                            {{-- @foreach($pays as $pa)
                                                <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endforeach --}}
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nombre de Salle de Bain:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="contactEmail" placeholder="support@listinghub.com">
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control textarea height-100" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Equipement salle de bain:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" id="country_id" name="country_id">
                                        <optgroup label="Choisir La commodité">
                                           {{--  @foreach($pays as $pa)
                                                <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endforeach --}}
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Equipement Cuisine:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" id="city_id" name="city_id">
                                        <optgroup label="Choisir La ville">
                                            
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Galerie d'Image :</label>
                                <div class="col-md-10 col-sm-9">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_name" />
                                    </label>
                                </div>
                            </div>                            
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