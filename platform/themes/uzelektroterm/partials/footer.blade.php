<footer class="site-footer">
    <div class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                    <p> {!! theme_option('address') !!}</p>
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="icon-box"><i class="fa fa-phone"></i></div>
                    <a href="#">{!! theme_option('phone') !!}</a>
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="icon-box"><i class="fa fa-envelope"></i></div>
                    <a href="#">{!! theme_option('email') !!}</a>
                </div> <!-- .col-md-4 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
    <div class="footer-blocks">
        {!! dynamic_sidebar('footer_sidebar_1') !!}
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-about">
                    <h3 class="widget-title">About Us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consec tetur adipisi cing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis exer aliquip.
                    </p>
                    <ul class="list-inline footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul> <!-- .footer-social -->
                </div> <!-- col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 widget widget-gallery">
                    <h3 class="widget-title">Gallery</h3>

                    <ul class="list-inline photo-gallery footer-gallery clearfix">
                        <li><a class="gallery-img" href="http://via.placeholder.com/570x570"><img class="img-responsive" src="http://via.placeholder.com/570x570" alt="gallery photo"></a></li>
                        <li><a class="gallery-img" href="http://via.placeholder.com/570x570"><img class="img-responsive" src="http://via.placeholder.com/570x570" alt="gallery photo"></a></li>
                        <li><a class="gallery-img" href="http://via.placeholder.com/570x570"><img class="img-responsive" src="http://via.placeholder.com/570x570" alt="gallery photo"></a></li>
                        <li><a class="gallery-img" href="http://via.placeholder.com/570x570"><img class="img-responsive" src="http://via.placeholder.com/570x570" alt="gallery photo"></a></li>
                        <li><a class="gallery-img" href="http://via.placeholder.com/570x570"><img class="img-responsive" src="http://via.placeholder.com/570x570" alt="gallery photo"></a></li>
                        <li><a class="gallery-img" href="http://via.placeholder.com/570x570"><img class="img-responsive" src="http://via.placeholder.com/570x570" alt="gallery photo"></a></li>
                    </ul> <!-- .footer-social -->
                </div> <!-- col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 recent-post-widget">
                    <h3 class="widget-title">Recent posts</h3>
                    <ul class="post-list">
                        <li class="clearfix">
                            <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/60x60" alt="blog post thumbnail"></div>
                            <div class="content-wrapper">
                                <h5><a href="#">When the music is over turn off</a></h5>
                                <p>August 07, 2017</p>
                            </div> <!-- .content-wrapper -->
                        </li> <!-- .clearfix -->
                        <li class="clearfix">
                            <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/60x60" alt="blog post thumbnail"></div>
                            <div class="content-wrapper">
                                <h5><a href="#">When the music is over turn off the light</a></h5>
                                <p>August 07, 2017</p>
                            </div> <!-- .content-wrapper -->
                        </li> <!-- .clearfix -->
                    </ul> <!-- .post-list -->
                </div> <!-- col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 newsletter-widget">
                    <h3 class="widget-title">Subscribe Us</h3>
                    <form class="subscription-form" id="subscription-form">
                        <div class="form-group">
                            <label class="sr-only" for="subscriber-name">Name</label>
                            <input type="text" name="subscriber-name" id="subscriber-name" class="form-control" placeholder="Your name">
                        </div> <!-- .form-group -->
                        <div class="form-group">
                            <label class="sr-only" for="subscriber-email">Email</label>
                            <input type="text" name="subscriber-email" id="subscriber-email" class="form-control" placeholder="Your email">
                        </div> <!-- .form-group -->
                        <button class="btn btn-main">Submit</button>
                    </form> <!-- .subscription-form -->
                </div> <!-- col-lg-3 col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .footer-blocks -->
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>{!! clean(theme_option('copyright')) !!}</p>
                </div> <!-- .col-md-6 -->
                <div class="col-md-6">
                    <ul class="bottom-links">
                        <li><a href="#">Terms &amp; Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                    </ul> <!-- .bottom-links -->
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .bottom-bar -->
</footer> <!-- .site-footer -->
        {!! Theme::footer() !!}
    </body>
</html>
