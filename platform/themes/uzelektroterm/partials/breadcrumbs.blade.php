@if (Theme::get('section-name'))
    <section class="hero-area">
        <div class="page-title-banner">
            <div class="container">
                <div class="content-wrapper">
                    <h2>Latest Blog</h2>
                    <u  @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                        @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                            <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>
                        @else
                            <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div> <!-- .content-wrapper -->
            </div> <!-- .container -->
        </div> <!-- .page-title-banner -->
    </section> <!-- .hero-area -->

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


