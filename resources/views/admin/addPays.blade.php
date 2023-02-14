
@extends('layout.app')
<style>
    .error {
      color: red;
      font-size: 14px;
    }
  </style>
  <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
  
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Localisation</a></li>
                <li class="active">Pays</li>
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
                        <h4>Crée Un Pays</h4>
                    </div>
                    
                    <div class="card-body">
                          @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" method="POST" action="{{ route('storeCouuntry') }}">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Indicatif   :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" required  name="country_code" placeholder="+228">
                                </div>    
                                <label class="col-md-2 col-sm-3">Nom du Pays:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" required id="field"  name="name" placeholder="Togo ............">
                                </div>
                                @if ($errors->has('field'))
                                <div class="error">{{ $errors->first('field') }}</div>
                                @endif
                                @if ($errors->has('field'))
                                <script>
                                  Swal.fire({
                                    title: 'Erreur',
                                    text: '{{ $errors->first('field') }}',
                                    icon: 'error',
                                  });
                                </script>
                              @endif
                              

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

<script type="text/javascript">
    console.log("salut");
</script>
@section('js')
<script>
    document.querySelector("form").addEventListener("submit", function(event) {
      var field = document.querySelector("#field").value;
      if (field) {
        alert("Le champ est déjà rempli avec la valeur : " + field);
        event.preventDefault();
      }
    });
  </script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>

<script type="text/javascript">
    console.log("salut");
    $('#typereference').on('change',function ( ) {
    $.ajax({
        url: '/recuperernomRef-' + $('#typereference').val(),
        type: "get",
        success: function (data) {
            $('#name').empty();
            $('#name').append('<option value=""></option>')

            for (var i = 0; i < data.length; i++) {

                $('#name').append('<option value="'+data[i].id+'">'+data[i].nameref+'</option>')
            }

        }, 
        error: function (data) {
            console.log("erreur")
        },
    })
})
    </script>

@endsection