{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'fields' => [
        ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
        ['name' => 'show_popup', 'type' => 'select', 'label' => __('Show sale popup?'), 'default' => 'yes', 'options' => ['yes' => trans('core/setting::setting.general.yes'), 'no' => trans('core/setting::setting.general.no')]],
        ['name' => 'limit', 'type' => 'number', 'label' => __('Limit'), 'default' => 2],
    ],
]) !!}
