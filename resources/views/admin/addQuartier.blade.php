
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="">Localisation</a></li>
                <li class="active">Quartier</li>
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
                        <h4>Créé Un Quartier</h4>
                    </div>
                    
                    <div class="card-body">
                      @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" method="POST" action="{{ route('storeQuartier') }}">
                            @csrf
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Pays:</label>
                                <div class="col-md-4 col-sm-3">

                                    
                                     <select class="selectpicker form-control col-md-12 col-sm-3" required name="county_id" id="county_id"  aria-label="Default select example" data-live-search="true">
                                       <option value="" selected >Choisir le pays</option>
                                       <option selected value="">Choisir Le pays</option>

                                             @foreach($pays as $pay)
                                                <option value="{{$pay->id}}">{{$pay->name}}</option>
                                            @endforeach
                                       
                                    </select>
                                </div>     
                                <label class="col-md-2 col-sm-3">Ville :</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" required name="city_id" id="city_id">
                                         <option selected value="">Choisir La Ville</option>

                                    </select>

                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom du quartier:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" required  name="nomq" placeholder="Vakpo ">
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

<script type="text/javascript">
    console.log("hju");
</script>
@section('js')

    <script type="text/javascript">
console.log("hi");
$('#county_id').on('change',function ( ) {
    
    console.log($('#county_id').val());
    $.ajax({
        url: '/recupererville-' + $('#county_id').val(),
        type: "get",
        success: function (data) {
            $('#city_id').empty();
            $('#city_id').append('<option value=""></option>')

            for (var i = 0; i < data.length; i++) {

                $('#city_id').append('<option value="'+data[i].id+'">'+data[i].nom+'</option>')
            }

        }, 
        error: function (data) {
            console.log("erreur")
        },
    })
})
    </script>

@endsection