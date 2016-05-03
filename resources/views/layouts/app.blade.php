<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notaria</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/icons/icomoon/styles.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

   
</head>
<body>
    @include('layouts.navbar')

    @include('layouts.navbar2nd')

    @include('layouts.pageheader')

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
    <script type="text/javascript" src="{{ URL::asset('js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/pickers/daterangepicker.js')}}"></script>



    <script type="text/javascript" src="{{ URL::asset('js/core/libraries/jquery_ui/core.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/core/libraries/jquery_ui/widgets.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/core/libraries/jquery_ui/effects.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/core/libraries/select2.full.min.js')}}"></script>


    <script type="text/javascript" src="{{ URL::asset('js/plugins/forms/wizards/steps.min.js')}}"></script>
  
   <!-- <script type="text/javascript" src="{{ URL::asset('js/core/libraries/jquery_ui/globalize/globalize.js')}}"></script
    <script type="text/javascript" src="{{ URL::asset('js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.es-ES.js')}}"></script>
  -->
    <script type="text/javascript" src="{{ URL::asset('js/plugins/forms/styling/switchery.min.js')}}"></script>
    
   

    <script type="text/javascript" src="{{ URL::asset('js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/pages/jqueryui_forms.js')}}"></script>

   
    
    <!-- /theme JS files -->

    @yield('app-js')

</body>
</html>
