<?php

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

register_sidebar([
    'id'   => 'footer_copyright_menu',
    'name' => __('Footer copyright menu'),
]);

RvMedia::setUploadPathAndURLToPublic();
RvMedia::addSize('featured', 565, 375)->addSize('medium', 540, 360);

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
