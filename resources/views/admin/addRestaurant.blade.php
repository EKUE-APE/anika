
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Restaurant</li>
            </ol>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
           
        </div>
        <!-- /.col-lg-12 -->
    </div>              
     <!-- /. ROW  -->
    <div id="page-inner">
        
        <div class="row bott-wid">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                
                    <div class="card-header">
                        <h4>Crée Une Restaurant</h4>
                    </div>
                  
                 
                    
                    <div class="card-body">
                            @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" enctype="multipart/form-data"  method="POST" action="{{ route('storeRestaurant') }}">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Entreprise:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="name" id="name">
                                        <optgroup label="Choisir l'entreprise">
                                            @foreach($entreprises as $pa)
                                            <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endforeach 
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Spécialité :</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="selectpicker form-control col-md-12 col-sm-3" id="specialite" name="specialite[]" multiple aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir Les equipements">
                                            @foreach($comodites as $pa)
                                            <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                            @endforeach 
                                        </optgroup>
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Equipement Restaurant :</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="selectpicker form-control col-md-12 col-sm-3" id="Equipement_restaurant" name="Equipement_restaurant[]" multiple aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir Les equipements">
                                            @foreach($comodites as $pa)
                                            <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                            @endforeach 
                                        </optgroup>
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="description" placeholder="description....">
                                </div>
                            </div>
                                                    
                         


                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom de l'Entrée:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="entre..." name="namee">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Ingrédients:</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="ingrediente" name="ingrediente[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>     
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix min:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="NUMBER" class="form-control" name="price_min" placeholder="2000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix max:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="NUMBER" class="form-control" name="prixmax" value="20000.">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Galerie d'Image d'entree:</label>
                                <div class="col-md-4 col-sm-3">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_p[]" multiple />
                                    </label>
                                </div>
                            </div>                          
                            




                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom du Plat:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="plat..." name="namep">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Ingrédients:</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="ingredientp" name="ingredientp[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>     
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Accompagnement:</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="accompagnement" name="accompagnement[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>     
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix min:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="NUMBER" class="form-control" name="price_minp" placeholder="2000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix max:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="NUMBER" class="form-control" name="prixmaxp" value="20000.">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Galerie d'Image du Plat:</label>
                                <div class="col-md-4 col-sm-3">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_pp[]" multiple />
                                    </label>
                                </div>
                            </div>        



                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom du dessert:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" placeholder="entre..." name="named">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Ingrédients:</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" id="ingredientd" name="ingredientd[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                @foreach($comodites as $pa)
                                                <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                @endforeach 
                                            </optgroup>
                                        </select>     
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix min:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="NUMBER" class="form-control" name="price_mind" placeholder="2000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix max:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="NUMBER" class="form-control" name="prixmaxd" value="20000.">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Galerie d'Image du Dessert:</label>
                                <div class="col-md-4 col-sm-3">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_d[]" multiple />
                                    </label>
                                </div>
                            </div> 



                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <button type="submit" class="btn theme-btn">Créer</button>
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