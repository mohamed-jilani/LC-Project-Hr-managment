@extends('Layout.app')
@section('main-content')

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>Validation des Taches</h1>


      @if (session('status'))
        <div class="alert alert-success alert-dismissible text-white" role="alert">
          <span class="text-sm">{{session('status')}}.</span>
          <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;aaaaa</span>
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

  <!--
  <p>{$tache}}</p>
  -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">
                    Tasks
                </h6>
              </div>
            </div>
            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description de Tache</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date de Creation </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Etat</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>

                  </thead>
                  <tbody>
                        @foreach($taches as $tache)
                            @if( $tache->etat_name == "terminé")  
                            <!--
                                 $tache->tache_user_name
                                 $tache->tache_description
                                 $tache->tache_dateCreation 
                                 $tache->etat_name 
                            -->        
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm"> {{  $tache->tache_user_name }} </h6>
                            </div>

                          </div>
                        </td>
                        
                        <td>
                          <p class="text-sm font-weight-bold mb-0">{{  $tache->tache_description }}</p>
                        </td>
                        
                        <td>
                          <span class="text-xs font-weight-bold">{{  $tache->tache_dateCreation }}</span>
                        </td>



                        @if( $tache->etat_name =='terminé')
                        
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">{{  $tache->etat_name }}</span>
                          </td>
                        @else
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">{{  $tache->etat_name }}</span>
                          </td>
                        
                        @endif


                        <td class="align-middle">
                          <a href="{{ route('validation_tache', ['tacheId' => $tache->tache_id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            validée
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
</div>

@endsection

@push('custom-scripts')

@endpush