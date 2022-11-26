<section class="contact-section page-content">
    <div class="container">
        <div class="contact-options section-block">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                    <h3>Address</h3>
                    <p>20, Bardeshi, Amin Bazar <br> Savar, Dhaka</p>
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="icon-box"><i class="fa fa-phone"></i></div>
                    <h3>Phone</h3>
                    <a href="#">+8801679252595</a>
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="icon-box"><i class="fa fa-envelope-o"></i></div>
                    <h3>Email</h3>
                    <a href="#">hello@corporex.com</a>
                </div> <!-- .col-md-4 -->
            </div> <!-- .row -->
        </div> <!-- .contact-options -->
        <div class="contact-form-block">
            <div class="row">
                <div class="col-md-7 form-block">

                    <div class="form-message">
                        <p></p>
                    </div> <!-- .form-message -->
                    {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form comment_form', 'id' => 'contactForm']) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="author" class="sr-only">Name:</label>
                                    <input class="form-control" type="text" name="name" id="name"  placeholder="Name *">
                                </div> <!-- .form-group -->
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email:</label>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Email *">
                                </div> <!-- .form-group -->
                                <div class="form-group">
                                    <label for="phone" class="sr-only"> __('Phone'):</label>
                                    <input class="form-control" name="phone" value="{{ old('phone') }}"
                                           id="contact_phone" placeholder="{{ __('Phone') }}" required>
                                </div> <!-- .form-group -->
                            </div>
                            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                <div class="contact-form-row">
                                    <div class="contact-column-12">
                                        <div class="contact-form-group">
                                            {!! Captcha::display() !!}
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="comment" class="sr-only">Comment:</label>
                                    <textarea class="form-control" name="comment" id="comment" placeholder="Write your comment here *"></textarea>
                                </div> <!-- .form-group -->
                                <button class="btn btn-main">{{ __('Finish & Submit') }}</button>
                            </div> <!-- .col-md-6 -->

                        </div> <!-- .row -->
                    {!! Form::close() !!}
                </div> <!-- .col-md-7 -->
                <div class="col-md-5 map-block">

                        [google-map]Namangan[/google-map]

                </div> <!-- .col-md-5 -->
            </div> <!-- .row -->
        </div> <!-- .contact-form -->
    </div> <!-- .container -->
</section> <!-- .portfolio-section -->
<div class="row" style="display: none">
    <div class="col-lg-6 col-md-12">
        @if(!empty($title))
            <h1 class="mb-30">{!! clean($title) !!}</h1>
        @endempty
        {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form comment_form', 'id' => 'contactForm']) !!}
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email"
                           required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                           id="contact_phone" placeholder="{{ __('Phone') }}" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="content" id="content" cols="30" rows="9"
                              placeholder="Message" required></textarea>
                </div>
            </div>
        </div>
        @if (setting('enable_captcha') && is_plugin_active('captcha'))
            <div class="contact-form-row">
                <div class="contact-column-12">
                    <div class="contact-form-group">
                        {!! Captcha::display() !!}
                    </div>
                </div>
            </div>
        @endif
        <div class="form-group">
            <button class="button button-contactForm" type="submit">{{ __('Finish & Submit') }}</button>
        </div>
        {!! Form::close() !!}
    </div>

</div>


