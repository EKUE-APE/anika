
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Référence</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Référence</li>
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
                        <h4>Crée Une Référence</h4>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 text">
                            <button type="submit" class="btn theme-btn">Créer une entrée</button>
                            <button type="submit" class="btn theme-btn">Créer un plat</button>
                            
                            <button type="submit" class="btn theme-btn">Créer un dessert</button>
                        </div>
                    </div>
                 
                    
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('storeRestaurant') }}">
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Entreprise:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="name" id="name">
                                        <option value="1">Location de véhicule</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Spécialité :</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="service">
                                        <option value="1">BOIV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Equipement Restaurant :</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="category_id">
                                        <option value="1">Boite de vitesse</option>
                                        <option value="2">Carte de consommation</option>
                                        <option value="3">Commodités entreprise</option>
                                       

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" name="description" value="description....">
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