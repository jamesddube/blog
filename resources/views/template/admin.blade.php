<! doctype html>
<html>
<head>
    @section('head')
        <title>MyNav</title>
        <link href={{ url('assets/css/bootstrap.cosmo.css') }} rel="stylesheet">
        <link href={{ url('assets/css/intersect.css') }} rel="stylesheet">
        <link rel="stylesheet" href="{{ url('assets/css/animatec920.css') }}"/>
        <link rel="stylesheet" href="{{url('assets/css/font-awesome.css')}}">

        <script src={{ url('assets/js/jquery.min.js') }}></script>
        <script src={{ url('assets/js/bootstrap.js') }}></script>
        <script src={{ url('assets/js/stellar.js') }}></script>

    @show
</head>
<body>
<header class="animated fadeIn " data-stellar-background-ratio="0.3" style="background-image:  url({{ url($article->image_header_url) or 'http://intersect.dev/assets/img/posts/mush.jpg'}})">
    <nav id="nav" class="navbar navbar-default animated fadeIn" role="navigation">
        <div class="container-fluid">
            <a class="navbar-brand brand-title" href="{{ url() }}#">James Dube</a>

            <div class="navbar-header navbar-right">
                <ul class="nav navbar-nav ">
                    <li><a href="{{ url() }}"><strong>Home</strong></a></li>
                    <li><a href="{{ url() }}"><strong>Blog</strong></a></li>
                    <li><a href="{{ url() }}"><strong>Projects</strong></a></li>
                    <li><a href="{{ url('about') }}"><strong>About Me</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('article_title')
</header>
@yield('content')
</body>
</html>
