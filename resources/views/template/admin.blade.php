<! doctype html>
<html>
<head>
    @section('head')
    <title>MyNav</title>
    <link href={{ url('assets/bootstrap/css/bootstrap.cosmo.css') }} rel="stylesheet">
    @show
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url() }}#">Intersect</a>

        <div class="navbar-header navbar-right">
            <ul class="nav navbar-nav ">
                <li><a href="{{ url() }}">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Subjects<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('admin/posts/create') }}">Add New Post</a></li>
                        <li><a href="{{ url('admin/posts') }}">View Posts</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programs<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('admin/programs/create') }}">Add New Program</a></li>
                        <li><a href="{{ url('admin/programs') }}">View Programs</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ url('about') }}">About</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-6">
                <h4>@yield('Title')</h4>
            </div>

        </div>
        <hr>

        @yield('content')
    </div>
</div>

</body>

<script src={{ url('assets/js/bootstrap.min.js') }}></script>
</html>