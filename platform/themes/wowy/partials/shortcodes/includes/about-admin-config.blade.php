{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'autoplay' => true,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'shorttitle', 'label' => __('Short Title'), 'placeholder' => 'Title'],
        ['name' => 'history', 'type' => 'textarea', 'label' => __('History'), 'rows' => 5, 'placeholder' => 'History'],
        ['name' => 'history2', 'type' => 'textarea', 'label' => __('History'), 'rows' => 5, 'placeholder' => 'History'],
        ['name' => 'mission', 'type' => 'textarea', 'label' => __('Mission'), 'rows' => 5, 'placeholder' => 'Mission'],
        ['name' => 'vision', 'type' => 'textarea', 'label' => __('Vision'), 'rows' => 5, 'placeholder' => 'Vision'],
        ['name' => 'icon', 'type' => 'image', 'label' => __('Icon')],
        ['name' => 'icon2', 'type' => 'image', 'label' => __('Icon')],
        ['name' => 'icon3', 'type' => 'image', 'label' => __('Icon')],
        ['name' => 'icon4', 'type' => 'image', 'label' => __('Icon')],
    ],
]) !!}
