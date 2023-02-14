
@extends('layout.app')
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                       <ol class="breadcrumb">
                <li><a href="index.html">Référence</a></li>
                <li class="active">Ajouter une Référence</li>
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
                        <form class="form-horizontal" method="POST" action="{{ route('storeReference') }}">
                            @csrf
                                                 
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Type de Référence:</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" required name="typereference" id="typereference">
                                        <optgroup label="Choisir ">
                                            <option selected value="">Choisir le type de la reference</option>

                                            <option value="1">Location de véhicule</option>
                                            <option value="2">Hébergement</option>
                                            <option value="3">Entreprise</option>
                                            <option value="4">Restauration</option>
                                            <option value="5">Vie nocturne</option>
                                        </optgroup>
                                    </select>
                                </div>  
                                <label class="col-md-2 col-sm-3">Nom :</label>
                                <div class="col-md-4 col-sm-3">
                                    <select class="form-control" required name="name" id="name">
                                        <optgroup label="Choisir le nom de la reference">
                                            <option selected value="">Choisir le nom de la reference</option>

                                        </optgroup>
                                        

                                    </select>
                                </div>
                            </div>
                          


                        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Valeur Ajoutée:</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" required name="valeur" placeholder="reférenc....">
                                </div>
                            </div>
                           
                           
                             {{--  <div class="form-group">
                                <label class="col-md-2 col-sm-3">Valeur Ajoutée:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control"  name="valeurA" placeholder="reférence ............">
                                </div>
                            </div> 
                            
                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Valeur Ajoutée:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control"  name="valeurB" placeholder="reférence ............">
                                </div>
                            </div> <div class="form-group">
                                <label class="col-md-2 col-sm-3">Valeur Ajoutée:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control"  name="valeurC" placeholder="reférence ............">
                                </div>
                            </div> <div class="form-group">
                                <label class="col-md-2 col-sm-3">Valeur Ajoutée:</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" class="form-control"  name="valeurD" placeholder="reférence ............">
                                </div>
                            </div>--}}
                            
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