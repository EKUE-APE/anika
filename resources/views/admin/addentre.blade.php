
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
                    
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" value="reférence ...........................">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Ingrédients:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" value="reférence ...........................">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Accompagnement:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" value="reférence ...........................">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix min:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" value="reférence ...........................">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Prix max:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control" value="reférence ...........................">
                                </div>
                            </div>
                            
                          
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Image de l'entrée:</label>
                                <div class="col-md-10 col-sm-9">
                                    <label class="btn-bs-file btn">
                                        Selectionnez
                                        <input type="file" />
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