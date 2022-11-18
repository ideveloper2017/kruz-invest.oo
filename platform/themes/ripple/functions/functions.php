<?php

use Botble\Blog\Models\Post;
use Botble\Page\Models\Page;

register_page_template([
    'default'        => __('Default'),
    'full'           => __('Full'),
    'homepage'       => __('Homepage'),
    'homepage2'      => __('Homepage 2'),
    'no-breadcrumbs' => __('No Breadcrumbs'),
    'right-sidebar'  => __('Right sidebar'),
]);

register_sidebar([
    'id'          => 'footer_sidebar_1',
    'name'        => __('Footer sidebar 1'),
    'description' => __('Sidebar in the footer of page'),
]);

register_sidebar([
    'id'          => 'footer_sidebar_2',
    'name'        => __('Footer sidebar 2'),
    'description' => __('Sidebar in the footer of page'),
]);

register_sidebar([
    'id'          => 'footer_sidebar_3',
    'name'        => __('Footer sidebar 3'),
    'description' => __('Sidebar in the footer of page'),
]);

register_sidebar([
    'id'          => 'footer_sidebar_4',
    'name'        => __('Footer sidebar 4'),
    'description' => __('Sidebar in the footer of page'),
]);

RvMedia::setUploadPathAndURLToPublic();
RvMedia::addSize('featured', 565, 375)->addSize('medium', 540, 360);

if (is_plugin_active('blog')) {
    app()->bind(PostInterface::class, function () {
        return new PostCacheDecorator(new PostRepository(new Post));
    });

    if (!function_exists('get_post')) {
        function get_post()
        {
            if (Route::currentRouteName() == 'public.single') {
                $slug = SlugHelper::getSlug(request()->route('slug'), '');
                if ($slug->reference_type == Post::class) {
                    return app(PostInterface::class)
                        ->getFirstBy([
                            'id'     => $slug->reference_id,
                            'status' => BaseStatusEnum::PUBLISHED,
                        ], ['*']);
                }
                return false;
            }
            return false;
        }
    }

    if (!function_exists('query_post')) {
        function query_post(array $params)
        {
            $filters = [
                'limit'              => empty($params['limit']) ? 10 : $params['limit'],
                'format_type'        => $params['format_type'] ?? '',
                'categories'         => empty($params['categories']) ? null : explode(',', $params['categories']),
                'categories_exclude' => empty($params['categories_exclude']) ? null : explode(
                    ',',
                    $params['categories_exclude']
                ),
                'exclude'            => empty($params['exclude']) ? null : explode(',', $params['exclude']),
                'include'            => empty($params['include']) ? null : explode(',', $params['include']),
                'order_by'           => empty($params['order_by']) ? 'updated_at' : $params['order_by'],
            ];

            if (isset($params['featured'])) {
                $filters['featured'] = $params['featured'];
            }

            return app(PostInterface::class)->getFilters($filters);
        }
    }

    register_post_format([
        'video' => [
            'key'  => 'video',
            'icon' => 'fa fa-camera',
            'name' => 'Video',
        ],
    ]);

    add_action(BASE_ACTION_META_BOXES, function ($context, $object) {
        if (get_class($object) == Category::class && $context == 'side') {
            MetaBox::addMetaBox('additional_blog_category_fields', __('Addition Information'), function () {
                $image = null;
                $args = func_get_args();
                if (!empty($args[0])) {
                    $image = MetaBox::getMetaData($args[0], 'image', true);
                }

                return Theme::partial('blog-category-fields', compact('image'));
            }, get_class($object), $context);
        }
    }, 24, 2);

    add_action(BASE_ACTION_AFTER_CREATE_CONTENT, function ($type, $request, $object) {
        if (get_class($object) == Category::class) {
            MetaBox::saveMetaBoxData($object, 'image', $request->input('image'));
        }
    }, 230, 3);

    add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, function ($type, $request, $object) {
        if (get_class($object) == Category::class) {
            MetaBox::saveMetaBoxData($object, 'image', $request->input('image'));
        }
    }, 231, 3);

    add_action(BASE_ACTION_META_BOXES, 'add_addition_fields_in_post_screen', 30, 3);

    function add_addition_fields_in_post_screen($context, $object)
    {
        if (get_class($object) == Post::class && $context == 'top') {
            MetaBox::addMetaBox(
                'additional_post_fields',
                __('Addition Information'),
                function () {
                    $layout = null;
                    $timeToRead = null;
                    $args = func_get_args();
                    if (!empty($args[0])) {
                        $layout = MetaBox::getMetaData($args[0], 'layout', true);
                        $timeToRead = MetaBox::getMetaData($args[0], 'time_to_read', true);
                    }

                    return Theme::partial('metabox.time-to-read', compact('layout', 'timeToRead'));
                },
                get_class($object),
                $context
            );
        }

        if (get_class($object) == Post::class && $context == 'advanced') {
            MetaBox::addMetaBox(
                'video_post_fields',
                __('Video'),
                function () {
                    $videoLink = null;
                    $args = func_get_args();
                    if (!empty($args[0])) {
                        $videoLink = MetaBox::getMetaData($args[0], 'video_link', true);
                        $videoEmbedCode = MetaBox::getMetaData($args[0], 'video_embed_code', true);
                        $videoUploadId = MetaBox::getMetaData($args[0], 'video_upload_id', true);
                    }

                    return Theme::partial(
                        'metabox.video-field',
                        compact('videoLink', 'videoEmbedCode', 'videoUploadId')
                    );
                },
                get_class($object),
                $context
            );
        }
    }

    add_action(BASE_ACTION_AFTER_CREATE_CONTENT, 'save_addition_post_fields', 230, 3);
    add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, 'save_addition_post_fields', 231, 3);

    function save_addition_post_fields($type, $request, $object)
    {
        if (is_plugin_active('blog') && get_class($object) == Post::class) {
            MetaBox::saveMetaBoxData($object, 'layout', $request->input('layout'));
            MetaBox::saveMetaBoxData($object, 'time_to_read', $request->input('time_to_read'));
            MetaBox::saveMetaBoxData($object, 'video_link', $request->input('video_link'));
            MetaBox::saveMetaBoxData($object, 'video_embed_code', $request->input('video_embed_code'));
            MetaBox::saveMetaBoxData($object, 'video_upload_id', $request->input('video_upload_id'));
        }
    }
}

add_filter(BASE_FILTER_BEFORE_RENDER_FORM, function ($form, $data) {
    switch (get_class($data)) {
        case Post::class:
        case Page::class:
            $bannerImage = MetaBox::getMetaData($data, 'banner_image', true);

            $form
                ->addAfter('image', 'banner_image', 'mediaImage', [
                    'label'      => __('Banner image (1920x170px)'),
                    'label_attr' => ['class' => 'control-label'],
                    'value'      => $bannerImage,
                ]);
            break;
    }

    return $form;
}, 124, 3);

add_action(BASE_ACTION_AFTER_CREATE_CONTENT, 'save_addition_in_form_fields', 75, 3);
add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, 'save_addition_in_form_fields', 76, 3);

function save_addition_in_form_fields($type, $request, $object)
{
    switch (get_class($object)) {
        case Post::class:
        case Page::class:
            if ($request->has('banner_image')) {
                MetaBox::saveMetaBoxData($object, 'banner_image', $request->input('banner_image'));
            }

            break;
    }
}

Form::component('themeIcon', Theme::getThemeNamespace() . '::partials.icons-field', [
    'name',
    'value'      => null,
    'attributes' => [],
]);
