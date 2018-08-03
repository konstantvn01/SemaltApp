<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <title>All Tasks</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>



</head>
<body >
<style>
    h4{ color:#6200ea;
        font-weight: bold;}
    h5,h6{
        color:#01579b ;
    }

</style>

@include('layouts.nav')
<main>
    <div class="nav-menu row" style="height: 100%; color:#4a148c;">
    @include('layouts.leftnavigation')
        <div class="col l9 m9 s12" style="min-height: 168.4vh">
        @yield('content')
        </div>
    </div>

</main>

@include('layouts.footer')



<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>



</body>
</html>