<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <!-- Core CSS -->
        <link href="/css/project.css" rel="stylesheet">

        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

        {{--<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>--}}

        {{--<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">--}}
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}

        {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">--}}

        <!-- jquery validation -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />

        <script type="text/javascript" src="/js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="/js/jquery.validate.js"></script>



        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <!--Italy map style -->
        {{--<link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />--}}
        {{--<link rel="stylesheet" type="text/css" href="/css/cssmap-italy.css" media="screen" />--}}

        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>--}}

    </head>
    <body>

@yield('content')

        {{--<script src="/js/jquery.min.js"></script>--}}
        {{--<script src="/js/bootstrap.min.js"></script>--}}

        <!-- START Page Custom Script-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="/js/jquery.gmap.min.js"></script>
        <script src="/js/jquery.rippler.min.js"></script>
        <script src="/js/jquery.swipebox.min.js"></script>

        <!-- END Page Custom Script-->

        <!-- App Main-->
        {{--<script src="/js/app.js"></script>--}}
        <script src="/js/step1.js"></script>
        <!-- END Scripts-->
        <!-- italy map js -->
        {{--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>--}}
        {{--<script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>--}}
        {{--<script type="text/javascript" src="/js/script.js"></script>--}}
        {{--<script type="text/javascript" src="/js/jquery.cssmap.min.js"></script>--}}
    </body>
</html>