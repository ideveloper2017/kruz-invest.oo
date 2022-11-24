@if (is_plugin_active('blog'))
    <div class="widget widget-search" >
        <h3 class="widget-title">{{ $config['name'] }}</h3>
        <form  method="get" action="{{ route('public.search') }}">
            <input class="form-control" type="search" name="q" value="{{ request()->query('q') }}" placeholder="{{ __('Search...') }}">
            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- .widget widget-search -->


    <div class="sidebar-primary col-lg-12 col-md-6" style="display: none">
        <div class="widgets-sidebar">
            <h3 class="h3-md fw-6 mb-4">{{ $config['name'] }}</h3>
            <form role="search" method="get" action="{{ route('public.search') }}" class="sidebar-search">
                <input type="search" class="form-control"  name="q" value="{{ request()->query('q') }}" placeholder="{{ __('Search...') }}">
                <button type="submit" class="btn-theme bg-orange"><i class="icofont icofont-search"></i></button>
            </form>
        </div><!-- Widget End -->
    </div>
@endif
