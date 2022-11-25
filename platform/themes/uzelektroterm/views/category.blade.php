@php Theme::set('section-name', $category->name) @endphp
<section class="blog-section blog-post-02 page-content">
    <div class="container">

        <div class="row">
            <div class="col-md-8 blog-posts">

                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                <div class="post-wrapper post-split clearfix">
                    <div class="image-wrapper">
                        <img class="img-responsive" src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="blog image">
                    </div> <!-- .image-wrapper -->
                    <div class="post-content">
                        <ul class="post-meta">
                            <li>{{ $post->created_at->translatedFormat('d.M.Y') }}</li>
                        </ul>
                        <h3 class="entry-title"><a href="{{ $post->url }}">{{ $post->name }}</a></h3>
{{--                        <div class="entry-content">--}}
{{--                            <p>--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
{{--                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
{{--                                quis nostrud exercitation ullamco laboris nisi ut aliquip pagla hauar tore ...--}}
{{--                            </p>--}}
{{--                        </div> <!-- .entry-content -->--}}
{{--                        <a class="btn btn-main" href="#">Read More</a>--}}
                    </div> <!-- .post-content -->
                </div> <!-- .post-wrapper split-post -->
                    @endforeach
                @else
                    <div class="alert alert-warning">
                        <p>{{ __('There is no data to display!') }}</p>
                    </div>
                @endif


                <div class="pagination-block text-center">
                    {!! $posts->links() !!}
                </div> <!-- .btn-container -->
            </div> <!-- .col-md-8 -->
            <div class="col-md-4 sidebar">
                {!! dynamic_sidebar('primary_sidebar') !!}
            </div> <!-- .col-md-4 -->
        </div> <!-- .row -->
    </div> <!-- .container -->
</section> <!-- .portfolio-section -->
<div class="tm-section blogs-area bg-white tm-padding-section" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="tm-blog-list sticky-sidebar">
                    <div class="row mt-30-reverse blog-masonry-active">

                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                        <div class="col-lg-6 col-md-6 col-12 mt-30 blog-masonry-item">
                            <div class="blog-slider-item">
                                <div class="tm-blog wow fadeInUp">
                                    <div class="tm-blog-image">
                                        <a href="{{ $post->url }}">
                                            <figure><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="tm-blog-content">
                                        <div class="tm-blog-meta">
                                            @if ($post->author->username)
                                                <span><i class="fa fa-user-o"></i>{{ $post->author->name }}</span>
                                         @endif
                                               <span><i class="fa fa-calendar-o"></i>{{ $post->created_at->translatedFormat('d.M.Y') }}</span>
                                        </div>
                                        <h5><a href="{{ $post->url }}">{{ $post->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @else
                            <div class="alert alert-warning">
                                <p>{{ __('There is no data to display!') }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="tm-pagination mt-50">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="widgets sidebar-widgets sticky-sidebar">
                    {!! dynamic_sidebar('primary_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</div>

