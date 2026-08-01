<?php

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Faq\Repositories\Interfaces\FaqCategoryInterface;
use Botble\Shortcode\Compilers\Shortcode;
use Botble\Theme\Facades\Theme;
use Illuminate\Support\Collection;

if (! function_exists('theme_shortcode_view_data')) {
    function theme_shortcode_view_data(Shortcode $shortcode, array $attributes): array
    {
        $data = ['shortcode' => $shortcode];

        foreach ($attributes as $attribute) {
            $data[$attribute] = $shortcode->{$attribute};
        }

        return $data;
    }
}

if (! function_exists('register_theme_shortcode_admin_config')) {
    function register_theme_shortcode_admin_config(string $key, ?Closure $data = null): void
    {
        shortcode()->setAdminConfig($key, function (array $attributes) use ($key, $data) {
            return Theme::partial(
                'shortcodes.' . $key . '-admin-config',
                array_merge(compact('attributes'), $data ? $data() : [])
            );
        });
    }
}

if (! function_exists('register_theme_shortcode')) {
    /**
     * Register a shortcode rendering "shortcodes.{$key}" together with its
     * "shortcodes.{$key}-admin-config" partial.
     *
     * $attributes are copied from the shortcode into the view, $data returns
     * extra view data (returning null skips rendering).
     */
    function register_theme_shortcode(
        string $key,
        string $name,
        array $attributes = [],
        ?Closure $data = null,
        ?string $description = null,
        ?Closure $adminConfigData = null
    ): void {
        add_shortcode($key, $name, $description ?: $name, function (Shortcode $shortcode) use ($key, $attributes, $data) {
            $viewData = theme_shortcode_view_data($shortcode, $attributes);

            if ($data) {
                $extraData = $data($shortcode);

                if ($extraData === null) {
                    return null;
                }

                $viewData = array_merge($viewData, $extraData);
            }

            return Theme::partial('shortcodes.' . $key, $viewData);
        });

        register_theme_shortcode_admin_config($key, $adminConfigData);
    }
}

if (! function_exists('get_faq_categories_for_shortcode')) {
    function get_faq_categories_for_shortcode(Shortcode $shortcode): Collection
    {
        $params = [
            'condition' => [
                'status' => BaseStatusEnum::PUBLISHED,
            ],
            'with' => [
                'faqs' => function ($query) {
                    $query->wherePublished();
                },
            ],
            'order_by' => [
                'faq_categories.order' => 'ASC',
                'faq_categories.created_at' => 'DESC',
            ],
        ];

        if ($shortcode->category_id) {
            $params['condition']['id'] = $shortcode->category_id;
        }

        return app(FaqCategoryInterface::class)->advancedGet($params);
    }
}

if (! function_exists('get_faq_categories_for_admin_config')) {
    function get_faq_categories_for_admin_config(): array
    {
        return [
            'categories' => app(FaqCategoryInterface::class)->pluck(
                'name',
                'id',
                ['status' => BaseStatusEnum::PUBLISHED]
            ),
        ];
    }
}
