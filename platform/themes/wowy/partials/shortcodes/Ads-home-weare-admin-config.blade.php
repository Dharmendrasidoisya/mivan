{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'autoplay' => true,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'description', 'type' => 'textarea', 'label' => __('Description'), 'placeholder' => 'description'],
        ['name' => 'description2', 'type' => 'textarea', 'label' => __('Description2'), 'placeholder' => 'description Second '],
        ['name' => 'description3', 'type' => 'textarea', 'label' => __('Description3'), 'placeholder' => 'description Third '],
        ['name' => 'description4', 'type' => 'textarea', 'label' => __('Description4'), 'placeholder' => 'description Four '],
        ['name' => 'description5', 'type' => 'textarea', 'label' => __('Description5'), 'placeholder' => 'description Five '],
        ['name' => 'description6', 'type' => 'textarea', 'label' => __('Description6'), 'placeholder' => 'description Six '],
        ['name' => 'icon1', 'type' => 'image', 'label' => __('Icon1')],
        ['name' => 'icon2', 'type' => 'image', 'label' => __('Icon2')],
    ],
]) !!}
