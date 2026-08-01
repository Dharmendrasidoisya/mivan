{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'fields' => [
        ['name' => 'category_id', 'type' => 'select', 'label' => __('Product category ID'), 'options' => $categories],
        ['name' => 'limit', 'type' => 'number', 'label' => __('Limit'), 'default' => 8],
    ],
]) !!}
