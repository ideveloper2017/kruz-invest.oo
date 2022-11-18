@if (Theme::get('section-name'))
    <section class="hero-area">
        <div class="page-title-banner">
            <div class="container">
                <div class="content-wrapper">
                    <h2>{{ Theme::get('section-name') }}</h2>
                    <ul class="bread-crumb">
                        @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                            @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                                <li><a href="#"><i class="icofont icofont-home"></i></a></li>
                                <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>
                            @else
                                <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>

                            @endif
                        @endforeach
{{--                        <li><a href="#">Home</a></li>--}}
{{--                        <li><a href="#">Blog</a></li>--}}
                    </ul>
                </div> <!-- .content-wrapper -->
            </div> <!-- .container -->
        </div> <!-- .page-title-banner -->
    </section>

<section class="breadcrumbs-wrap" style="display: none">
    <div class="container">
        <ul>
            @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                    <li><a href="#"><i class="icofont icofont-home"></i></a></li>
                    <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>
                @else
                    <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>

                @endif
            @endforeach

        </ul>
<h1>{{ Theme::get('section-name') }}</h1>
    </div>
</section>
@endif


