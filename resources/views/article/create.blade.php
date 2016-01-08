@extends('template.admin')
@section('Title','Create A New Program')
@section('head')
    @parent
    <!-- include libraries(jQuery, bootstrap, fontawesome) -->
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.js') }}"></script>
<script src="{{ url('assets/js/summernote.js') }}"></script>

<link href="{{ url('assets/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ url('assets/css/summernote.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <form class="form-horizontal" method="post" action="{{ url('article') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                <div class="form-group">
                                    <label>Header Image</label>
                                    <input name="image" type="file" class="form-control">
                                </div>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="body" id="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Create Post" class="btn btn-primary">
                        </form>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $('#summernote').summernote();
                        });
                    </script>
                </div>
            </div>

        </div>
    </div>
@endsection
