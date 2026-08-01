{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'limit', 'type' => 'number', 'label' => __('Limit'), 'default' => 8],
    ],
]) !!}
