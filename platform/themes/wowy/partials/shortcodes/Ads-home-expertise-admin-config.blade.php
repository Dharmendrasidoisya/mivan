{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'autoplay' => true,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'description', 'type' => 'textarea', 'label' => __('Description'), 'placeholder' => 'description'],
        ['name' => 'description2', 'type' => 'textarea', 'label' => __('Description2'), 'placeholder' => 'description Second '],
        ['name' => 'icon1', 'type' => 'image', 'label' => __('Icon1')],
    ],
]) !!}
