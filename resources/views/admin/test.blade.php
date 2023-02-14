@extends('layout.app')
<style>
    .italic-placeholder::-webkit-input-placeholder {
  font-style: italic;
  color: rgba(0,0,0,0.4);

    }

    .italic-placeholder:-moz-placeholder {
    font-style: italic;
    color: rgba(0,0,0,0.4);

    }

    .italic-placeholder::-moz-placeholder {
    font-style: italic;
    color: rgba(0,0,0,0.4);

    }

    .italic-placeholder:-ms-input-placeholder {
    font-style: italic;
    }
    .card-body {
    background-color: #e0e0e0;
    }


</style>
@section('section')


<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-1 col-sm-4 col-xs-12">
           <ol class="breadcrumb" style="text-align: left">
                <li><a href="">Comptes</a></li>
                <li class="active">Ajouter</li>
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
                                        <label class="col-md-2 col-sm-2"> Nom et Prénoms:</label>
                                        <div class="col-md-4 col-sm-3">
                                            <input id="name" type="text" required placeholder="afi" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Téléphone :</label>
                                        <div class="col-md-4 col-sm-3">
                                            <input id="mask" type="tel" name="phone" id="phone" class="form-control" font-style: italic; placeholder="+228 95647830">
                                          {{--   <input
                                            type="tel"
                                            maxlength="14"
                                            pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$"
                                        /> --}}
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Email :</label>
                                        <div class="col-md-4 col-sm-3">
                                            <input id="email" type="email" required class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                  
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Mot de Passe  :</label>
                                        <div class="col-md-4 col-sm-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            
                                    </div>
                                  
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3">Confirmation du Mot de Passe :</label>
                                        <div class="col-md-4 col-sm-3">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            
                                    </div>
                                  
                                   
                                   
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2"> S'inscrire en tant que:</label>
                                        <div class="col-md-4 col-sm-3">
                                            <select class="form-control" required id="name" name="profil">
                                               <optgroup label="Choisir Le Profil">
                                                   <option selected value="">Choisir le profil</option>

                                               <option value="1">Admin</option>

                                               <option value="2">Professionnel</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                     </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 text-right">
                                            <button type="submit" class="btn theme-btn">  {{ __('Enrégistrer') }}</button>
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
  console.log('ou');
       // var phoneMask = IMask(document.querySelector('input'), {
         var phoneMask = IMask(document.getElementById('mask'), {
                mask: "(+000) 00 00 00 00"
            });

      </script>
             <script src="https://unpkg.com/imask"></script> 

<script>
    console.log('ALOUGBA');
    function formatPhoneNumber(value) {
	if (!value) return value;

	// strip characters out
	const phoneNumber = value.replace(/[^\d]/g, '');

	const phoneNumberLength = phoneNumber.length;

	if (phoneNumberLength < 4) return phoneNumber;

	if (phoneNumberLength < 7) {
		return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3)}`;
	}

	return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3, 6)}-${phoneNumber.slice(6, 9)}`;
}


    </script>
    
@endsection