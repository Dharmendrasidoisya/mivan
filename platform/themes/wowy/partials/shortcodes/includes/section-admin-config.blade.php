@php
    $withIcon = $withIcon ?? false;
@endphp
{!! Theme::partial('shortcodes.includes.fields', [
    'attributes' => $attributes,
    'autoplay' => true,
    'fields' => array_merge(
        [
            ['name' => 'title', 'label' => __('Title'), 'placeholder' => 'Title'],
            ['name' => 'headertitle', 'label' => __('Header Title'), 'placeholder' => 'Header Title'],
            ['name' => 'description', 'type' => 'textarea', 'label' => __('Description'), 'placeholder' => 'description'],
        ],
        $withIcon ? [['name' => 'icon', 'type' => 'image', 'label' => __('Icon')]] : []
    ),
]) !!}
