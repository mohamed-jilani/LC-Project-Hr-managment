@extends('Layout.app')
@section('main-content')



<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>ajouter une tache</h1>
      
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

              
          



          <form action="/user/update/traitement" method="POST">
            @csrf
            <input type="text"  name="id" style="display: none;" value="{{$tache->id}}"/>            
            <div class="mb-3">
              <label for="description" class="form-label">#ID</label>
              <input type="text" class="form-control" style="border: 2px solid #4deeea;" id="description" name="description" value="{{$tache->id}}" aria-label="Disabled input example" disabled/>
              </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control" style="border: 2px solid #4deeea;" id="description" name="description" value="{{$tache->description}}"/>
              </div>

        
              <select class="form-select" name="etat_id" style="border: 2px solid #4deeea;" aria-label="État">
                <option value="" selected>Choisissez un état</option>
                @foreach ($etats as $etat)
                    <option value="{{ $etat->id }}">{{ $etat->nom }}</option>
                @endforeach
              </select>
            
        
          <br>
          <button type="submit" class="btn btn-primary">modifier</button>

          <br> 
          <a href="/timesheet" class="btn btn-danger"> Revenir à liste des taches</a>
        
        </form>


@endsection

@push('custom-scripts')
          
@endpush