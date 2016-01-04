@extends('template.main')
@section('content')
@if( count($posts)> 0)
        <!-- Start of Article -->
@foreach($posts as $article)
    <div class="sample animated fadeIn">
        <div class="container">
            <div class="title animated fadeInUp">
                <a href="{{ url('post/'.$article->slug) }}">
                    <h1>{{ $article->title }}</h1>
                </a>
            </div>
            <div class="sidebar text-right meta">
                <div class="published animated fadeInUp">
                    <strong>Published</strong>
                    <time datetime="2015-10-01">{{ $article->created_at }}</time>
                </div>
                <span class="separator animated fadeInUp">//</span>
                <div class="tags animated fadeInUp">
                </div>
            </div>
        </div>
    </div>

    <article class="excerpt animated fadeIn post">
        <div class="container">
            <p>{!! $article->body !!}</p>
        </div>
    </article>
    @endforeach

            <!-- End of Article -->
    @endif

    <nav class="pagination" role="navigation">
        <span class="page-number">{!! $posts->render() !!}</span>
        <a class="older-posts" href="page/2/index.html">Older Posts &rarr;</a>
    </nav>

    </div>
    @endsection
