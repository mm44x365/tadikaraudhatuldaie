@extends('layouts.landing')
@section('title')
    {{ $post->title }}
@endsection
@section('description')
    {{ $post->description }}
@endsection
@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">{{ $post->title }}</h3>
            <div class="d-inline-flex text-white">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    {{ Breadcrumbs::render('blog_posts', $post->title) }}
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card blog blog-detail border-0 shadow rounded">
                        <!-- thumbnail:start -->
                        @if (file_exists(public_path($post->thumbnail)))
                            <!-- true -->
                            <img src="{{ asset($post->thumbnail) }}" class="img-fluid rounded-top"
                                alt="{{ $post->title }}">
                        @else
                            <!-- else -->
                            <img class="img-fluid rounded-top" src="http://placehold.it/750x300" alt="{{ $post->title }}">
                        @endif
                        <!-- thumbnail:end -->
                        <div class="card-body content">
                            <h4>{{ $post->title }}</h4>
                            <h6><i class="mdi mdi-tag text-primary mr-1"></i>
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('blog.posts.tag', ['slug' => $tag->slug]) }}"
                                        class="badge badge-info py-2 px-4 my-1">
                                        #{{ $tag->title }}
                                    </a>
                                @endforeach
                            </h6>

                            <!-- Post Content:start -->
                            <div class="article-style">
                                {!! $post->content !!}
                            </div>
                            <!-- Post Content:end -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <div id="search-outside">
                                <div class="widget mt-4 pb-2">
                                    <h4 class="widget-title"> {{ trans('blog.widget.categories') }}</h4>
                                    @foreach ($post->categories as $category)
                                        <a href="{{ route('blog.posts.category', ['slug' => $category->slug]) }}"
                                            class="badge badge-primary py-2 px-4 my-1">
                                            {{ $category->title }}
                                        </a>
                                    @endforeach
                                    <!-- category list:end -->
                                </div>
                                <div class="widget mt-4 pb-2">
                                    <h4 class="widget-title">{{ trans('blog.widget.tags') }}</h4>
                                    <!-- tag list:start -->
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('blog.posts.tag', ['slug' => $tag->slug]) }}"
                                            class="badge badge-info py-2 px-4 my-1">
                                            #{{ $tag->title }}
                                        </a>
                                    @endforeach
                                    <!-- tag list:end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
