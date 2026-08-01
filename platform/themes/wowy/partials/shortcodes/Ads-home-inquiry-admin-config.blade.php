{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'autoplay' => true,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
    ],
]) !!}
