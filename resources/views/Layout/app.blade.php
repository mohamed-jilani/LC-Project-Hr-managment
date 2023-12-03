<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.common-head')
</head>
<body class="g-sidenav-show  bg-gray-200">


    @php

    $userType = Auth::user()->role; 
    //dd(Auth::user());
    //dd($userType);
    @endphp

    @if($userType === "manager")
        @include('Layout.sidebar-manager')
    @elseif($userType === "hr")
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
