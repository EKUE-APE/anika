
@extends('layout.app')
<style>
    #previewContainer {
        width: 200px;
    height: 200px;
    border: 1px solid black;
    overflow: hidden;
    float: left;
    margin-right: 100px;
    }
    #previewContainer img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  
</style>
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Gestion des Annonces</a></li>
                <li class="active">Bar</li>
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
                        <h4>Crée son Bar</h4>
                    </div>
                    
                    <div class="card-body">
                        @if (Session::has('message'))

                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;>

                            </button>
                       {{ $message }}
                        </div>

                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('storeBar') }}">
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
                            <label class="col-md-2 col-sm-2">Type de Bar:</label>
                            <div class="col-md-4 col-sm-3">
                                    <select class="selectpicker form-control col-md-12 col-sm-3" id="type_bar" name="type_bar[]" multiple aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir Les equipements">
                                            @foreach($comodites as $pa)
                                            <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                            @endforeach 
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
                                <label class="col-md-2 col-sm-3">Type de Musique:</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="type_musique" name="type_musique[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>     
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-2 col-sm-2">Capacité d'Acceuil:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="number" class="form-control" placeholder="5" name="capacite">
                                </div>
                            
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Equipement Vie Nocturne:</label>
                                <div class="col-md-4 col-sm-3">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="type_vie" name="type_vie[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>                        
                                </div>

                                <label class="col-md-2 col-sm-2">Comodités:</label>
                                <div class="col-md-4 col-sm-3">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="service" name="service[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
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
                                        <input type="file" name="image_p[]" id="fileInput" multiple />
                                    </label>
                                </div>
                                
                          
                            </div> 
                                                          <div id="previewContainerContainer"></div>

                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <button type="submit" onclick="validate()" class="btn theme-btn">Enrégistrer</button>
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

<script>
    console.log('viens');
    document.querySelector('#fileInput').addEventListener('change', function(e) {
      const files = e.target.files;
      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file.type.startsWith('image/')) {
          const reader = new FileReader();
          reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.width = 200;
            const previewContainer = document.createElement('div');
            previewContainer.id = 'previewContainer';
            const removeImageButton = document.createElement('div');
            removeImageButton.id = 'removeImageButton';
            removeImageButton.innerText = 'Remove';
            removeImageButton.addEventListener('click', function() {
              previewContainer.remove();
            });
            previewContainer.appendChild(removeImageButton);
            previewContainer.appendChild(img);
            document.querySelector('#previewContainerContainer').appendChild(previewContainer);
          }
          reader.readAsDataURL(file);
        }
      }
    });
</script>
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