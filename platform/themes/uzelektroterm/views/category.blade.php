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



                <div class="widget widget-recent-comments">
                    <h3 class="widget-title">Recent Comments</h3>
                    <ul class="img-list circle-img">
                        <li class="clearfix">
                            <img class="img-responsive" src="http://via.placeholder.com/72x72" alt="comment author">
                            <div class="content-wrapper">
                                <h5>Titumir Alam</h5> on <a href="#">Kobita tumi shopno chariny hoye khobor nio na</a>
                                <p>- 2 hours ago</p>
                            </div><!-- .content-wrapper -->
                        </li>
                        <li class="clearfix">
                            <img class="img-responsive" src="http://via.placeholder.com/72x72" alt="comment author">
                            <div class="content-wrapper">
                                <h5>Kasem Bin Bakar</h5> on <a href="#">Einisha chor amay vebona shukher mohona</a>
                                <p>- 2 hours ago</p>
                            </div><!-- .content-wrapper -->
                        </li>
                        <li class="clearfix">
                            <img class="img-responsive" src="http://via.placeholder.com/72x72" alt="comment author">
                            <div class="content-wrapper">
                                <h5>Jesef Abedin</h5> on <a href="#">Dekhbe amader valobasa hoye gese</a>
                                <p>- 2 hours ago</p>
                            </div><!-- .content-wrapper -->
                        </li>
                    </ul>
                </div> <!-- .widget widget-recent-comments -->

                <div class="widget widget-social-links">
                    <h3 class="widget-title">Follow us</h3>
                    <ul>
                        <li class="facebook-link"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter-link"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="google-plus-link"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="youtube-link"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li class="linkedin-link"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div> <!-- .widget widget-social-links -->

                <div class="widget widget-tags">
                    <h3 class="widget-title">Popular Tags</h3>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Social Media</a></li>
                        <li><a href="#">Pink Panther</a></li>
                        <li><a href="#">Marmar</a></li>
                        <li><a href="#">Template</a></li>
                        <li><a href="#">Bootstrap</a></li>
                        <li><a href="#">Laravel</a></li>
                    </ul>
                </div> <!-- .widget widget-tags -->


                <div class="widget widget-testimonial">
                    <h3 class="widget-title">Testimonial Slider</h3>
                    <div class="testimonial-wrapper">
                        <div class="item">
                            <blockquote>
                                Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                <h4>Peter Parker<small>Web Designer</small></h4>
                            </div> <!-- .testimonial-author -->
                        </div> <!-- .item -->
                        <div class="item">
                            <blockquote>
                                Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                <h4>Peter Parker<small>Web Designer</small></h4>
                            </div> <!-- .testimonial-author -->
                        </div> <!-- .item -->
                        <div class="item">
                            <blockquote>
                                Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                <h4>Peter Parker<small>Web Designer</small></h4>
                            </div> <!-- .testimonial-author -->
                        </div> <!-- .item -->
                    </div> <!-- .testimonial-wrapper -->

                </div> <!-- .widget widget-testimonial -->


                <div class="widget widget-tweets">
                    <h3 class="widget-title">Recent Tweets</h3>
                    <ul>
                        <li class="clearfix">
                            <div class="twitter-icon"><i class="fa fa-twitter"></i> </div>
                            <div class="tweet-wrapper">
                                <p>
                                    <a class="twitter-id" href="">@Corporex</a>Lorem ipsum dolor sit amet adipisicing elit, sed do eiusmod
                                    tempor inci <a href="#">https://bit.ly/7sdSdfds</a>
                                </p>
                                <span>-2 hours ago</span>
                            </div> <!-- .tweet-wrapper -->
                        </li>
                        <li class="clearfix">
                            <div class="twitter-icon"><i class="fa fa-twitter"></i> </div>
                            <div class="tweet-wrapper">
                                <p>
                                    <a class="twitter-id" href="">@Corporex</a>Lorem ipsum dolor sit amet adipisicing elit, sed do eiusmod
                                    tempor inci <a href="#">https://bit.ly/7sdSdfds</a>
                                </p>
                                <span>-2 hours ago</span>
                            </div> <!-- .tweet-wrapper -->
                        </li>
                        <li class="clearfix">
                            <div class="twitter-icon"><i class="fa fa-twitter"></i> </div>
                            <div class="tweet-wrapper">
                                <p>
                                    <a class="twitter-id" href="">@Corporex</a>Lorem ipsum dolor sit amet adipisicing elit, sed do eiusmod
                                    tempor inci <a href="#">https://bit.ly/7sdSdfds</a>
                                </p>
                                <span>-2 hours ago</span>
                            </div> <!-- .tweet-wrapper -->
                        </li>
                    </ul>
                </div> <!-- .widget widget-tweets -->

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

