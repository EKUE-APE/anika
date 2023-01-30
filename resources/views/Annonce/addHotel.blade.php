
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
                        @if (Session::has('message'))

                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;>

                            </button>
                       {{ $message }}
                        </div>

                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('storeHotel') }}">
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
                            <label class="col-md-2 col-sm-2">Type d'herbergement:</label>
                            <div class="col-md-4 col-sm-3">
                                    <select class="selectpicker form-control col-md-12 col-sm-3" id="type_heberg" name="type_heberg[]" multiple aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir Les equipements">
                                            @foreach($comodites as $pa)
                                            <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                            @endforeach 
                                        </optgroup>
                                    </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Nombre de Chambre:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="number" class="form-control" placeholder="5" name="nbreChambre">
                                </div>
                                <label class="col-md-2 col-sm-2">Superficie:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="number" class="form-control" name="superficie" placeholder="03294828">
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
                                <label class="col-md-2 col-sm-2">Nombre de Personnes:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="number" class="form-control" name="nbrePersonne" placeholder="8">
                                </div>

                                <label class="col-md-2 col-sm-2">Services:</label>
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
                                <label class="col-md-2 col-sm-2">Nombre de Salle de Bain:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="number" class="form-control" name="nbreSalleBain" placeholder="2">
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control textarea height-100" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Equipement salle de bain:</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="equipement_salle_bain" name="equipement_salle_bain[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Equipement Cuisine:</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="equipement_cuisine" name="equipement_cuisine[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Galerie d'Image :</label>
                                <div class="col-md-4 col-sm-3">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_p[]" multiple />
                                    </label>
                                </div>
                                
                          
                            </div>                          
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <button type="submit" onclick="validate()"  class="btn theme-btn">Enrégistrer</button>
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
@endsection