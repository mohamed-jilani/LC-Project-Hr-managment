<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.common-head')
</head>
<body class="g-sidenav-show  bg-gray-200">


    @php
    // Suppose $userType est une variable qui contient le type de l'utilisateur connecté
    $userType = Auth::user()->group_id; // Remplace cela par la méthode réelle pour obtenir le type de l'utilisateur
    @endphp

    @if($userType == 1)
        @include('Layout.sidebar-manager')
    @elseif($userType === 2)
        @include('Layout.sidebar-hr')
    @else
        @include('Layout.sidebar')
    @endif

  
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('Layout.header')


        @section('main-content')
        @show

        @include('Layout.footer')

    </main>

    @include('Layout.common-end')
    @stack('custom-scripts')

</body>
</html>
