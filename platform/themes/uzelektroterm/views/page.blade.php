@if (!BaseHelper::isHomepage($page->id))
    @php
        Theme::set('section-name', SeoHelper::getTitle());
        $page->loadMissing('metadata');

        $bannerImage = $page->getMetaData('banner_image', true);

        if ($bannerImage) {
            Theme::set('breadcrumbBannerImage', RvMedia::getImageUrl($bannerImage));
        }
    @endphp
    <div id="body-content">
        <div class="sidebar-overflow">
            <div class="container">
                <div class="row pad-top">
                    <div class="col-md-12 col-lg-8">
                        <div class="sidebar-padding">
                            @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($page)))
                                {!! render_object_gallery($galleries) !!}
                            @endif
                            {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 sidebar-left order-lg-first">
                        <aside class="sidebar-spacer row">
                        {!! dynamic_sidebar('primary_sidebar') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@else
    @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($page)))
        {!! render_object_gallery($galleries) !!}
    @endif
    {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page) !!}
@endif
