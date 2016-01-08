<! doctype html>
<html>
<head>
    @section('head')
        <title>MyNav</title>
        <link href={{ url('assets/css/bootstrap.cosmo.css') }} rel="stylesheet">
        <link href={{ url('assets/css/intersect.css') }} rel="stylesheet">
        <link rel="stylesheet" href="{{ url('assets/css/animatec920.css?v=be7554c9c2"') }}"/>
        <link rel="stylesheet" href="{{url('assets/css/font-awesome.css')}}">

        <script src={{ url('assets/js/jquery.min.js') }}></script>
        <script src={{ url('assets/js/bootstrap.js') }}></script>
        <script src={{ url('assets/js/stellar.js') }}></script>
        <script>
            $(document).ready(function(){
                $(window).stellar();
            });
        </script>
    @show
</head>
<body>
@yield('content')
</body>


</html>
