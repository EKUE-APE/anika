
@extends('layout.app')
@section('section')


<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>COMPTES</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Tableau de bord</a></li>
                <li class="active">COMPTES</li>
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
                        <h4>COMPTES</h4>
                        <div class="fl-right">
                            <select class="form-control">
                                <option>Ahow All</option>
                                <option>Free Listing</option>
                                <option>Regular listing</option>
                                <option>Featured Listing</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-2 table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom et Prénoms</th>						
                                        <th>Email</th>
                                        <th>Numéro de téléphone</th>
                                        <th>status</th>

                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($users as $user)

                      
                                    
                                
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                <label for="checkbox1"></label> {{($user->name)}}
                                            </span>
                                        </td>
                                        <td>{{($user->email)}}</td>                        
                                        <td>{{($user->phone)}}</td>
                                        <td><i class="fa fa-circle cl-success font-10 mrg-r-5"></i>Active</td>
                                        
                                        <td>
                                            <a href="updatecompt/{{$user->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="edit">
                                            <i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Voulez-vous supprimer cet compte?')" href="deletecompt/{{$user->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                    
                                 
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <p>10 Results Show of 250</p>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
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