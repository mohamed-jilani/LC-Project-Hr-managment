@extends('Layout.app')
@section('main-content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
    /* Custom styles for centering */
    .center-content {
        text-align: center;
        margin-top: 20px; /* Added margin for better spacing */
    }

    /* Custom styles for black borders on form fields */
    .form-container {
        max-width: 400px; /* Set your desired maximum width */
        margin: auto; /* Center the container horizontally */
    }

    .form-field {
        border: 2px solid #000 !important; /* Important to override Bootstrap styles */
        margin-bottom: 15px; /* Added margin for better spacing */
    }

    /* Custom styles for centering buttons */
    .center-buttons {
        text-align: center;
        margin-top: 20px; /* Added margin for better spacing */
    }
</style>

<div class="container">
    <div class="row">
        <div class="col s12">
            <h1 class="center-content">Demande de congés</h1>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible text-white center-content" role="alert">
                    <span class="text-sm">{{ session('status') }}.</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible text-white center-content" role="alert">
                    <span class="text-sm">{{ $error }} </span>
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
    <div class="container center-content form-container">
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control form-field" style="border: 2px solid #000;" id="subject" name="subject" />
        </div>

        <div class="mb-3">
            <label for="dateCreation" class="form-label">Date début de congés</label>
            <input type="date" class="form-control form-field" style="border: 2px solid #000;" id="created_at" name="created_at" />
        </div>

        <div class="mb-3">
            <label for="dateCreation" class="form-label">Date fin de congés</label>
            <input type="date" class="form-control form-field" style="border: 2px solid #000;" id="finished_at" name="finished_at" />
        </div>

        <div class="center-buttons">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </div>
</form>

@endsection

@push('custom-scripts')

@endpush
