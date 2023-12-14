@extends('Layout.app')
@section('main-content')

<div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
          @foreach($users as $user)
            <div class="h-100">
              <h5 class="mb-1">
              {{$user->user_name}}
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
              {{ $user->statut }}
              </p>
            </div>
            @endforeach
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                
                
                
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Equipe</h6>
                </div>
                <div class="card-body p-3">
                 
                <div class="section-title">
                
            </div>
            <div class="work-content">
                @forelse($users as $user)
                    <div class="work-item">
                        <p><strong>Statut:</strong> {{ $user->statut }}</p>
                        <p><strong>Salaire:</strong> {{ $user->salary  }}</p>
                        <p><strong>Groupe:</strong> {{ $user->groupname  }}</p>
                        <p><strong>Département:</strong> {{ $user->departementname  }}</p>
                    </div>
                @empty
                    <p>Aucune donnée disponible</p>
                @endforelse
            </div>
                  
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Profile Information</h6>
                    </div>
                    @foreach($users as $user)
                    <div class="col-md-4 text-end">
                      <form action="/hr/updateprofileRH" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->user_id}}"/>
                        <button type="submit" class="btn btn-primary">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                        </button>
                      </form>
                      {{-- 
                      <a href="{{ route('profileupdateHR', ['id' => $user->user_id]) }}">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                      </a>
                      --}}
                    </div>
                    @endforeach
                  </div>
                </div>
                @foreach($users as $user)
                <div class="card-body p-3">
                  <p class="text-sm">
                  
                  Hi, {{$user->user_name}}  Thank you for joining us ! Your time and attention are truly appreciated
                  </p>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nom et Prénom:</strong> &nbsp; {{ $user->user_name  }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Téléphone:</strong> &nbsp; {{ $user->user_phone  }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $user->user_email }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Adresse:</strong> &nbsp; {{ $user->user_adresse  }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Date d'embauche:</strong> &nbsp; {{ $user->user_hireDate  }}</li>
                    
                    
                  </ul>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Éducation</h6>
                </div>
                @foreach($users as $user)
                <div class="card-body p-3">
                  
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Niveau:</strong> &nbsp; {{ $user->niveau  }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Certification:</strong> &nbsp; {{ $user->certif  }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Année de graduation:</strong> &nbsp; {{ $user->graduationYear  }}</li>
                    
                    
                    
                    
                  </ul>
                </div>
                @endforeach
              </div>
              </div>
            </div>
            <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h6 class="mb-1">Projects</h6>
                
              </div>
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        
                      </a>
                    </div>
                    @foreach($users as $user)
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project {{ $user->nomprojet }}</p>
                      <a href="javascript:;">
                        
                      </a>
                      <p class="mb-4 text-sm">
                      {{ $user->descprojet }}
                      </p>
                      <p class="mb-4 text-sm">
                      {{ $user->limiteprojet }}
                      </p>
                     
                    </div>
                    @endforeach
                  </div>
                </div>
                
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@push('custom-scripts')

@endpush