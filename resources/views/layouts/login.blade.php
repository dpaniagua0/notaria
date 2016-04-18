<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/icons/icomoon/styles.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

   
</head>
<body class="login-container">

    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Core JS files -->
    <script src="{{ URL::asset('js/plugins/loaders/pace.min.js')}}"></script>
    <script src="{{ URL::asset('js/core/libraries/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/core/libraries/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{ URL::asset('js/plugins/ui/nicescroll.min.js')}}"></script>
    <script src="{{ URL::asset('js/plugins/ui/drilldown.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ URL::asset('js/core/app.js')}}"></script>
    <!-- /theme JS files -->

</body>
</html>
