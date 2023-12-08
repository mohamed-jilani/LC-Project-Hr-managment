@extends('Layout.app')

@section('main-content')
<div class="container mx-auto mt-8">
    <div class="row">
        <div class="col s12">
            <h1 class="text-3xl font-bold mb-6">Modifier vos coordonnées</h1>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible bg-green-500 text-white py-3 px-4 rounded-md mb-4" role="alert">
                    <span class="text-sm">{{ session('status') }}.</span>
                    <button type="button" class="btn-close text-lg opacity-75" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible bg-red-500 text-white py-3 px-4 rounded-md mb-4" role="alert">
                    <span class="text-sm">{{ $error }}</span>
                    <button type="button" class="btn-close text-lg opacity-75" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        </div>
    </div>

    <form action="/manager/updateProfiletrait" method="POST">
        @csrf

        <div class="mb-4">
            <label for="adresse" class="block text-sm font-medium text-gray-600">Address:</label>
            <input type="text" name="adresse" value="{{ old('adresse', Auth::user()->adresse) }}" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-600">Phone:</label>
            <input type="text" name="phone" value="{{ old('phone', Auth::user()->phone) }}" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <button type="submit" class="bg-blue-500 text-black py-2 px-4 rounded-md">Update Profile</button>
    </form>
</div>
@endsection

@push('custom-scripts')

@endpush
