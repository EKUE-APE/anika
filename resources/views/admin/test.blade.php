@extends('layout.app')
@section('section')


<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Comptes</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="">Comptes</a></li>
                <li class="active">Création Comptes</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>              
     <!-- /. ROW  -->
    <div id="page-inner">
        
        <div class="row bott-wid">
            <div class="col-md-9 col-sm-12">
                <div class="card">
                
                    <div class="card-header">
                        <h4>Crée son Compte</h4>
                    </div>
                    
                    <div class="card-body">
                        
                            @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif

                                <form class="form-horizontal" method="POST" action="{{ route('store') }}">
                                    @csrf

                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3"> Nom et Prénoms:</label>
                                        <div class="col-md-10 col-sm-9">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Téléphone :</label>
                                        <div class="col-md-10 col-sm-9">
                                            <input type="text" name="phone" class="form-control" placeholder="+228 95647830">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Email :</label>
                                        <div class="col-md-10 col-sm-9">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                  
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Mot de Passe  :</label>
                                        <div class="col-md-10 col-sm-9">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            
                                    </div>
                                  
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Confirmation du Mot de Passe :</label>
                                        <div class="col-md-10 col-sm-9">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            
                                    </div>
                                  
                                    </div>
                                   
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2"> S'inscrire en tant que:</label>
                                        <div class="col-md-4 col-sm-3">
                                            <select class="form-control" id="name" name="profil">
                                               <optgroup label="Choisir Le Profil">
                                               <option value="1">Admin</option>

                                               <option value="2">Professionnel</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 text-center">
                                          <button type="submit" class="btn btn-primary">
                                            {{ __('Créer') }}
                                        </button> 
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