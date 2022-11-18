
<section class="blog-section blog-style-04 section-block">
    <div class="container">
        <div class="title-block">
            <h2>{!! clean($title) !!}</h2>
        </div> <!-- .title-block -->
        <div class="row">
            <?php $rows=1;?>
            @if (!empty($category))
                @foreach($category->posts->sortByDesc('id') as $post)

            @if($rows==1) <div class="col-lg-6"> @endif
                <div class="post-wrapper post-split clearfix">
                    <div class="image-wrapper">
                        <img class="img-responsive" src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="blog image">
                    </div> <!-- .image-wrapper -->
                    <div class="post-content">
                        <ul class="post-meta">
                            <li>{{ $post->created_at->translatedFormat('d.F.Y') }}</li>

                        </ul>
                        <h3><a href="{{ $post->url }}">{{$rows.' '. $post->name }}</a></h3>
                        <a class="btn-open" href="{{ $post->url }}">Read More</a>
                    </div>
                </div>
                @if($rows==2) <?php $rows =1; echo '</div>';?>  @else <?php $rows++;?>@endif
                @endforeach
            @endif
        </div> <!-- .row -->
        <div class="btn-container">
            <a class="btn btn-narrow" href="#">View All</a>
        </div>

    </div> <!-- .container -->
</section>
<section class="wide-tb-100" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-main">
                    <h1>{!! clean($title) !!}</h1>
                </div>
            </div>
               @if (!empty($category))
                  @foreach($category->posts->sortByDesc('id')->take(3) as $post)
                        <div class="col-sm-4">
                            <div class="blog-wrap">
                                <a href="{{ $post->url }}"><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></a>
                                <div class="inner-content">
                                    <div class="meta-box">
                                        <span><i class="icofont icofont-calendar"></i>{{ $post->created_at->translatedFormat('d.F.Y') }}</span>
                                    </div>
                                    <h4 class="h4-md mb-3"><a href="{{ $post->url }}">{{ $post->name }}</a></h4>
                                    <p>{{ mb_substr($post->description,0,175) }}</p>
                                    <a href="{{ $post->url }}" class="btn-theme bg-navy-blue">{{ trans('labels.readmore') }} <i class="icofont icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                 @endforeach
                @endif
                <div class="post-module-3" style="display: none">
                    <div class="widget-header-1 position-relative mb-30">
                        <h5 class="mt-5 mb-30">{{ __('Latest posts') }}</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">
                        @foreach(get_latest_posts(3, !empty($category) ? $category->posts->sortByDesc('id')->take(4)->pluck('id')->all() : [], ['slugable', 'categories', 'categories.slugable']) as $post)
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                {!! Theme::partial('components.post-list-item', compact('post')) !!}
                            </article>
                        @endforeach
                    </div>
                </div>

            <div class="col-lg-4" style="display:none">
                <div class="widget-area">
                    {!! AdsManager::display('top-sidebar-ads', ['class' => 'mb-30']) !!}
                    {!! dynamic_sidebar('primary_sidebar') !!}
                    {!! AdsManager::display('bottom-sidebar-ads', ['class' => 'mt-30 mb-30']) !!}
                </div>
            </div>
        </div>
    </div>
</section>
