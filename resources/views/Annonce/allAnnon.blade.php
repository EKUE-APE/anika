
@extends('layout.app')
@section('section')
<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <ol class="breadcrumb" style="text-align: left">
                <li><a href="index.html">Gestion Annonces</a></li>
                <li class="active">Recherche</li>
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
                        <h4>Annonces </h4>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" pageLength="50" class="table table-striped table-2 table-hover table-bordered table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>Type d'Annonce</th>						
                                        <th>Categorie d'Annonce</th>
                                        <th>Entreprise</th>
                                        <th>Date de creation</th>
                                        <th>Active</th>
                                        <th>Date d'expiration</th>
                                        <th>Créateur</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($annonces as $user )
                                    <tr>
                                        <td>{{($user->type)}}</td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>  
                                                                        
                                        <td>
                                            @if (  $user -> active  == 1)
                                            <label class="switch">
                                            <input type="checkbox" checked >
                                            <span class="slider round"></span>
                                           </label>
                                            @else
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                              </label>
                                            @endif
                                          
                                        </td>  

                                        <td>{{($user->date)}}</td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href=" {{ route('addDate',['id' => $user->id]) }}" class="delete" title="" id="delete-button" data-toggle="tooltip"  class="delete" title="" id="delete-button" data-toggle="tooltip" data-original-title="Ajouter" >
                                            <i class="fa fa-plus"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                             {{--        @foreach ($auberges as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    @foreach ($hotels as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    @foreach ($bars as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    @foreach ($locations as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    @foreach ($logements as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    @foreach ($restaurants as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    @foreach ($patisseries as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach


                                    @foreach ($fast_food as $user )
                                    <tr>
                                        <td>
                                           <span class="custom-checkbox">
                                            {{($user->type)}}
                                            </span>
                                        </td>
                                        <td>{{($user->type)}}</td>                        
                                        <td>{{($user->entreprise)}}</td>
                                         <td>{{($user->created_at)}}</td>                                      
                                        <td></td>                      
                                        <td></td> 
                                        <td>{{($user->utilisateur)}}</td> 
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


	<!-- ================== Login & Sign Up Window ================== -->
    <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel2">Mettre une date d'expiration </h4>
                    <button type="button" class="m-close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                
                <div class="modal-body">
                    
                    <form id="ContactForm"> 
                        @csrf
                        <div class="form-group">
                            <label>Date d'expiration</label>
                            <input type="date" id="date" class="form-control" name="date" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Active</label>
                            <input type="checkbox" value="1" id="checked" class="form-control" name="checked" checked >
                            <span class="slider round"></span>
                        </div>
                        <div class="center">
                            <button type="submit" id="login-btn" class="btn btn-midium theme-btn btn-radius width-200"> Login </button>
                        </div>
                        
                    </form>
                      
                </div>
                
            </div>
        </div>
    <!-- ===================== End Login & Sign Up Window =========================== -->
     </div> 
@endsection


@section('js')
<script>
    $(document).ready(function(){
        $("#contactForm").submit(function(e){
          
console.log('ggggg');  e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('storeExpiration') }}",
                data: $("#contactForm").serialize(),
                success: function(response) {
                    if (response.success) {
                        $("#signin").modal("hide");
                        $("#contactForm")[0].reset();
                        alert("Votre message a été envoyé avec succès.");
                    } else {
                        alert("Une erreur est survenue lors de l'envoi de votre message.");
                    }
                }
            });
        });
    });
    </script>
<script>
    $(document).ready(function() {
      $('#date').on('change', function() {
        let selectedDate = new Date($(this).val());
        let today = new Date();
  
        if (selectedDate < today) {
          $('#checkbox').prop('checked', false);
        } else {
          $('#checkbox').prop('checked', true);
        }
      });
    });
</script>

<script>
    console.log('pazer');
    function checkDate() {
      var tableau = document.getElementById("example");
      var nombre_de_lignes = tableau.rows.length;
      
      for (var i = 0; i < nombre_de_lignes; i++) {
        var date_cell = tableau.rows[i].cells[5].children[0];
        var checkbox = tableau.rows[i].cells[4].children[0];
        var today = new Date();
        
        if (date_cell.value) {
          var date_from_cell = new Date(date_cell.value);
          if (today > date_from_cell) {
            checkbox.checked = false;
          } else {
            checkbox.checked = true;
          }
        }
      }
    }
    
    var input_elements = document.querySelectorAll("#example input[type=date]");
    for (var i = 0; i < input_elements.length; i++) {
      input_elements[i].oninput = function() {
        checkDate();
      };
    }
    
    checkDate();
    </script>
    

    
<script>
    var dateFields = document.getElementsByClassName("dateField");
    var checkboxFields = document.getElementsByClassName("checkboxField");
  
    for (var i = 0; i < dateFields.length; i++) {
      dateFields[i].addEventListener("change", function() {
        if (this.value) {
          checkboxFields[i].disabled = true;
        } else {
          checkboxFields[i].disabled = false;
        }
      });
    }
  </script>
<script>
  
    $(document).ready(function(){
        $('#example').DataTable({
            "order": [[ 0, "desc" ]],
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