
@extends('layout.app')
@section('section')
<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
               <ol class="breadcrumb">
                <li>entre</li>
                <li class="active">suppression Entreprises</li>
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
                        <h3>{{ $userCount }}</h3><h4> Entreprises </h4>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" pageLength="50" class="table table-striped table-2 table-hover table-bordered table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Noms</th>
                                        <th>N° Whatsapp</th>
                                        <th>Site web</th>
                                        <th>Créateur</th>
                                        
                                        <th>Annonce Rattachées</th>
                                        <th>Date de Suppression</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($deletedData as $item)
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox text-center">
                                            
                                            </span></td>
                                        <td>{{($item->name)}}</td>
                                        <td>{{($item->phoneWhat)}}</td>                        
                                        <td>{{($item->siteweb)}}</td>
                                         <td>{{($item->nom)}}</td>    
                                         <td>{{($item->name)}}</td>                                      
                                        <td>{{($item->deleted_at)}}</td>                      
                                        
                                     
                                    </tr>
                                    @endforeach
                                   
                              {{--       <div class="card-footer">
                                        <nav aria-label="Page navigation example">
                                            <tr>
                                                <th>Noms</th>						
                                                <th>Email</th>
                                                <th>Numéro</th>
                                                <th>Action</th>
                                            </tr>
                                        </nav>
                                    </div> --}}
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
   /*  $(document).ready(function() {
$('#example').DataTable();
} );
    var modal = $('.Recherche');
    $('.logo').click(function() {
        modal.show();
    }); */
    $(document).ready(function(){
        $('#example').DataTable({
            "order": [[ 0, "desc" ]],
            columnDefs: [{
            targets: 0,
            render: function(data, type, row, meta) {
                return '<input type="checkbox">';
            }
        }],
            "pageLength":50,
            "oLanguage": {
                
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }
        });
    });


    $(document).ready(function() {
$('#example1').DataTable();
} );
    var modal = $('.Recherche');
    $('.logo').click(function() {
        modal.show();
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>



<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/intl.js"></script>

@endsection