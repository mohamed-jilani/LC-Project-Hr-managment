@extends('Layout.app')
@section('main-content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
    /* Custom styles for title centering */
    .center-title {
        text-align: center;
    }

    /* Custom styles for button centering */
    .center-buttons {
        text-align: center;
    }

    /* Custom styles for black borders on form fields */
    .form-field {
        border: 2px solid #000 !important; /* Important to override Bootstrap styles */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="center-title">Ajouter une tache</h1>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible text-white" role="alert">
                    <span class="text-sm">{{ session('status') }}.</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                    <span class="text-sm">{{ $error }}</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/manager/ajouter/traitementn" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control form-field" style="border: 2px solid #000;" id="description" name="description" />
                </div>

                <select class="form-select form-field" name="etat_id" style="border: 2px solid #000;" aria-label="État">
                    <option value="" selected>Choisissez un état</option>
                    @foreach ($etats as $etat)
                        <option value="{{ $etat->id }}">{{ $etat->nom }}</option>
                    @endforeach
                </select>

                <div class="mb-3">
                    <label for="dateCreation" class="form-label">created at</label>
                    <input type="text" class="form-control form-field" style="border: 2px solid #000;" id="dateCreation" name="dateCreation" value="{{ now()->format('Y-m-d') }}" disabled />
                </div>

                <div class="text-center"> <!-- Center the buttons and reduce the margin between them -->
                    <button type="submit" class="btn btn-primary">ajouter</button>
                    <a href="/timesheet_manager" class="btn btn-primary">Revenir à liste des taches</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('custom-scripts')

@endpush
