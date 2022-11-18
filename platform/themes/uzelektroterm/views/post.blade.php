@php
    Theme::set('section-name', $post->name);
    $post->loadMissing('metadata');

    $bannerImage = $post->getMetaData('banner_image', true);

    if ($bannerImage) {
        Theme::set('breadcrumbBannerImage', RvMedia::getImageUrl($bannerImage));
    }
@endphp

<section class="blog-section page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 single-post">
                <div class="post-wrapper post-standard">
                    <div class="image-wrapper">
                        <img class="img-responsive" src="{!! RvMedia::getImageUrl($post->image, 'large', false, RvMedia::getDefaultImage()) !!}" alt="blog image 01">
                    </div> <!-- .image-wrapper -->
                    <div class="post-content">
                        <h2 class="entry-title">{{ $post->name }}</h2>
                        <ul class="post-meta">
                            <li><i class="fa fa-clock-o"></i>{{ $post->created_at->translatedFormat('d.F.y') }}</li>
                        </ul>
                        <div class="entry-content">
                            {!! clean($post->content) !!}
                        </div> <!-- .entry-content -->
                    </div> <!-- .post-content -->
                    <div class="post-bottom clearfix">
                        <div class="share-block">
                            <h4>Share</h4>
                            <ul class="social-share social-icons">
                                <li class="facebook-link"><a class="icon-box" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter-link"><a class="icon-box" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus-link"><a class="icon-box" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin-link"><a class="icon-box" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- .share-block -->
                        <div class="tag-block">
                            <h4>Tags</h4>
                            <ul class="tag-list">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Facebook</a></li>
                            </ul>
                        </div> <!-- .tag-block -->
                    </div> <!-- .post-bottom -->
                </div> <!-- .post-wrapper post-overlay -->

            </div> <!-- .col-md-8 -->
            <div class="col-md-4 sidebar" style="display:none;">
                <div class="widget widget-search">
                    <h3 class="widget-title">Search</h3>
                    <form>
                        <input class="form-control" type="search" name="search-box" id="search-box" placeholder="Search ..">
                        <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div> <!-- .widget widget-search -->
                <div class="widget widget-recent-posts">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul class="img-list">
                        <li class="clearfix">
                            <img class="img-responsive" src="http://via.placeholder.com/84x84" alt="post thumbnail">
                            <div class="content-wrapper">
                                <h4><a href="#">Lorem ipsum dolor sit amet cone ctetur adaborum</a></h4>
                                <p>Oct 18, 2017</p>
                            </div> <!-- .content-wrapper -->
                        </li>
                        <li class="clearfix">
                            <img class="img-responsive" src="http://via.placeholder.com/84x84" alt="post thumbnail">
                            <div class="content-wrapper">
                                <h4><a href="#">Lorem ipsum dolor sit amet cone ctetur adaborum</a></h4>
                                <p>Oct 18, 2017</p>
                            </div> <!-- .content-wrapper -->
                        </li>
                        <li class="clearfix">
                            <img class="img-responsive" src="http://via.placeholder.com/84x84" alt="post thumbnail">
                            <div class="content-wrapper">
                                <h4><a href="#">Lorem ipsum dolor sit amet cone ctetur adaborum</a></h4>
                                <p>Oct 18, 2017</p>
                            </div> <!-- .content-wrapper -->
                        </li>
                    </ul>
                </div><!-- .widget widget-recent-posts -->
                <div class="widget widget-category">
                    <h3 class="widget-title">Post Category</h3>
                    <ul class="link-list">
                        <li><a href="#">Website Design</a></li>
                        <li><a href="#">Corporate &amp; Finance</a></li>
                        <li><a href="#">Business Strategy</a></li>
                        <li><a href="#">Market Research</a></li>
                        <li><a href="#">Mobile Application</a></li>
                        <li><a href="#">Social Sceince</a></li>
                        <li><a href="#">Financial Planning</a></li>
                        <li><a href="#">Online Marketing</a></li>
                        <li><a href="#">User Interface</a></li>
                    </ul>
                </div> <!-- .widget widget-post-category -->

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
                    <div class="testimonial-wrapper slick-initialized slick-slider"><div class="slick-btn prev-btn slick-arrow" style=""><i class="fa fa-chevron-left"></i></div>
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2415px; transform: translate3d(-345px, 0px, 0px);"><div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 345px;">
                                    <blockquote>
                                        Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                        <h4>Peter Parker<small>Web Designer</small></h4>
                                    </div> <!-- .testimonial-author -->
                                </div><div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 345px;">
                                    <blockquote>
                                        Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                        <h4>Peter Parker<small>Web Designer</small></h4>
                                    </div> <!-- .testimonial-author -->
                                </div><div class="item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 345px;">
                                    <blockquote>
                                        Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                        <h4>Peter Parker<small>Web Designer</small></h4>
                                    </div> <!-- .testimonial-author -->
                                </div><div class="item slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 345px;">
                                    <blockquote>
                                        Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                        <h4>Peter Parker<small>Web Designer</small></h4>
                                    </div> <!-- .testimonial-author -->
                                </div><div class="item slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 345px;">
                                    <blockquote>
                                        Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                        <h4>Peter Parker<small>Web Designer</small></h4>
                                    </div> <!-- .testimonial-author -->
                                </div><div class="item slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 345px;">
                                    <blockquote>
                                        Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                        <h4>Peter Parker<small>Web Designer</small></h4>
                                    </div> <!-- .testimonial-author -->
                                </div><div class="item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 345px;">
                                    <blockquote>
                                        Cras at mauris iaculis orci ultricies rutrum ac eu mi. Etiam euismod tortor neque, et dignissim metus blandit non. Maecenas viverra ante sapien, vitae ule, elit sit amet faucibus iaculis, eros nisl tristique purus vitae purus. Mauris at dolor ut tellus ultricies nibh feugiat tortor euismod varius.
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/48x48" alt="quote author"></div>
                                        <h4>Peter Parker<small>Web Designer</small></h4>
                                    </div> <!-- .testimonial-author -->
                                </div></div></div> <!-- .item -->
                        <!-- .item -->
                        <!-- .item -->
                        <div class="slick-btn next-btn slick-arrow" style=""><i class="fa fa-chevron-right"></i></div></div> <!-- .testimonial-wrapper -->

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

            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</section>

