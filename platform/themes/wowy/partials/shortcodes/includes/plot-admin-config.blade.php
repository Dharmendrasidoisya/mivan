{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'description', 'type' => 'textarea', 'label' => __('Description'), 'placeholder' => 'description'],
        ['name' => 'description2', 'type' => 'textarea', 'label' => __('Description2'), 'placeholder' => 'description Second '],
        ['name' => 'category_id', 'type' => 'select', 'label' => __('Category'), 'options' => ['' => __('All')] + $categories],
    ],
]) !!}
