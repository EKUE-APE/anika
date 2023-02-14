
@extends('layout.app')
@section('section')
<div id="page-wrapper">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Compte</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="">Tableau Des Bords</a></li>
                <li class="active">Comptes</li>
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
                        <h4>Modifier un Compte</h4>
                    </div>
                    
                    <div class="card-body">
                            @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" method="POST" action="/update/{{$structure[0]->id}}">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom et Prénoms:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input id="name" type="text" value="{{$structure[0]->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Téléphone:</label>
                                <div class="col-md-10 col-sm-9">
									<input type="text" name="phone" value="{{$structure[0]->phone}}"  class="form-control" placeholder="+228 95647830">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Email:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input id="email" type="email" value="{{$structure[0]->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Mot de Passe:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Profil:</label>
                                <div class="col-md-10 col-sm-9">
                                    <select name="profil" class="form-control">
										<option data-placeholder="Register as a" class="chosen-select">S'inscrire en tant que </option>
										<option value="1">Professionnel</option>
										<option value="2">Admin</option>
									</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Modifier') }}
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