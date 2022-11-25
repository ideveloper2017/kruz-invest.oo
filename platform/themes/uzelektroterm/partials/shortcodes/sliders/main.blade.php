@if (is_plugin_active('simple-slider') && count($sliders) > 0 &&
    $sliders->loadMissing('metadata') && $slider->loadMissing('metadata'))
    @php
        $style = $slider->getMetaData('simple_slider_style', true);
        echo $style;
    @endphp
    @if ($style == 'style-3')

<section class="hero-area">
    <div id="corporex-slider" class="corporex-slider corporex-slider-02 carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#corporex-slider" data-slide-to="0" class="active"></li>
            <li data-target="#corporex-slider" data-slide-to="1"></li>
        </ol> <!-- .carousel-indicators -->
        @foreach($sliders as $slider)
        <div class="carousel-inner" role="listbox">
            <div class="item caption-center active">
                <img class="slider-bg img-responsive" src="{{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }}" alt="slider image 01">

            </div> <!-- .item -->

        </div> <!-- .carousel-inner -->
        @endforeach
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
