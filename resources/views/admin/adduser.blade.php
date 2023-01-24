@extends('layout.app')
@section('section')


<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Site Settings</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Site Settings</li>
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
                        <h4>Crée son entreprise</h4>
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
                                        <label>Nom et Prénoms</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    </div>
                                    <div class="form-group">
                                        <label>Téléphone:</label>
                                        <input type="text" name="phone" class="form-control" placeholder="+228 95647830">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label>Email</label>
    
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Mot de Passe</label>
                                        
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Confirmation du mot de passe</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                               
                                    </div>
                                    
                                    <div class="form-group">
                                        <select class="form-control" name="profil">
                                            <option data-placeholder="Register as a" class="chosen-select">S'inscrire en tant que </option>
                                            <option value="0">Admin</option>

                                            <option value="1">Professionnel</option>
                                        </select>
                                    </div>
                                    
                                    <span class="custom-checkbox d-block">
                                        <input type="checkbox" id="select1">
                                        <label for="select1"></label>
                                        
                                    </span>
                                    
                                    <div class="center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Créer') }}
                                        </button>
                                    </div>
                                </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection