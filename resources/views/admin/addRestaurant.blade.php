
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
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn theme-btn">Créer une entrée</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn theme-btn">Créer un plat</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn theme-btn">Créer un dessert</button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Description:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" value="reférence ...........................">
                                </div>
                            </div>
                            
                          
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Entreprise:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="reference">
                                        <option value="1">Location de véhicule</option>
                                        <option value="2">Hébergement</option>
                                        <option value="3">Entreprise</option>
                                        <option value="4">Restauration</option>
                                        <option value="5">Vie nocturne</option>
                                        

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Spécialité :</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="acronyme">
                                        <option value="1">BOIV</option>
                                        <option value="2">CCON</option>
                                        <option value="3">COME</option>
                                        <option value="4">COMH</option>
                                        <option value="5">EQPC</option>
                                        <option value="6">EQPH</option>
                                        <option value="7">EQPR</option>
                                        <option value="8">EQPS</option>
                                      

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom :</label>
                                <div class="col-md-10 col-sm-9">
                                    <select class="form-control" name="name">
                                        <option value="1">Boite de vitesse</option>
                                        <option value="2">Carte de consommation</option>
                                        <option value="3">Commodités entreprise</option>
                                        <option value="4">Commodités hébergement</option>
                                        <option value="5">Equipement cuisine</option>
                                        <option value="6">Equipement hébergement</option>
                                        <option value="7">Equipement restauration</option>
                                        <option value="8">Equipement salle de bain</option>
                                        <option value="9">Equipement véhicule</option>
                                        <option value="10">Equipement vie nocturne</option>
                                        <option value="11">Marque</option>
                                        <option value="12">Service</option>
                                        <option value="13">Spécialité</option>
                                        <option value="14">Type de carburant</option>
                                        <option value="15"> Type de gâteau</option>
                                        <option value="16">Type de lit</option>
                                        <option value="17">Type de véhicule</option>

                                    </select>
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