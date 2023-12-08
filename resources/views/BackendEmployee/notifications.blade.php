@extends('Layout.app')
@section('main-content')

  <div class="container-fluid py-4">
    <div class="row">

      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="card mt-4">
          <div class="card-header p-3">
            <h5 class="mb-0">Les Alerts de Notifications</h5>
          </div>
          
          <div class="card-body p-3 pb-0">

            @foreach($notifications as $notification)
              @if($notification->etat_id == 1)  
              <!--'description','dateCreation','dateRealisationFinal','user_id','etat_id','created_at','updated_at' -->              

              <div class="alert alert-info alert-dismissible text-white" role="alert">
                <span class="text-sm">La Tache {{$notification->description}} a été valider par votre Manager, pour le : {{$notification->dateCreation}} ,avec l'etat : en cours  </span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
                @elseif ($notification->etat_id == 2 )
                <div class="alert alert-warning alert-dismissible text-white" role="alert">
                  <span class="text-sm">La Tache {{$notification->description}} a été valider par votre Manager, pour le : {{$notification->dateCreation}} ,avec l'etat : en attente  </span>
                  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                @elseif ($notification->etat_id == 3)
                
                <div class="alert alert-success alert-dismissible text-white" role="alert">
                  <span class="text-sm">La Tache {{$notification->description}} a été valider par votre Manager, pour le : {{$notification->dateCreation}} ,avec l'etat : terminé </span>
                  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              @endif
            @endforeach

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