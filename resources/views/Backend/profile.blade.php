@extends('Layout.app')
@section('main-content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Your other head content -->

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .cv-container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        .section-title {
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .education-content,
        .work-content {
            display: flex;
            flex-direction: column;
        }

        .education-item,
        .work-item {
            margin-bottom: 15px;
        }

        p {
            margin: 8px 0;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="cv-container">
        <header>
            <h1>Profil</h1>
        </header>
        <section class="Des données personnels">
            <div class="section-title">
                <h1>Des données personnels</h1>
            </div>
            <div class="education-content">
                @foreach($users as $user)
                    <div class="education-item">
                        <p><strong>Nom:</strong>   {{ $user->user_name  }}</p>
                        <p><strong>Email:</strong> {{ $user->user_email }}</p>
                        <p><strong>Téléphone:</strong> {{ $user->user_phone  }}</p>
                        <p><strong>Adresse:</strong> {{ $user->user_adresse  }}</p>
                        <p><strong>Date d'embauche:</strong> {{ $user->user_hireDate  }}</p>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="education">
            <div class="section-title">
                <h1>Éducation</h1>
            </div>
            <div class="education-content">
                @foreach($users as $user)
                    <div class="education-item">
                        <p><strong>Niveau:</strong> {{ $user->niveau  }}</p>
                        <p><strong>Certification:</strong> {{ $user->certif  }}</p>
                        <p><strong>Année de graduation:</strong> {{ $user->graduationYear  }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="work-experience">
            <div class="section-title">
                <h1>Expérience Professionnelle</h1>
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
            <div class="update-profile-content" style="text-align: right;">
    @foreach($users as $user)
        @if (property_exists($user, 'user_id'))
            <a href="{{ route('profileupdate', ['id' => $user->user_id]) }}"
               style="background-color: #3498db; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; transition: background-color 0.3s ease;"
               onmouseover="this.style.backgroundColor='#2980b9';"
               onmouseout="this.style.backgroundColor='#3498db';"
            >
                Modifier le profil
            </a>
        @else
            <p>Erreur: ID non défini</p>
        @endif
    @endforeach
</div>
        </section>

    </div>

</body>

</html>

@endsection
