
@extends('layout.app')

<style>
    #previewContainer {
        width: 200px;
    height: 200px;
    border: 5px solid black;
    overflow: hidden;
    float: left;
    margin-right: 100px;
    margin-top: 50px;
    

    }
    #previewContainer img {
    width: 200%;
    height: 200%;
    object-fit: cover;
  }
  
  #removeImageButton {
    top: 0;
    right: 0;
    background-color: blue;
    color: white;
    padding: 5px;
    cursor: pointer;
  }
</style>
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 text-left">
         <ol class="breadcrumb" style="text-align: left">
                <li><a href="">Entreprise</a></li>
                <li class="active">Création</li>
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
                        <h4>Modifier son Entreprise</h4>
                    </div>
                    
                    <div class="card-body">
                         @if (Session::has('message'))

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;

                                    </button>
                               {{ $message }}
                                </div>

                                @endif
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/editEntreprise/{{$structure->id}}">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Nom :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" value="{{$structure->name}}" required name="name">
                                </div>
                                <label class="col-md-2 col-sm-3">N° de Téléphone :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input id="mask" type="tel" class="form-control" value="{{$structure->phone}}"  name="phone" placeholder="(+229) 03294828">
                                </div>
                            </div>
                            

                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">N° Whatsapp :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input id="masks" type="tel" class="form-control" value="{{$structure->phoneWhat}}"  required name="phoneWhat" >
                                </div>
                                <label class="col-md-2 col-sm-3">Instagram :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" value="{{$structure->instagram}}"  required name="instagram" >
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Email :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" value="{{$structure->email}}"  required name="email" >
                                </div> 
                                <label class="col-md-2 col-sm-3">Site web :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input type="text" class="form-control" required value="{{$structure->siteweb}}"  name="contactEmail">
                                </div>
                            </div>
                            

                           

                            <div class="form-group">

                                <label class="col-md-2 col-sm-3">Comodité Entrepr :</label>
                                <div class="col-md-10 col-sm-9">
                                        <select class="selectpicker form-control col-md-12 col-sm-3" value="{{$structure->valeurajout}}"   required id="valeurajout" name="valeurajout[]" multiple aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir Les equipements">
                                                <?php     $exsit=0 ;  dd($exsit);  ?>
                                                @foreach($refs as $pa)
                                                    @foreach ( $structure->services as $service )
                                                        @if ( $service->type_ref_id == $pa->id)
                                                        <option selected value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                        <?php     $exsit=1 ;    ?>
                                                        @break
                                                        @endif  
                                                    @endforeach
                                                    @if ($exsit==0)
                                                        
                                                    <option value="{{$pa->id}}">{{$pa->valeurajout}}</option>
                                                    @endif
                                                    <?php     $exsit=0 ;    ?>

                                            @endforeach 

                                            </optgroup>
                                        </select>     
                                </div>
                                
                            </div>
                           
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Description :</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea class="form-control textarea height-100" value="{{$structure->description}}" required name="description" placeholder="Description"></textarea>
                                </div>   
                            </div>
                        <div class="col-md-12 col-sm-12 text-center">
							<div class="card">
								<div class="card-header ">
									<h4>Horaire</h4>
								</div>
							</div>
						</div>
                                 
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Lundi :</label>
                                <div class="col-md-4 col-sm-3">
                                  
                                        <select name="monday_start" value="{{$structure->monday_start}}"  class="selectpicker form-control col-md-12 col-sm-3"  aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir L'heure d'ouverture">
                                            <option selected value="">Choisir L'heure d'ouverture</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        
                                        </select>
                                      
                                    
                                </div>
                                <label class="col-md-2 col-sm-3"></label>
                            <div class="col-md-4 col-sm-3">
                                  
                                    <select name="monday_end" value="{{$structure->monday_end}}" class="selectpicker form-control col-md-12 col-sm-3" aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir L'heure de fermeture">
                                            <option selected value="">Choisir L'heure De Fermeture</option>
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Mardi  :</label>
                                <div class="col-md-4 col-sm-3">
                                  
                                        <select name="tuesday_start" value="{{$structure->tuesday_start}}" class="selectpicker form-control col-md-12 col-sm-3" aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir L'heure d'ouverture">
                                            <option selected value="">Choisir L'heure d'ouverture</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                      
                                    
                                </div>
                                
                                    <label class="col-md-2 col-sm-3"> :</label>

                                <div class="col-md-4 col-sm-3">
                                  
                                    <select name="tuesday_end" value="{{$structure->tuesday_end}}" class="selectpicker form-control col-md-12 col-sm-3" aria-label="Default select example" data-live-search="true">
                                        <optgroup label="">
                                        <option selected value="">Choisir L'heure De Fermeture</option>

                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Mercredi :</label>
                                <div class="col-md-4 col-sm-3">
                                  
                                        <select name="wednesday_start" value="{{$structure->wednesday_start}}" class="selectpicker form-control col-md-12 col-sm-3"  aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir L'heure d'ouverture">
                                                <option selected value="">Choisir L'heure d'ouverture</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                      
                                    
                                </div>
                             <label class="col-md-2 col-sm-3"> :</label>

                                <div class="col-md-4 col-sm-3">
                                  
                                    <select name="wednesday_end" class="selectpicker form-control col-md-12 col-sm-3" aria-label="Default select example" data-live-search="true">
                                        <optgroup label="">
                                            <option selected value="">Choisir L'heure De Fermeture</option>
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Jeudi :</label>
                                <div class="col-md-4 col-sm-3">
                                  
                                        <select class="selectpicker form-control col-md-12 col-sm-3" name="thursday_start" aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir L'heure d'ouverture">
                                            <option selected value="">Choisir L'heure d'ouverture</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                      
                                    
                                </div>
                          <label class="col-md-2 col-sm-3">   :</label>

                                <div class="col-md-4 col-sm-3">
                                  
                                    <select class="selectpicker form-control col-md-12 col-sm-3" name="thursday_end" aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir L'heure de Fermeture ">
                                            <option selected value="">Choisir L'heure De Fermeture</option>
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Vendredi  :</label>
                                <div class="col-md-4 col-sm-3">
                                  
                                        <select class="selectpicker form-control col-md-12 col-sm-3" name="friday_start" aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir L'heure d'ouverture">
                                                <option selected value="">Choisir L'heure d'ouverture</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                      
                                    
                                </div>
                                     <label class="col-md-2 col-sm-3"> :</label>

                                <div class="col-md-4 col-sm-3">
                                  
                                    <select class="selectpicker form-control col-md-12 col-sm-3" name="friday_end" aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir Heure de Fermeture">
                                            <option selected value="">Choisir L'heure De Fermeture</option>
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Samedi :</label>
                                <div class="col-md-4 col-sm-3">
                                  
                                        <select class="selectpicker form-control col-md-12 col-sm-3" name="saturday_start" aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir L'heure d'ouverture">
                                                <option selected value="">Choisir L'heure d'ouverture</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                      
                                    
                                </div>
                                <label class="col-md-2 col-sm-3"> :</label>

                                <div class="col-md-4 col-sm-3">
                                  
                                    <select class="selectpicker form-control col-md-12 col-sm-3" name="saturday_end" aria-label="Default select example" data-live-search="true">
                                        <optgroup label="Choisir Heure de Fermeture">
                                            <option selected value="">Choisir L'heure De Fermeture</option>
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3">Dimanche :</label>
                             
                                <div class="col-md-4 col-sm-3">
                                  
                                        <select class="selectpicker form-control col-md-12 col-sm-3" name="sunday_start" aria-label="Default select example" data-live-search="true">
                                            <optgroup label="Choisir L'heure d'ouverture">
                                                <option selected value="">Choisir L'heure d'ouverture</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                      
                                    
                                </div>
                            <label class="col-md-2 col-sm-3">:</label>

                                <div class="col-md-4 col-sm-3">
                                  
                                    <select class="selectpicker form-control col-md-12 col-sm-3" name="sunday_end" aria-label="Default select example" data-live-search="true">
                                        <optgroup label="">
                                            <option selected value="">Choisir L'heure De Fermeture</option>
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header text-center">
									<h4>Localisation</h4>
								</div>
							</div>
						</div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-2">Pays :</label>
                                <div class="col-md-2 col-sm-3">
                                    <select class="form-control" id="country_id" value="{{$structure->country_id}}" required name="country_id">
                                        <optgroup label="Choisir La commodité">
                                            <option selected value="">Choisir Le pays</option>

                                            @foreach($pays as $pa)
                                            @if ( $structure->country_id == $pa->id)
                                            <option selected value="{{$pa->id}}">{{$pa->name}}</option>

                                            @else
                                            <option value="{{$pa->id}}">{{$pa->name}}</option>
                                            @endif
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>   
                                <label class="col-md-2 col-sm-2">Ville :</label>
                                <div class="col-md-2 col-sm-3">
                                    <select class="form-control" value="{{$structure->city_id}}" required id="city_id" name="city_id">
                                        <optgroup label="Choisir La ville">
                                            <option selected value="">Choisir La Ville</option>
                                           
                                        </optgroup>
                                    </select>
                                </div>  
                                <label class="col-md-2 col-sm-2"> Quartier :</label>
                                <div class="col-md-2 col-sm-3">
                                    <select class="form-control" value="{{$structure->nomq}}" required id="nomq" name="nomq">
                                        <optgroup label="Choisir Le quartier">
                                            <option selected value="">Choisir Le quartier</option>
                                            
                                        </optgroup>
                                    </select>
                                </div>
                            </div>  
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3"> Latitude :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input class="form-control" id="latitude" value="{{$structure->latitude}}"  required type="text" readonly name="latitude" >
                                </div>  
                                <label class="col-md-2 col-sm-3"> Longitude :</label>
                                <div class="col-md-4 col-sm-3">
                                    <input class="form-control" id="longitude" value="{{$structure->longitude}}" required  type= "text" readonly name="longitude" >
                                </div>
                            </div>


                           
                          
                    <div class="form-group">
                            <div id="map" class="col-md-6 col-sm-3">
                                
                            </div>
                        <label class="col-md-2 col-sm-3">Image :</label>
                                <div class="col-md-4 col-sm-3">
                                    <label class="btn-bs-file btn">
                                        Choisir
                                        <input type="file" name="image_name[]" value="{{$structure->image_name}}" required id="fileInput" multiple required />
                                    </label>
                                </div>
                    </div>
                        <div class="form-group">
                            <div id="previewContainerContainer" class="card-body col-md-12 col-sm-12">
                                
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

