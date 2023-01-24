
@extends('layout.app')
@section('section')
<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Références</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Tableau de bord</a></li>
                <li class="active">All Listing</li>
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
                        <h4>Liste par Référence </h4>
                      

                       
                    </div>
                    
                    <div class="card-body">
                        <div class="row bott-wid">
					
                            <div class="col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4> Location Véhicule</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-2 table-hover">
                                <thead>
                                    <tr>
                                        <th>Valeur Ajoutée </th>						
                                        <th>Noms Référence</th>
                                        
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($produits as $herbergement )
                                          <tr>
                                            
                                        <td> {{($herbergement->valeurajout)}}</td>    
                                        <td>
                                            <span class="custom-checkbox">
                                                {{($herbergement->nameref)}}
                                            </span>
                                        </td>                    
                                        
                                        <td>
                                            <a href="updaterefer/{{$herbergement->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deleterefer/{{$herbergement->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="row bott-wid">
					
                            <div class="col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Hébergement</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-2 table-hover">
                                <thead>
                                    <tr>
                                        <th>Valeur Ajoutée </th>						
                                        <th>Noms Référence</th>
                                        
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($restaurations as $herbergement )
                                          <tr>
                                            
                                        <td> {{($herbergement->valeurajout)}}</td>    
                                        <td>
                                            <span class="custom-checkbox">
                                                {{($herbergement->nameref)}}
                                            </span>
                                        </td>                    
                                        
                                        <td>
                                            <a href="updaterefer/{{$herbergement->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deleterefer/{{$herbergement->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                    
                                    
                                </tbody>
                              
                            </table>
                        </div>
                        <div class="row bott-wid">
					
                            <div class="col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Entreprise</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-2 table-hover">
                                <thead>
                                    <tr>
                                        <th>Valeur Ajoutée </th>						
                                        <th>Noms Référence</th>
                                        
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($entreprises as $herbergement )
                                          <tr>
                                            
                                        <td> {{($herbergement->valeurajout)}}</td>    
                                        <td>
                                            <span class="custom-checkbox">
                                                {{($herbergement->nameref)}}
                                            </span>
                                        </td>                    
                                        
                                        <td>
                                            <a href="updaterefer/{{$herbergement->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deleterefer/{{$herbergement->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="row bott-wid">
					
                            <div class="col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Restauration</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-2 table-hover">
                                <thead>
                                    <tr>
                                        <th>Valeur Ajoutée </th>						
                                        <th>Noms Référence</th>
                                        
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($herbergements as $herbergement )
                                          <tr>
                                            
                                        <td> {{($herbergement->valeurajout)}}</td>    
                                        <td>
                                            <span class="custom-checkbox">
                                                {{($herbergement->nameref)}}
                                            </span>
                                        </td>                    
                                        
                                        <td>
                                            <a href="updaterefer/{{$herbergement->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deleterefer/{{$herbergement->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="row bott-wid">
					
                            <div class="col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Vie nocturne</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-2 table-hover">
                                <thead>
                                    <tr>
                                        <th>Valeur Ajoutée </th>						
                                        <th>Noms Référence</th>
                                        
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($herbergements as $herbergement )
                                          <tr>
                                            
                                        <td> {{($herbergement->valeurajout)}}</td>    
                                        <td>
                                            <span class="custom-checkbox">
                                                {{($herbergement->nameref)}}
                                            </span>
                                        </td>                    
                                        
                                        <td>
                                            <a href="updaterefer/{{$herbergement->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                                <i class="fa fa-pencil"></i></a>
                                                <a href="deleterefer/{{$herbergement->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <p>0 Results Show of 0</p>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
$('#example').DataTable();
} );
    var modal = $('.Recherche');
    $('.logo').click(function() {
        modal.show();
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