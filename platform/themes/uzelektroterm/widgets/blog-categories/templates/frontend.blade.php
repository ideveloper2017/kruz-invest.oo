@if (is_plugin_active('blog'))
    <div class="widget widget-category">
        <h3 class="widget-title">{{ $config['name'] }}</h3>
        <ul class="link-list">
            @foreach(app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->advancedGet(['condition' => ['status' => \Botble\Base\Enums\BaseStatusEnum::PUBLISHED], 'take' => $config['number_display'], 'with' => ['slugable'], 'withCount' => ['posts']]) as $category)
                <li class="cat-item cat-item-2">
                    <a href="{{ $category->url }}">{{ $category->name }}</a> ({{ $category->posts_count }})
            @endforeach
        </ul>
    </div> <!-- .widget widget-post-category -->

@endif
