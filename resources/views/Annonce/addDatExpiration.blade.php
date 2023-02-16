
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                       <ol class="breadcrumb">
                <li><a href="index.html">Validation de l'Annonce</a></li>
                <li class="active">Ajouter une Date d'Expiration</li>
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
                        <h4>Crée Une Validation</h4>
                    </div>
                    
                    <div class="card-body">
                        @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                        @endif
                        <form class="form-horizontal" method="POST" action="/storeDate/{{$user[0]->id}}">
                            @csrf
                                                 
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Date:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="date" class="form-control" required name="date">

                                </div>  
                                <label class="col-md-2 col-sm-3">Active :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="checkbox" value="1" checked class="form-control" required name="active" >

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <button type="submit" class="btn theme-btn">Enregistrer</button>
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