@extends('Layout.app')
@section('main-content')


<div class="container-fluid py-4">


  <div class="row">
    <div class="col-md-7 mt-4">
      <div class="card">
        
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Liste des Demandes</h6>
        </div>

        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Congés</h6>
                <span class="mb-2 text-xs">Raison: <span class="text-dark font-weight-bold ms-sm-2">--------------</span></span>
                <span class="mb-2 text-xs">depuis: <span class="text-dark ms-sm-2 font-weight-bold">-- -- ----</span></span>
                <span class="mb-2 text-xs">jusqu'à: <span class="text-dark ms-sm-2 font-weight-bold">-- -- ----</span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Congés</h6>
                <span class="mb-2 text-xs">Raison: <span class="text-dark font-weight-bold ms-sm-2">--------------</span></span>
                <span class="mb-2 text-xs">depuis: <span class="text-dark ms-sm-2 font-weight-bold">-- -- ----</span></span>
                <span class="mb-2 text-xs">jusqu'à: <span class="text-dark ms-sm-2 font-weight-bold">-- -- ----</span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Congés</h6>
                <span class="mb-2 text-xs">Raison: <span class="text-dark font-weight-bold ms-sm-2">--------------</span></span>
                <span class="mb-2 text-xs">depuis: <span class="text-dark ms-sm-2 font-weight-bold">-- -- ----</span></span>
                <span class="mb-2 text-xs">jusqu'à: <span class="text-dark ms-sm-2 font-weight-bold">-- -- ----</span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </div>


    <div class="col-md-5 mt-4">
      <div class="card h-100 mb-4">
        <div class="card-header pb-0 px-3">
          <div class="row">
            <div class="col-md-6">
              <h6 class="mb-0">Historique des Demandes</h6>
            </div>

            <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
              <i class="material-icons me-2 text-lg">date_range</i>
              <small>23 - 30 March 2020</small>
            </div>
          </div>
        </div>


        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_more</i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Demande non Acceptée</h6>
                  <span class="text-xs">de 27-12-2020, à 27-01-2021</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                Non payé
              </div>
            </li>

            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Demande non Acceptée</h6>
                  <span class="text-xs">de 27-12-2020, à 03-01-2021</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                Payé
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  
</div>


@endsection

@push('custom-scripts')

@endpush