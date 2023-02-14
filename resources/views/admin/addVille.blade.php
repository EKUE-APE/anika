
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                       <ol class="breadcrumb">
                <li><a href="index.html">Localisation</a></li>
                <li class="active">Ville</li>
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
                        <h4>Crée Une Ville</h4>
                    </div>
                                        <div class="card-body">
    @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" method="POST" action="{{ route('storeVille') }}">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Pays:</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" name="county_id" required id="county_id">
                                        <optgroup label="Choisir le pays">
                                            <option selected value="">Choisir Le Pays</option>

                                            @foreach($pays as $pay)
                                                <option value="{{$pay->id}}">{{$pay->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <label class="col-md-2 col-sm-3">Nom de la Ville:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" required name="nom" placeholder="Lomé">
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
    console.log("salut");
</script>
@section('js')

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