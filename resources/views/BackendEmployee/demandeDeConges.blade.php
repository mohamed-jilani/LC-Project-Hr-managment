@extends('Layout.app')
@section('main-content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1>demande de congés</h1>
          
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
    



<form action="/user/ajouterConges/traitement" method="POST">
    @csrf
      <div class="mb-3">
      <label for="subject" class="form-label">Subject</label>
      <input type="text" class="form-control" style="border: 2px solid #4deeea;" id="subject" name="subject"/>
      </div>

      <div class="mb-3">
        <label for="dateCreation" class="form-label">date debut de congés</label>
        <input type="date" class="form-control" style="border: 2px solid #4deeea;" id="created_at" name="created_at" />
        {{--<input type="date" class="form-control" style="border: 2px solid #4deeea;" id="created_at" name="created_at" />--}}
        </div>

      <div class="mb-3">
        <label for="dateCreation" class="form-label">date fin de congés</label>
        <input type="date" class="form-control" style="border: 2px solid #4deeea;" id="finished_at" name="finished_at" />
        {{--<input type="date" class="form-control" style="border: 2px solid #4deeea;" id="finished_at" name="finished_at" />--}}
        </div>
    

  <br>
  <button type="submit" class="btn btn-primary">ajouter</button>
 

</form>

@endsection

@push('custom-scripts')

@endpush
