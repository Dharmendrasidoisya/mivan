{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'autoplay' => true,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'subtitle', 'label' => __('Subtitle')],
        ['name' => 'limit', 'type' => 'number', 'label' => __('Limit'), 'default' => 8],
    ],
]) !!}
