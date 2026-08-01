{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'autoplay' => true,
    'fields' => [
        ['name' => 'slideshadowtitle', 'label' => 'Slide Shadow Title'],
        ['name' => 'subtitle', 'label' => 'Sub Title'],
        ['name' => 'slidetitle', 'label' => 'Slide Title', 'placeholder' => 'Slide title'],
        ['name' => 'description', 'type' => 'textarea', 'label' => __('Description'), 'placeholder' => 'description'],
        ['name' => 'description2', 'type' => 'textarea', 'label' => __('Description2'), 'placeholder' => 'description Second '],
        ['name' => 'description3', 'type' => 'textarea', 'label' => __('Description3'), 'placeholder' => 'description Third '],
        ['name' => 'icon', 'type' => 'image', 'label' => __('Icon')],
        ['name' => 'icon2', 'type' => 'image', 'label' => __('Icon2')],
    ],
]) !!}
