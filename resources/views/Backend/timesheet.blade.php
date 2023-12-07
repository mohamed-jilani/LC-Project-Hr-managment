@extends('Layout.app')
@section('main-content')

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>ajouter une tache</h1>
      <a href="hr/ajouter" class="btn btn-danger float-end"> ajouter</a>


      @if (session('status'))
        <div class="alert alert-success alert-dismissible text-white" role="alert">
          <span class="text-sm">{{session('status')}}.</span>
          <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

      @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible text-white" role="alert">
          <span class="text-sm">{{ $error}} </span>
          <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endforeach


    </div>
  </div>
</div>


<div class="container-fluid py-4">

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Lundi      
                  <span class="text-xs font-weight-bold">{{ $semaine[0] }}</span>
                    
                </h6>
              </div>
            </div>
            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated At</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

                    </tr>
                  </thead>
                  <tbody>

                    @foreach($tache[0] as $tach)
                      @if(isset($tach))                
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm"> {{ $tach->id }} </h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">{{ $tach->description }}</p>
                        </td>
                        
                        <td>
                          <span class="text-xs font-weight-bold">{{ $tach->dateCreation }}</span>
                        </td>

                        <td>
                          <span class="text-xs font-weight-bold">{{ $tach->tache_updated_at }}</span>
                        </td>

                        @if($tach->etat_nom =='terminé')
                        
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">{{ $tach->etat_nom }}</span>
                          </td>
                        
                        @else
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">{{ $tach->etat_nom }}</span>
                          </td>
                        
                        @endif


                        <td class="align-middle">
                          <a href="hr/update-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <a href="hr/delete-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Supprimer
                          </a>
                        </td>
              
                      </tr>
                      @endif
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      
<!-- ************************************************************************************************************ -->
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Mardi   
            <span class="text-xs font-weight-bold">{{ $semaine[1] }}</span>

          </h6>
          
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

              </tr>
            </thead>
            <tbody>
              

            @foreach($tache[1] as $tach)
            @if(isset($tach))  
              
            
              <tr>
                <td>
                  <div class="d-flex px-2">
                    <div>
                      <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                    </div>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{ $tach->id }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $tach->description }}</p>
                </td>
                
                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->dateCreation }}</span>
                </td>

                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->tache_updated_at }}</span>
                </td>

                @if($tach->etat_nom =='terminé')
                
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{ $tach->etat_nom }}</span>
                  </td>
                
                @else
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">{{ $tach->etat_nom }}</span>
                  </td>
                
                @endif

                


                <td class="align-middle">
                  <a href="hr/update-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="hr/delete-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Supprimer
                  </a>
                </td>
      

              </tr>

              @endif
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ************************************************************************************************************ -->
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Mercredi  
            <span class="text-xs font-weight-bold">{{ $semaine[2] }}</span>

          </h6>
          
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

              </tr>
            </thead>
            <tbody>
              

            @foreach($tache[2] as $tach)
            @if(isset($tach))  
              
            
              <tr>
                <td>
                  <div class="d-flex px-2">
                    <div>
                      <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                    </div>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{ $tach->id }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $tach->description }}</p>
                </td>
                
                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->dateCreation }}</span>
                </td>

                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->tache_updated_at }}</span>
                </td>

                @if($tach->etat_nom =='terminé')
                
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{ $tach->etat_nom }}</span>
                  </td>
                
                @else
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">{{ $tach->etat_nom }}</span>
                  </td>
                
                @endif

                


                <td class="align-middle">
                  <a href="hr/update-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="hr/delete-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Supprimer
                  </a>
                </td>
      

              </tr>

              @endif
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ************************************************************************************************************ -->
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Jeudi 
            <span class="text-xs font-weight-bold">{{ $semaine[3] }}</span>

          </h6>
          
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

              </tr>
            </thead>
            <tbody>
              

            @foreach($tache[3] as $tach)
              @if(isset($tach))  
              
            
              <tr>
                <td>
                  <div class="d-flex px-2">
                    <div>
                      <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                    </div>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{ $tach->id }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $tach->description }}</p>
                </td>
                
                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->dateCreation }}</span>
                </td>

                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->tache_updated_at }}</span>
                </td>

                @if($tach->etat_nom =='terminé')
                
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{ $tach->etat_nom }}</span>
                  </td>
                
                @else
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">{{ $tach->etat_nom }}</span>
                  </td>
                
                @endif

                


                <td class="align-middle">
                  <a href="hr/update-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="hr/delete-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Supprimer
                  </a>
                </td>
      

              </tr>

              @endif
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ************************************************************************************************************ -->
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Vendredi  
            <span class="text-xs font-weight-bold">{{ $semaine[4] }}</span>
            
          </h6>
          
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

              </tr>
            </thead>
            <tbody>
              

            @foreach($tache[4] as $tach)
            @if(isset($tach))  
              
            
              <tr>
                <td>
                  <div class="d-flex px-2">
                    <div>
                      <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                    </div>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{ $tach->id }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $tach->description }}</p>
                </td>
                
                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->dateCreation }}</span>
                </td>

                <td>
                  <span class="text-xs font-weight-bold">{{ $tach->tache_updated_at }}</span>
                </td>

                @if($tach->etat_nom =='terminé')
                
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{ $tach->etat_nom }}</span>
                  </td>
                
                @else
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">{{ $tach->etat_nom }}</span>
                  </td>
                
                @endif

                


                <td class="align-middle">
                  <a href="hr/update-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="hr/delete-tache/{{ $tach->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Supprimer
                  </a>
                </td>
      

              </tr>

              @endif
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ************************************************************************************************************ -->
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Samedi   
            <span class="text-xs font-weight-bold">{{ $semaine[5] }}</span>

          </h6>
          
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ************************************************************************************************************ -->
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Dimanche
            <span class="text-xs font-weight-bold">{{ $semaine[6] }}</span>

          </h6>
          
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated At</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

              </tr>
            </thead>
            <tbody>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>











</div>

@endsection

@push('custom-scripts')

@endpush