<section id="body-content" class="blog-section blog-post-01 page-content" style="display: none">

        <div class="container">
            <div class="row pad-top">
                <div class="col-md-12 col-lg-8">
                    <div class="sidebar-padding-right">
                        <div class="blog-list">
                            <div class="blog-img">
                                <img src="{!! RvMedia::getImageUrl($post->image, 'large', false, RvMedia::getDefaultImage()) !!}" alt="{{ $post->name }}">
                            </div>
                            <div class="blog-text d-sm-flex">

                                <div class="blog-details">
                                    <div class="meta-box-wrap col-auto pl-0 mb-3">
                                        <a href="#" class="post-date"><i class="icofont icofont-calendar"></i>{{ $post->created_at->translatedFormat('d.F.y') }}</a>
                                    </div>
                                    <h2 class="h2-xl txt-orange mb-3">{{ $post->name }}</h2>
                                    <p>{!! clean($post->content) !!}</p>
                                    @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
                                        {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (!$post->tags->isEmpty())
                        @php
                            if (is_plugin_active('language-advanced')) {
                                $post->tags->loadMissing('translations');
                            }
                        @endphp
                        <span class="post__tags"><i class="ion-pricetags"></i>
                    @foreach ($post->tags as $tag)
                                <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                            @endforeach
                </span>
                    @endif
                </div>
                <!-- Sidebar Left Start -->
                <div class="col-md-12 col-lg-4 sidebar-left single-right">
                    <aside class="sidebar-spacer row">
                        {!! dynamic_sidebar('primary_sidebar') !!}
                    </aside>
                </div><!-- Sidebar Left End -->
            </div>
        </div>


</section>
