<?php

use Botble\Base\Facades\MetaBox;
use Botble\Theme\Facades\Theme;
use Illuminate\Http\Request;

if (! function_exists('theme_register_meta_box')) {
    /**
     * Register a meta box rendering a theme partial.
     *
     * Each field is "view variable => meta key" or "view variable => [
     *     'meta' => meta key,
     *     'default' => value when the object has no meta data yet,
     *     'theme_option' => theme option used as a fallback,
     *     'object' => true to pass the object itself,
     * ]".
     */
    function theme_register_meta_box(
        string $objectClass,
        string $context,
        string $id,
        string $title,
        string $partial,
        array $fields
    ): void {
        MetaBox::addMetaBox(
            $id,
            $title,
            function () use ($partial, $fields) {
                $args = func_get_args();
                $object = ! empty($args[0]) ? $args[0] : null;
                $data = [];

                foreach ($fields as $variable => $field) {
                    $field = is_array($field) ? $field : ['meta' => $field];

                    if ($field['object'] ?? false) {
                        $data[$variable] = $object;

                        continue;
                    }

                    $value = $object
                        ? MetaBox::getMetaData($object, $field['meta'], true)
                        : ($field['default'] ?? null);

                    if (! $value && ! empty($field['theme_option'])) {
                        $value = theme_option($field['theme_option']) ?: $value;
                    }

                    $data[$variable] = $value;
                }

                return Theme::partial($partial, $data);
            },
            $objectClass,
            $context
        );
    }
}

if (! function_exists('theme_save_meta_box_fields')) {
    function theme_save_meta_box_fields(object $object, Request $request, array $fields): void
    {
        foreach ($fields as $field) {
            if ($request->has($field)) {
                MetaBox::saveMetaBoxData($object, $field, $request->input($field));
            }
        }
    }
}
