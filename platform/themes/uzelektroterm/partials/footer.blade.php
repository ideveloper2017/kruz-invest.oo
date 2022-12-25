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

        <div class="container">
            <div class="row">
                {!! dynamic_sidebar('footer_sidebar_1') !!}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="strawpoll-embed" id="strawpoll_kogjv0ez1g6" style="height: 644px; max-width: 640px; width: 100%; margin: 0 auto; display: flex; flex-direction: column;"><iframe title="StrawPoll Embed" id="strawpoll_iframe_kogjv0ez1g6" src="https://strawpoll.com/embed/polls/kogjv0ez1g6" style="position: static; visibility: visible; display: block; width: 100%; flex-grow: 1;" frameborder="0" allowfullscreen allowtransparency>Loading...</iframe><script async src="https://cdn.strawpoll.com/dist/widgets.js" charset="utf-8"></script></div>
                </div>
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
            <script>
                $(document).on('click','.is_mobile',function (e){
                    e.preventDefault();
                    let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=500,height=750,left=100,top=100`;
                    window.open('https://uzelektroterm.uz/', 'test', params)
                });
                new isvek.Bvi();
            </script>
    </body>
</html>
