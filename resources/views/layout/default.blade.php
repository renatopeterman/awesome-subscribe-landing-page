<!doctype html>
<html ng-app="rpApp">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Awesome Landing Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('/assets/semantic-ui/dist/semantic.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/app/css/style.css') }}" />

    <!-- JS -->
    <script type="text/javascript" src="{{ url('/assets/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/semantic-ui/dist/semantic.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/angular/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/angular-semantic-ui/dist/angular-semantic-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/angular-animate/angular-animate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/ngFx/dist/ngFx.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/app/js/app.js') }}"></script>

</head>

<body style="padding: 2em">
    @yield('content')
</body>
</html>