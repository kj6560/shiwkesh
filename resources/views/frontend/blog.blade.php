@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Blog</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Blog Posts Section -->
<section id="blog-posts" class="blog-posts section">

    <div class="container">
        <div class="row gy-4">
        @if($blogs->count() > 0)
            @foreach ($blogs as $blog)
            <div class="col-lg-4">
                <article>

                    <div class="post-img">
                        <img src="{{asset('theme')}}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Politics</p>

                    <h2 class="title">
                        <a href="/blogDetails/{{ $blog->slug }}">{{ $blog->title }}</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{asset('theme')}}/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Administrator</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">{{ $blog->created_at->format('M d, Y') }}</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->
            @endforeach
        @else
            <div class="col">
                <article>

                    <div class="post-img">
                        <img src="{{asset('theme')}}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">No Blogs Found</p>

                </article>
            </div><!-- End post list item -->
        @endif
        </div>
    </div>

</section><!-- /Blog Posts Section -->


@endsection