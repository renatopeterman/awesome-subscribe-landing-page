<!doctype html>
<html ng-app="rpAppLogin">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RP Lumen App</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ url('/assets/semantic-ui/dist/semantic.min.css') }}" />
        <link rel="stylesheet" href="{{ url('/assets/angular-inform/dist/angular-inform.min.css') }}" />
        <link rel="stylesheet" href="{{ url('/assets/angular-loading-bar/build/loading-bar.min.css') }}" />
        <link rel="stylesheet" href="{{ url('/assets/datatables/media/css/jquery.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ url('/assets/ng-notifications-bar/dist/ngNotificationsBar.min.css') }}" />
        <!-- <link rel="stylesheet" href="{{ url('/assets/font-awesome/css/font-awesome.min.css') }}" /> -->
        <link rel="stylesheet" href="{{ url('/app/css/style.login.css') }}" />

        <!-- JS -->
        <script type="text/javascript" src="{{ url('/assets/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/semantic-ui/dist/semantic.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/momentjs/min/moment-with-locales.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/datatables/media/js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular/angular.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular-animate/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular-resource/angular-resource.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular-route/angular-route.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular-sanitize/angular-sanitize.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular-datatables/dist/angular-datatables.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular-inform/dist/angular-inform.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/angular-loading-bar/build/loading-bar.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/ng-notifications-bar/dist/ngNotificationsBar.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/gsap/src/minified/TweenMax.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/ngFx/dist/ngFx.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/app/js/app.login.js') }}"></script>

    </head>

    <body style="padding: 2em">
        <div class="ui page grid">
            @yield('content')
        </div>
    </body>
</html>