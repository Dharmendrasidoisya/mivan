{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'subtitle', 'label' => __('Subtitle')],
        ['name' => 'limit', 'type' => 'number', 'label' => __('Limit')],
    ],
]) !!}
