@extends('layouts.landing')
@section('title')
    {{ trans('blog.title.category', ['title' => $category->title]) }}
@endsection
@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Article Catergory</h3>
            <div class="d-inline-flex text-white">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    {{ Breadcrumbs::render('blog_posts_category', $category->title) }}
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        <!-- Post list:start -->
                        @forelse ($posts as $post)
                            <div class="col-lg-6 col-md-12 mb-4 pb-2 post-item">
                                <div class="card blog rounded border-0 shadow">
                                    <div class="position-relative">
                                        <!-- thumbnail:start -->
                                        @if (file_exists(public_path($post->thumbnail)))
                                            <!-- true -->
                                            <img class="card-img-top rounded-top" src="{{ asset($post->thumbnail) }}"
                                                alt="{{ $post->title }}">
                                        @else
                                            <!-- else -->
                                            <img class="img-fluid rounded" src="http://placehold.it/750x300"
                                                alt="{{ $post->title }}">
                                        @endif
                                        <!-- thumbnail:end -->
                                        <div class="overlay rounded-top bg-dark"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="{{ route('blog.posts.detail', ['slug' => $post->slug]) }}"
                                                class="card-title title text-dark">{{ $post->title }}</a></h5>
                                        <p class="text-muted">{{ $post->description }}.. </p>
                                        <div class="post-meta d-flex justify-content-between mt-3 float-right">
                                            <a href="{{ route('blog.posts.detail', ['slug' => $post->slug]) }}"
                                                class="text-muted readmore">Baca
                                                Selengkapnya<i class="mdi mdi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="author"><small class="text-light user d-block"><i
                                                class="mdi mdi-account"></i>
                                            Administrator</small><small class="text-light date"><i
                                                class="mdi mdi-calendar-check"></i>
                                            {{ $post->created_at->format('Y-m-d H:i:s') }}</small></div>
                                </div>
                            </div>

                        @empty
                            <!-- empty -->
                            <h3 class="text-center">
                                {{ trans('blog.no_data.posts') }}
                            </h3>
                        @endforelse
                        <!-- Post list:end -->
                    </div>
                    <!-- pagination:start -->
                    @if ($posts->hasPages())
                        <div class="row">
                            <div class="col">
                                {{ $posts->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                    @endif
                    <!-- pagination:end -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <div id="search-outside">
                                <div class="widget mt-4 pb-2">
                                    <h4 class="widget-title"> {{ trans('blog.widget.categories') }}</h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            @if ($category->slug == $categoryRoot->slug)
                                                {{ $categoryRoot->title }}
                                            @else
                                                <a
                                                    href="{{ route('blog.posts.category', ['slug' => $categoryRoot->slug]) }}">
                                                    {{ $categoryRoot->title }}
                                                </a>
                                            @endif
                                            <!-- category descendants:start -->
                                            @if ($categoryRoot->descendants)
                                                @include('blog.sub-categories', [
                                                    'categoryRoot' => $categoryRoot->descendants,
                                                    'category' => $category,
                                                ])
                                            @endif
                                            <!-- category descendants:end -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
