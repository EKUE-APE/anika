
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <ol class="breadcrumb">
                <li><a href="">Référence</a></li>
                <li class="active">Nom Référence</li>
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
                        <h4>Crée Une Référence</h4>
                    </div>
                    
                    <div class="card-body">
                            @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" method="POST" action="{{ route('storeName') }}">
                        @csrf
                           
                            
                          
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Type:</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" name="idtype">
                                         <option selected value="">Choisir Le Type</option>

                                        <option value="1">Location de véhicule</option>
                                        <option value="2">Hébergement</option>
                                        <option value="3">Entreprise</option>
                                        <option value="4">Restauration</option>
                                        <option value="5">Vie nocturne</option>
                                        

                                    </select>
                                </div> 
                                <label class="col-md-2 col-sm-3">Nom Référence:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text"  name="nameref" class="form-control" placeholder="reférenc....">
                                </div>
                            </div>

                                     
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 text-right">
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