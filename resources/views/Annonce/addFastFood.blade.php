
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Fast Food</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Tableau de Bord</a></li>
                <li class="active">Fast Food</li>
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
                        <h4>Crée son Fast Food</h4>
                    </div>
                    
                    <div class="card-body">
                        @if (Session::has('message'))

                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;>

                            </button>
                       {{ $message }}
                        </div>

                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('storePatisserie') }}">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-2 col-sm-2">Entreprise:</label>
                            <div class="col-md-4 col-sm-3">
                                <select class="form-control" id="name" name="name">
                                    <optgroup label="Choisir Le nom de l'entreprise">
                                        @foreach($entreprises as $companie)
                                            <option value="{{$companie->id}}">{{$companie->name}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <label class="col-md-2 col-sm-2">Produits Fast Food:</label>
                            <div class="col-md-4 col-sm-3">
                                <select class="form-control" id="type_heberg" name="type_heberg">
                                    <optgroup label="Choisir LE TYPE">
                                       {{--  @foreach($pays as $pa)
                                            <option value="{{$pa->id}}">{{$pa->name}}</option>
                                        @endforeach --}}
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                           
                            
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Prix Min:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="number" class="form-control" name="price_min" placeholder="345678">        
                                </div>
                                <label class="col-md-2 col-sm-2">Prix Maximum :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="number" class="form-control" name="prixmax" placeholder="10000000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Equipement Fast Food:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" id="city_id" name="city_id">
                                        <optgroup label="Choisir La cuisine">
                                            
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-2 col-sm-2">Nom du Produit:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="TEXT" class="form-control" placeholder="5" name="produit">
                                </div>
                                <label class="col-md-2 col-sm-2">Ingredients:</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" id="ingredient" name="ingredient">
                                        <optgroup label="Choisir Le Service">
                                            {{-- @foreach($pays as $pa)
                                                <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endforeach --}}
                                        </optgroup>
                                    </select>                                
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Accompagnement:</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" id="accompagnement" name="accompagnement">
                                        <optgroup label="Choisir Le Service">
                                            {{-- @foreach($pays as $pa)
                                                <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endforeach --}}
                                        </optgroup>
                                    </select>                            
                                </div>

                                <label class="col-md-2 col-sm-2">Comodités:</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" id="service" name="service">
                                        <optgroup label="Choisir Le Service">
                                            {{-- @foreach($pays as $pa)
                                                <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endforeach --}}
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                                                   
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control textarea height-100" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                          
                         
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Galerie d'Image :</label>
                                <div class="col-md-4 col-sm-3">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_p" />
                                    </label>
                                </div>
                                <label class="col-md-2 col-sm-2">Galerie d'Image :</label>
                                <div class="col-md-4 col-sm-3">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_s" />
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

@if (Session::has('message'))
<script type="text/javascript">
    
        swal("Hôtel Enrégistrée avec Succes","{!! Session::get('') !!}","succes",{
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