@section('js')
<script>
        // var phoneMask = IMask(document.querySelector('input'), {
        var phoneMask = IMask(document.getElementById('mask'), {
                mask: "(+000) 00 00 00 00"
            });

      </script>
        <script>
        // var phoneMask = IMask(document.querySelector('input'), {
        var phoneMask = IMask(document.getElementById('masks'), {
                mask: "(+000) 00 00 00 00"
            });

      </script>
<script>

    document.querySelector('#fileInput').addEventListener('change', function(e) {
      const files = e.target.files;
      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file.type.startsWith('image/')) {
          const reader = new FileReader();
          reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.width = 200;
            const previewContainer = document.createElement('div');
            previewContainer.id = 'previewContainer';
            const removeImageButton = document.createElement('div');
            removeImageButton.id = 'removeImageButton';
            removeImageButton.innerText = 'Supprimer';
            removeImageButton.addEventListener('click', function() {
              previewContainer.remove();
            });
            previewContainer.appendChild(removeImageButton);
            previewContainer.appendChild(img);
            document.querySelector('#previewContainerContainer').appendChild(previewContainer);
          }
          reader.readAsDataURL(file);
        }
      }
    });
</script>
<script>
var phoneMask = IMask(document.querySelector('input'), {console.log('viens');
	mask: '(000)000-0000'
});



