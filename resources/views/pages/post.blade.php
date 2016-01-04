@extends('template.main')
@section('content')
    <header class="animated fadeIn" style="background-image: url({{ $post->image_header_url }})">
        <div class="container" data-stellar-ratio="0.75">
            <div class="title animated fadeInUp">
                <h1>{{ $post->title }}</h1>

                <div class="share">
                    Share this on <a id="twitter"
                                     href="http://twitter.com/share?text=Hyper%20Fast%20API%20Using%20Elixir%20%26%20Phoenix&amp;url=http://blog.kettle.io/network-api-using-elixir-phoenix-and-mysql/">Twitter</a>
                    or <a id="facebook"
                          href="https://www.facebook.com/sharer/sharer.php?u=http://blog.kettle.io/network-api-using-elixir-phoenix-and-mysql/">Facebook</a>.
                </div>
            </div>
            <div class="sidebar text-right meta">
                <div class="published animated fadeInUp">
                    <strong>Published</strong>
                    <time datetime="2015-10-01">{{ $post->created_at}}</time>
                </div>
                <span class="separator animated fadeInUp">//</span>

                <div class="tags animated fadeInUp">
                </div>
            </div>
        </div>
    </header>

    <div class="push-article">

        <article class="animated fadeIn post">
            <div class="container">
                {!!  $post->body !!}
            </div>
        </article>

    </div>

    <div class="container">
        <div id="disqus_thread"></div>
    </div>

</div>
@endsection
