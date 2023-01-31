
@extends('layout.app')
@section('section')
<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Entreprises</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="">Entreprise</a></li>
                <li class="active">Recherche Entreprises</li>
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
                        <h3>{{ $userCount }}</h3><h4> Entreprises </h4>
                      <a href="{{ url('addentre') }}" class="btn theme-btn">Ajouter une entreprise</a>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" pageLength="50" class="table table-striped table-2 table-hover table-bordered table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>Noms</th>						
                                        <th>N° Whatsapp</th>
                                        <th>Site web</th>
                                        <th>Créateur</th>
                                        
                                        <th>Annonce Rattachées</th>
                                        <th>Date de Création</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($entreprises as $entreprise )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox text-center">
                                            {{($entreprise->name)}}
                                            </span>
                                        </td>
                                        <td>{{($entreprise->phoneWhat)}}</td>                        
                                        <td>{{($entreprise->siteweb)}}</td>
                                         <td>{{($entreprise->nom)}}</td>    
                                         <td>{{($entreprise->name)}}</td>                                      
                                        <td>{{($entreprise->created_at)}}</td>                      
                                        
                                        <td>
                                            <a href="updatecompt/{{$entreprise->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="Modifier">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="AlldeleteEntreprise/{{$entreprise->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Supprimer">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                     
                                    
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
    console.log('huuuuuuuuuuuuuuuu');
    $(document).ready(function(){
        $('#example').DataTable({
            "order": [[ 0, "desc" ]],
            scrollY: '200px',
            scrollCollapse: true,
            paging: false,
            columnDefs: [{
            targets: 0,
            render: function(data, type, row, meta) {
                return '<input type="checkbox">';
            }
        }],
            "pageLength":50,
             buttons: [
                    {
                        text: 'csv',
                        extend: 'csvHtml5',
                    },
                    {
                        text: 'excel',
                        extend: 'excelHtml5',
                    },
                    {
                        text: 'pdf',
                        extend: 'pdfHtml5',
                    },
                    {
                        text: 'print',
                        extend: 'print',
                    },  
                ],
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
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>



<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/intl.js"></script>

@endsection