const input = document.querySelector('input');
input.addEventListener('keydown', function(e) {
	const formattedInputValue = formatPhoneNumber(e.target.value);
	e.target.value = formattedInputValue;
});
</script>

<script>
    let mymap,marqueur;//variable pour la carte et le marqueur
    window.onload = () =>
    {
        mymap = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minzoom: 1,
        maxZoom: 9,
    attribution: 'Carte  '
    }).addTo(mymap);
     
    mymap.on("click", mapClickListen)
    document.querySelector("#ville").addEventListener("blur",getCity)

    }
    function mapClickListen(e)
    {
        //on recupere les coordonées du clic
        console.log(e)
        let pos = e.latlng
        //on ajoute le marqueur
        addMarker(pos)
        //on affiche les coordonéés dans le formulaire
        document.querySelector("#latitude").value = pos.lat
        document.querySelector("#longitude").value = pos.lng

    }

    function addMarker(pos)
    {
        //verifier si un marqueur existe
        if(marqueur != undefined)
            {
                mymap.removeLayer(marqueur)
            }
        marqueur = L.marker(pos,
        {
            //on rend le marqueur  deplacable
            draggable: true
        })


            // on ecoute le glisser /deposer sur le marqueur
            marqueur.on("dragend", function(e)
            {
            pos = e.target.getLatLng()

            document.querySelector("#latitude").value = pos.lat
            document.querySelector("#longitude").value = pos.lng
            })
        marqueur.addTo(mymap)
    }
    function getCity()
    {

        let adresse = document.querySelector("#adresse").
        value + "," + document.querySelector("#cp").
        value + " " + document.querySelector("ville").value
        console.log(adresse)

    // on initialise une requete ajax
    const xmlhttp = new XMLHttpRequest
//on ouvre la requete
xmlhttp.open("get","")
    }
    
</script>
@if (Session::has(''))
<script type="text/javascript">
    
        swal("Entreprise Enrégistrée avec Succes","{!! Session::get('') !!}","succes",{
            button:"OK",
        })
    
</script>
@endif

<script type="text/javascript">
    console.log("azyui");
    $('#country_id').on('change',function ( ) {
        //console.log("uty");
        console.log($('#country_id').val());
        $.ajax({
            url: '/recupererquartier-' + $('#country_id').val(),
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


    $('#city_id').on('change',function ( ) {
        //
        console.log("uty");
        console.log($('#city_id').val());
        $.ajax({
            url: '/recupererquartie-' + $('#city_id').val(),
            type: "get",
            success: function (data) {
                $('#nomq').empty();
                $('#nomq').append('<option value=""></option>')
    
                for (var i = 0; i < data.length; i++) {
    
                    $('#nomq').append('<option value="'+data[i].id+'">'+data[i].nomq+'</option>')
                }
    
            }, 
            error: function (data) {
                console.log("erreur")
            },
        })
    })
        </script>
@endsection