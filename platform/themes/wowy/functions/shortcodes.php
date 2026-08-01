<?php

use Botble\Ads\Facades\AdsManager;
use Botble\Ads\Models\Ads;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Models\FlashSale;
use Botble\Ecommerce\Repositories\Interfaces\ProductCategoryInterface;
use Botble\Ecommerce\Repositories\Interfaces\ProductInterface;
use Botble\Shortcode\Compilers\Shortcode;
use Botble\Theme\Facades\Theme;
use Botble\Theme\Supports\ThemeSupport;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

app()->booted(function () {
    ThemeSupport::registerGoogleMapsShortcode();
    ThemeSupport::registerYoutubeShortcode();

    if (is_plugin_active('simple-slider')) {
        add_filter(SIMPLE_SLIDER_VIEW_TEMPLATE, function () {
            return Theme::getThemeNamespace() . '::partials.shortcodes.sliders.main';
        }, 120);
    }

    register_theme_shortcode('site-features', __('Site features'));

    register_theme_shortcode(
        'Ads-blogs',
        __('Ads Blogs'),
        ['title', 'headertitle', 'description', 'icon'],
        function (Shortcode $shortcode) {
            return [
                'posts' => get_featured_blog_posts(['take' => (int)$shortcode->limit ?: 50]),
            ];
        }
    );

    register_theme_shortcode(
        'Ads-blogs-page',
        __('Ads Blogs-page'),
        ['title', 'headertitle', 'description', 'icon'],
        function (Shortcode $shortcode) {
            return [
                'posts' => get_featured_blog_posts(['take' => (int)$shortcode->limit ?: 50]),
            ];
        }
    );

    register_theme_shortcode(
        'Ads-services',
        __('Ads Services'),
        ['title', 'headertitle', 'description', 'icon'],
        function (Shortcode $shortcode) {
            return [
                'projects' => get_featured_projects_posts(['take' => (int)$shortcode->limit ?: 50]),
            ];
        }
    );

    if (is_plugin_active('products')) {
        register_theme_shortcode(
            'Ads-products',
            __('Ads Products'),
            ['title', 'headertitle', 'description', 'icon'],
            function (Shortcode $shortcode) {
                return [
                    'products' => get_featured_projects_posts(['take' => (int)$shortcode->limit ?: 50]),
                ];
            }
        );
    }

    register_theme_shortcode(
        'Ads-productcategory',
        __('Ads Productcategory'),
        ['title', 'headertitle', 'description', 'icon'],
        function (Shortcode $shortcode) {
            return [
                'products' => get_featured_products_posts([
                    'take' => (int)$shortcode->limit ?: 50,
                    'order_by' => 'id',
                    'order' => 'desc',
                ]),
            ];
        }
    );

    register_theme_shortcode(
        'Ads-servicescategory',
        __('Ads Servicescategory'),
        ['title', 'headertitle', 'description', 'icon'],
        function (Shortcode $shortcode) {
            return [
                'productcategory' => get_featured_projects_posts(['take' => (int)$shortcode->limit ?: 50]),
            ];
        }
    );

    if (is_plugin_active('ecommerce')) {
        register_theme_shortcode(
            'featured-product-categories',
            __('Featured Product Categories'),
            ['title', 'headertitle', 'description'],
            function () {
                return ['categories' => get_featured_product_categories()];
            }
        );

        register_theme_shortcode(
            'featured-products',
            __('Featured products'),
            ['title', 'description'],
            function (Shortcode $shortcode) {
                return [
                    'products' => get_featured_products(array_merge([
                        'take' => (int)$shortcode->limit ?: 8,
                    ], EcommerceHelper::withReviewsParams())),
                ];
            }
        );

        register_theme_shortcode(
            'flash-sale',
            __('Flash sale'),
            ['title'],
            function (Shortcode $shortcode) {
                $flashSales = FlashSale::query()
                    ->notExpired()
                    ->wherePublished()
                    ->get();

                if (! $flashSales->count()) {
                    return null;
                }

                $flashSale = $flashSales->first();

                if (! $flashSale || ! $flashSale->products->count()) {
                    return null;
                }

                foreach ($flashSales as $item) {
                    $item->load([
                        'products' => function (BelongsToMany $query) use ($shortcode) {
                            $reviewParams = EcommerceHelper::withReviewsParams();

                            if (EcommerceHelper::isReviewEnabled()) {
                                $query->withAvg($reviewParams['withAvg'][0], $reviewParams['withAvg'][1]);
                            }

                            return $query
                                ->wherePublished()
                                ->limit((int)$shortcode->limit ?: 2)
                                ->withCount($reviewParams['withCount'])
                                ->with(EcommerceHelper::withProductEagerLoadingRelations());
                        },
                    ]);
                }

                return [
                    'showPopup' => $shortcode->show_popup,
                    'flashSale' => $flashSale,
                    'flashSales' => $flashSales,
                ];
            }
        );

        register_theme_shortcode(
            'product-collections',
            __('Product Collections'),
            ['title'],
            function (Shortcode $shortcode) {
                $productCollections = get_product_collections(
                    ['status' => BaseStatusEnum::PUBLISHED],
                    [],
                    ['id', 'name', 'slug']
                );

                if ($productCollections->isEmpty()) {
                    return null;
                }

                $limit = (int)$shortcode->limit ?: 8;

                return [
                    'productCollections' => $productCollections,
                    'limit' => $limit,
                    'products' => get_products_by_collections(array_merge([
                        'collections' => [
                            'by' => 'id',
                            'value_in' => [$productCollections->first()->id],
                        ],
                        'take' => $limit,
                        'with' => EcommerceHelper::withProductEagerLoadingRelations(),
                    ], EcommerceHelper::withReviewsParams())),
                ];
            }
        );

        register_theme_shortcode(
            'product-category-products',
            __('Product category products'),
            [],
            function (Shortcode $shortcode) {
                $category = app(ProductCategoryInterface::class)->getFirstBy(
                    [
                        'status' => BaseStatusEnum::PUBLISHED,
                        'id' => (int)$shortcode->category_id,
                    ],
                    ['*'],
                    [
                        'activeChildren' => function ($query) {
                            return $query->limit(3);
                        },
                    ]
                );

                if (! $category) {
                    return null;
                }

                $limit = (int)$shortcode->limit ?: 8;

                return [
                    'category' => $category,
                    'limit' => $limit,
                    'products' => app(ProductInterface::class)->getProductsByCategories(array_merge([
                        'categories' => [
                            'by' => 'id',
                            'value_in' => array_merge(
                                [$category->id],
                                $category->activeChildren->pluck('id')->all()
                            ),
                        ],
                        'take' => $limit,
                    ], EcommerceHelper::withReviewsParams())),
                ];
            },
            null,
            function () {
                return [
                    'categories' => app(ProductCategoryInterface::class)->pluck(
                        'name',
                        'id',
                        ['status' => BaseStatusEnum::PUBLISHED]
                    ),
                ];
            }
        );

        register_theme_shortcode('featured-brands', __('Featured Brands'), ['title'], function () {
            return ['brands' => get_featured_brands()];
        });
    }

    if (is_plugin_active('ads')) {
        add_shortcode('theme-ads', __('Theme ads'), __('Theme ads'), function (Shortcode $shortcode) {
            $keys = get_ads_keys_from_shortcode($shortcode);

            return display_ads($keys);
        });

        shortcode()->setAdminConfig('theme-ads', function (array $attributes) {
            $ads = Ads::query()
                ->wherePublished()
                ->notExpired()
                ->get();

            return Theme::partial('shortcodes.ads.config-in-admin', compact('ads', 'attributes'));
        });

        AdsManager::load();

        function display_ad($ads, $class = ''): ?string
        {
            if (! ($ads instanceof BaseModel)) {
                $ads = AdsManager::getData()
                    ->where('key', $ads)
                    ->first();
            }

            if (! $ads || ! $ads->image) {
                return null;
            }

            if (
                $ads->location &&
                $ads->location != 'not_set' &&
                view()->exists(Theme::getThemeNamespace() . '::partials.shortcodes.ads.' . $ads->location)
            ) {
                return Theme::partial('shortcodes.ads.' . $ads->location, compact('ads', 'class'));
            }

            return Theme::partial('shortcodes.ads.item', compact('ads', 'class'));
        }

        function get_ads_keys_from_shortcode(Shortcode $shortcode): array
        {
            $keys = collect($shortcode->toArray())
                ->sortKeys()
                ->filter(function ($value, $key) use ($shortcode) {
                    return Str::startsWith($key, 'ads_') ||
                        ($shortcode->name == 'theme-ads' && Str::startsWith($key, 'key_'));
                });

            return array_filter($keys->toArray() + [$shortcode->ads]);
        }

        function display_ads(array $keys): string
        {
            $keys = collect($keys);

            return Theme::partial('shortcodes.ads.items', compact('keys'));
        }

        if (is_plugin_active('simple-slider')) {
            add_filter(SHORTCODE_REGISTER_CONTENT_IN_ADMIN, function ($data, $key, $attributes) {
                if ($key == 'simple-slider') {
                    $ads = Ads::query()
                        ->wherePublished()
                        ->notExpired()
                        ->get();

                    return $data . Theme::partial('shortcodes.includes.autoplay-settings', compact('attributes')) . Theme::partial('shortcodes.ads.config-in-admin', compact('ads', 'attributes'));
                }

                return $data;
            }, 50, 3);
        }
    }

    if (is_plugin_active('blog')) {
        register_theme_shortcode('featured-news', __('Featured News'), ['title'], function () {
            return [
                'posts' => app(PostInterface::class)->getFeatured(4, ['slugable', 'categories', 'categories.slugable']),
            ];
        });
    }

    if (is_plugin_active('contact')) {
        add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
            return Theme::getThemeNamespace() . '::partials.shortcodes.contact-form';
        }, 120);
    }

    if (is_plugin_active('newsletter')) {
        register_theme_shortcode('newsletter-form', __('Newsletter Form'), ['title', 'description']);
    }

    register_theme_shortcode('our-offices', __('Our offices'));

    if (is_plugin_active('faq')) {
        register_theme_shortcode(
            'faqs',
            __('FAQs'),
            ['title', 'description', 'description2'],
            function (Shortcode $shortcode) {
                $project = get_featured_projects_posts([
                    'take' => 1,
                    'select' => ['id', 'title', 'location', 'slug', 'image'],
                ])->first();

                return [
                    'categories' => get_faq_categories_for_shortcode($shortcode),
                    'project' => $project->first(),
                ];
            },
            __('List of FAQs'),
            fn () => get_faq_categories_for_admin_config()
        );

        register_theme_shortcode(
            'plot2',
            __('plot2'),
            ['title', 'description', 'description2'],
            function (Shortcode $shortcode) {
                return [
                    'categories' => get_faq_categories_for_shortcode($shortcode),
                    'project' => DB::table('projectsposts')->where('id', 2)->first(),
                ];
            },
            __('List of plot2'),
            fn () => get_faq_categories_for_admin_config()
        );

        register_theme_shortcode(
            'plot3',
            __('plot3'),
            ['title', 'description', 'description2'],
            function (Shortcode $shortcode) {
                return [
                    'categories' => get_faq_categories_for_shortcode($shortcode),
                    'project' => DB::table('projectsposts')->where('id', 6)->first(),
                ];
            },
            __('List of plot3'),
            fn () => get_faq_categories_for_admin_config()
        );
    }

    //ads india extra code for wowy

    register_theme_shortcode('Ads-slider', __('Ads Slider'), [
        'slideshadowtitle',
        'subtitle',
        'slidetitle',
        'description',
        'description2',
        'description3',
        'icon',
        'icon2',
    ]);

    register_theme_shortcode('Ads-home-icons', __('Ads Home Icons'), [
        'title',
        'shorttitle',
        'icon',
        'history',
        'mission',
        'vision',
    ]);

    register_theme_shortcode('Ads-home-weare', __('Ads Home Weare'), [
        'title',
        'description',
        'description2',
        'description3',
        'description4',
        'description5',
        'description6',
        'icon1',
        'icon2',
    ]);

    register_theme_shortcode('Ads-home-expertise', __('Ads Home Expertise'), [
        'title',
        'description',
        'description2',
        'icon1',
    ]);

    register_theme_shortcode('Ads-home-excellence', __('Ads Home Excellence'), [
        'title',
        'description',
        'description2',
        'icon',
        'icon2',
    ]);

    register_theme_shortcode('Ads-home-clientlogo', __('Ads Home Clientlogo'), array_merge(
        ['title', 'icon'],
        array_map(fn (int $number) => 'icon' . $number, range(2, 12))
    ));

    register_theme_shortcode('Ads-home-inquiry', __('Ads Home Inquiry'), ['title']);

    register_theme_shortcode('Ads-about-us', __('Ads About Us'), [
        'title',
        'shorttitle',
        'icon',
        'icon2',
        'icon3',
        'icon4',
        'history',
        'history2',
        'mission',
        'vision',
    ]);

    if (is_plugin_active('ecommerce')) {
        register_theme_shortcode('Ads-news', __('Ads News'), ['title', 'headertitle', 'description', 'icon']);

        register_theme_shortcode('Ads-industry', __('Ads Industry'), ['title', 'headertitle', 'description', 'icon']);
    }

    if (is_plugin_active('solution')) {
        register_theme_shortcode(
            'Ads-solution',
            __('Ads Solution'),
            ['title', 'headertitle', 'description', 'icon'],
            function (Shortcode $shortcode) {
                return [
                    'solution' => get_featured_sposts(['take' => (int)$shortcode->limit ?: 50]),
                ];
            }
        );
    }

    register_theme_shortcode('Ads-contact', __('Ads Contact'), ['title', 'headertitle', 'description']);

    register_theme_shortcode('Ads-dholera', __('Ads dholera'), ['title', 'headertitle', 'description']);
});
