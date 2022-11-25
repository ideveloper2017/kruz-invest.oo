{!! Theme::partial('header') !!}
{!! Theme::partial('breadcrumbs') !!}
<div id="body-content">
    <div class="sidebar-overflow">
        <div class="container">
            <div class="row pad-top">
                <div class="col-md-12 col-lg-8">
                    <div class="sidebar-padding">
                    {!! Theme::content() !!}
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
{!! Theme::partial('footer') !!}
