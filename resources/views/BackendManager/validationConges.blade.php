@extends('Layout.app')
@section('main-content')

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>Validation des Congés</h1>


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
                    les demandes de congés de votre equipe
                </h6>
              </div>
            </div>
            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">subject de congés</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date de debut de congés </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">date fin de congés</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>

                  </thead>
                  <tbody>
                        @foreach($taches as $tache)
                              
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
                        <td>
                          <span class="text-xs font-weight-bold">{{  $tache->tache_datefinish }}</span>
                        </td>


                        


                        <td class="align-middle">
                          <a href="{{ route('validationco', ['tacheId' => $tache->tache_id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            valider
                          </a>
                        </td>
                        <td class="align-middle">
                          <a href="{{ route('validationcr', ['tacheId' => $tache->tache_id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            refuser
                          </a>
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

@endsection

@push('custom-scripts')

@endpush