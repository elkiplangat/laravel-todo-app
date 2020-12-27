
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') - ToDo Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">

    <!-- Boomerang CSS (including Bootstrap) -->
    <link type="text/css" href="{{asset('assets/css/theme.css')}}" rel="stylesheet">
</head>
<body>
@include('layouts.navbar')
<main class="main container">

    @yield('content')


</main>

<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- FontAwesome 5 -->
<script src="{{asset('assets/vendor/fontawesome/js/fontawesome-all.min.js')}}"></script>

<!-- Boomerang JS -->
<script src="{{asset('assets/js/theme.js')}}"></script>
</body>
</html>
