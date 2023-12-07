@extends('Layout.app')
@section('main-content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 style="font-family: 'Arial', sans-serif; font-size: 2em; color: #333; text-align: center; margin-bottom: 20px; text-transform: capitalize;">
        Modifier une tâche
      </h1>

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

<form action="/manager/update/traitement" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{$tache->id}}"/>
  <div class="mb-3">
    <label for="description" class="form-label">#ID</label>
    <input type="text" class="form-control" style="border: 2px solid #4deeea;" id="description" name="description" value="{{$tache->id}}" disabled/>
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" style="border: 2px solid #4deeea;" id="description" name="description" value="{{$tache->description}}"/>
  </div>

  

  <br>
  <button type="submit" class="btn btn-primary">Modifier</button>

  <br> 
  <a href="/timesheet_manager" class="btn btn-danger">Revenir à la liste des tâches</a>

</form>

@endsection

@push('custom-scripts')
          
@endpush