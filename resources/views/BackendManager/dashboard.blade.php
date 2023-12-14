
@extends('Layout.app')
@section('main-content')


    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">


          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">taille de l'équipe</p>
                <h4 class="mb-0">{{$nb_Emp}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>

              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Tache Terminé</p>
                <h4 class="mb-0">{{$tache_t}}</h4>
              </div>

            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Taches en Cours</p>
                <h4 class="mb-0">{{$tache_enC}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>

              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Taches en Attente</p>
                <h4 class="mb-0">{{$tache_enA}}</h4>
              </div>

            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>


        </div>
      </div>

{{--      
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Website Views</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
--}}

      <div class="row mt-4">
      </div>
      <div class="row mt-4">
      </div>

      <div class="row mb-4">

        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Les Taches en Cours</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="/manager/validation">Validation des Taches</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USER NAME</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DESCRIPTION DE TACHE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE DE CREATION</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ETAT</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($taches as $tache)
                      @if( $tache->etat_name != "terminé")  
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

                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">{{  $tache->etat_name }}</span>
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



        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Les Taches Terminé</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>

                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="/manager/validation">Validation des Taches</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                                            
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USER NAME</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DESCRIPTION DE TACHE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE DE CREATION</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ETAT</th>
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

                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">{{  $tache->etat_name }}</span>
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

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="card mt-4" style="display: none;">  
            <div class="card-header p-3">
              <h5 class="mb-0">Notifications</h5>
              <p class="text-sm mb-0">
                Notifications on this page use Toasts from Bootstrap. Read more details <a href="https://getbootstrap.com/docs/5.0/components/toasts/" target="">here</a>.
              </p>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                  <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button" data-target="infoToast">Info</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="position-fixed bottom-1 end-1 z-index-2">
        <div class="toast fade hide p-2 mt-2 bg-gradient-info" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
          <div class="toast-header bg-transparent border-0">
            <i class="material-icons text-white me-2">notifications</i>
            <span class="me-auto text-white font-weight-bold">LucidusCursus</span>
            <small class="text-white">1 mins ago</small>
            <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal light m-0">
          <div class="toast-body text-white">
            De nouvelles taches ont été ajoutées à votre group.
          </div>
        </div>
      </div>
    </div>
  
  @endsection
  @push('custom-scripts')
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script>
    $(document).ready(function() {
        // Sélectionnez tous les boutons avec la classe toast-btn
        $('.toast-btn').each(function() {
            // Obtenez la valeur de l'attribut data-target pour obtenir l'ID de la notification correspondante
            var targetId = $(this).data('target');
  
            // Utilisez cette ID pour déclencher un clic sur le bouton correspondant
            $('#' + targetId).toast('show');
        });
    });
  </script>
  
  @endpush