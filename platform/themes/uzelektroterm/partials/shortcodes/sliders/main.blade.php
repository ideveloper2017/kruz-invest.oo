
<section class="hero-area">
    <div id="corporex-slider" class="corporex-slider carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#corporex-slider" data-slide-to="0" class="active"></li>
            <li data-target="#corporex-slider" data-slide-to="1"></li>
        </ol> <!-- .carousel-indicators -->

        <div class="carousel-inner" role="listbox">
            @foreach($sliders as $slider)
            <div class="item caption-left @if ($loop->first) active @endif">
                <img class="slider-bg img-responsive" src="{{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }}" alt="slider image 01">

            </div> <!-- .item -->
            @endforeach

        </div> <!-- .carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <!-- .carousel-control -->

        <a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <!-- .carousel-control -->

    </div> <!-- .carousel -->
</section> <!-- .hero-area -->
<section class="hero-area" style="display: none">
    <div id="corporex-slider" class="corporex-slider corporex-slider-02 carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#corporex-slider" data-slide-to="0" class="active"></li>
            <li data-target="#corporex-slider" data-slide-to="1"></li>
        </ol> <!-- .carousel-indicators -->

        <div class="carousel-inner" role="listbox">
            @foreach($sliders as $slider)
            <div class="item caption-center active">
                <img class="slider-bg img-responsive" src="{{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }}" alt="slider image 01">

            </div> <!-- .item -->
            @endforeach
        </div> <!-- .carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <!-- .carousel-control -->

        <a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <!-- .carousel-control -->

    </div> <!-- .carousel -->
</section> <!-- .hero-area -->
