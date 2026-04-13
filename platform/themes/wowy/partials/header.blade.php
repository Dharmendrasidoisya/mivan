<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! BaseHelper::googleFonts(
        'https://fonts.googleapis.com/css2?family=' .
            urlencode(theme_option('font_text', 'Poppins')) .
            ':ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',
    ) !!}


    <style>
			.ul-banner-slide::before {
            background: transparent !important;
        }
		.ul-sidebar-header {
			align-items: flex-start !important ;
			}
		.ul-breadcrumb {
		  padding: 60px !important;
  padding-top: 90px !important;
		}
        .ul-sidebar-footer {
    margin-top: inherit !important;
}
        .ul-breadcrumb-title {
            font-size: 30px ;
        }
        @media only screen and (max-width: 600px) {.ul-breadcrumb-title {
			
            font-size: 20px !important;
        }
			.colormenu{
			color:#cfa757;
			}
			.ul-properties-tab-navs{
			overflow: auto;
		}
			.ul-properties-tab-navs button{
			    padding: 0 clamp(10px, 1.16vw, 22px) !important;
			}
			
		}
       

        :root {
            --font-text: {{ theme_option('font_text', 'Poppins') }}, sans-serif;
            --color-brand: {{ theme_option('color_brand', '#5897fb') }};
            --primary-color: {{ theme_option('color_brand', '#5897fb') }};
            --color-brand-2: {{ theme_option('color_brand_2', '#3256e0') }};
            --color-primary: {{ theme_option('color_primary', '#3f81eb') }};
            --color-secondary: {{ theme_option('color_secondary', '#41506b') }};
            --color-warning: {{ theme_option('color_warning', '#ffb300') }};
            --color-danger: {{ theme_option('color_danger', '#ff3551') }};
            --color-success: {{ theme_option('color_success', '#3ed092') }};
            --color-info: {{ theme_option('color_info', '#18a1b7') }};
            --color-text: {{ theme_option('color_text', '#4f5d77') }};
            --color-heading: {{ theme_option('color_heading', '#222222') }};
            --color-grey-1: {{ theme_option('color_grey_1', '#111111') }};
            --color-grey-2: {{ theme_option('color_grey_2', '#242424') }};
            --color-grey-4: {{ theme_option('color_grey_4', '#90908e') }};
            --color-grey-9: {{ theme_option('color_grey_9', '#f4f5f9') }};
            --color-muted: {{ theme_option('color_muted', '#8e8e90') }};
            --color-body: {{ theme_option('color_body', '#4f5d77') }};
        }
    </style>

    {!! Theme::header() !!}

    @php
        $headerStyle = theme_option('header_style') ?: '';
        $page = Theme::get('page');
        if ($page) {
            $headerStyle = $page->getMetaData('header_style', true) ?: $headerStyle;
        }
        $headerStyle =
            $headerStyle && in_array($headerStyle, array_keys(get_layout_header_styles())) ? $headerStyle : '';
    @endphp




</head>

<body>
    <div class="preloader" id="preloader">
        <!-- <div class="loader"></div> -->
    </div>
    <div class="body">
        {{-- <header id="header"
            data-plugin-options="{'stickyScrollUp': true, 'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 100}">
            <div class="header-body border-top-0 h-auto box-shadow-none">

                <div class="header-top header-top-small-minheight header-top-simple-border-bottom hmobi">
                    <div class="container-fluid px-lg-5 py-2">
                        <div class="header-row justify-content-between">
                            <div class="header-column col-auto px-0">
                                <div class="header-row">
                                    <div class="header-nav-top">
                                        <ul class="nav nav-pills position-relative">
                                            @if (theme_option('contact_email'))
                                                <li class="nav-item d-none d-sm-block">
                                                    <span
                                                        class="d-flex align-items-center font-weight-medium ws-nowrap text-3 ps-0"><a
                                                            href="mailto:{{ theme_option('contact_email') }}"
                                                            class="text-decoration-none text-color-dark text-color-hover-primary"><i
                                                                class="icons icon-envelope font-weight-bold position-relative text-4 top-3 me-1"></i>
                                                            {{ theme_option('contact_email') }}</a></span>
                                                </li>
                                            @endif
                                            <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show"
                                                style="display:none;">
                                                <span
                                                    class="d-flex align-items-center font-weight-medium text-color-dark ws-nowrap text-3"><i
                                                        class="icons icon-clock font-weight-bold position-relative text-3 top-1 me-2"></i>
                                                    Mon - Fri 8:30AM - 5:30PM</span>
                                            </li>

                                            @if (theme_option('phone'))
                                                <li
                                                    class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                                    <span
                                                        class="d-flex align-items-center font-weight-medium ws-nowrap text-3 ps-0"><a
                                                            href="https://web.whatsapp.com/send?l=en&amp;&phone= {{ theme_option('phone') }} &text= Hey! I am interested for Nanavaty And Associates"
                                                            class="text-decoration-none text-color-dark text-color-hover-primary lbldes"
                                                            target="_blank">
                                                            <img loading="lazy"
                                                                src="{{ asset('themes/wowy/ads/img/wt.png') }}"
                                                                alt="whatsapp" style="width: 20px;">
                                                            {{ theme_option('phone') }}</a></span>
                                                </li>
                                            @endif



                                            <li>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            @php $currencies = is_plugin_active('ecommerce') ? get_all_currencies() : []; @endphp

                            @if (is_plugin_active('ecommerce') || is_plugin_active('language'))
                                <div class="container-fluid px-lg-7 py-2">
                                    <div class="header-info header-info-right">
                                        <ul>
                                            @if (is_plugin_active('language'))
                                                {!! Theme::partial('language-switcher') !!}
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <div class="header-column justify-content-end col-auto px-0 d-none d-md-flex tabnone">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul
                                            class="header-social-icons social-icons social-icons-clean social-icons-icon-gray social-icons-medium custom-social-icons-divider">
                                            <li class="social-icons-facebook">
                                                <a href="https://www.facebook.com/profile.php?id=61573932563802"
                                                    target="_blank" title="Facebook"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="social-icons-instagram">
                                                <a href="https://www.instagram.com/nanavatyassociate" target="_blank"
                                                    title="instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="social-icons-linkedin">
                                                <a href="https://www.linkedin.com/company/106636325/admin/dashboard/"
                                                    target="_blank" title="linkedin">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid px-3 px-lg-5 p-static">
                    <div class="row align-items-center">
                        <div class="col-auto col-lg-2 col-xxl-3 me-auto me-lg-0">
                            <div class="header-logo" data-clone-element-to="#offCanvasLogo">
                                @if ($logo = theme_option('logo_light') ?: theme_option('logo'))
                                    <a href="{{ BaseHelper::getHomepageUrl() }}">
                                        <img alt="{{ theme_option('site_title') }}" width="250" class="smalllogo"
                                            src="{{ RvMedia::getImageUrl($logo) }}">
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-auto col-lg-8 col-xxl-6 justify-content-lg-center">
                            <div class="header-nav header-nav-links justify-content-lg-center">
                                <div
                                    class="header-nav-main header-nav-main-text-capitalize header-nav-main-arrows header-nav-main-effect-2">
                                    <nav class="collapse">
                                        {!! Menu::renderMenuLocation('main-menu', [
                                            'view' => 'main-menu',
                                        ]) !!}
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto col-lg-2 col-xxl-3">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="d-none d-sm-flex d-lg-none d-xxl-flex">
                                    <img src="{{ asset('themes/wowy/ads/img/icons/phone-2.svg') }}" width="24"
                                        height="24" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary pe-1'}" />
                                    @if (theme_option('phone'))
                                        <a href="tel:{{ theme_option('phone') }}"
                                            class="text-decoration-none font-secondary text-4 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap">{{ theme_option('phone') }}</a>
                                    @endif
                                </div>
                                @php
                                    $headerMessages = json_decode(theme_option('header_messages'), true);
                                    $firstLink = null;

                                    if (!empty($headerMessages) && is_array($headerMessages)) {
                                        foreach ($headerMessages as $message) {
                                            if (is_array($message)) {
                                                foreach ($message as $field) {
                                                    if (
                                                        isset($field['key']) &&
                                                        $field['key'] === 'link' &&
                                                        !empty($field['value'])
                                                    ) {
                                                        $firstLink = $field['value'];
                                                        break 2; // Stop both loops once first link is found
                                                    }
                                                }
                                            }
                                        }
                                    }
                                @endphp

                                @if ($firstLink)
                                    <a href="{{ $firstLink }}"
                                        class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium px-3 py-2 text-2-5 btn-swap-1 ms-3 d-none d-md-flex"
                                        data-clone-element="1">
                                        <span>{{ __('Get Free Quote') }} <i
                                                class="fa-solid fa-arrow-right ms-2"></i></span>
                                    </a>
                                @endif





                                <button class="btn header-btn-collapse-nav rounded-pill" data-bs-toggle="offcanvas"
                                    href="#offcanvasMain" role="button" aria-controls="offcanvasMain">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> --}}

        <!-- SIDEBAR SECTION START -->
        <div class="ul-sidebar">
            <!-- header -->
            <div class="ul-sidebar-header">
                <div class="ul-sidebar-header-logo">
                    <a href="{{ BaseHelper::getHomepageUrl() }}" class="d-inline-block"><img
                            src="{{ asset('assets/img/Mivan.png') }}" alt="logo" class="logo"></a>
                </div>
                <!-- sidebar closer -->
                <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
            </div>

            <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

            {{-- <p class="ul-sidebar-descr d-none d-lg-flex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                magni
                quis illum iste, omnis sapiente, voluptatum tempora id culpa exercitationem sint sequi officia labore
                inventore corporis consequuntur dolor numquam, ea cupiditate ipsa dignissimos nostrum. </p> --}}

            <div class="ul-sidebar-slider-wrapper d-none d-lg-flex">
                <div class="ul-sidebar-slider-nav ul-slider-nav">
                    <button class="prev"><i class="flaticon-arrow"></i></button>
                    <button class="next"><i class="flaticon-right-arrow"></i></button>
                </div>

                <div class="slider-wrapper">
                    <div class="ul-sidebar-slider swiper">
                        <div class="swiper-wrapper">
                            <!-- single project -->

                            <?php
                            $products = DB::table('projectsposts')
                                                ->where('status', 'published')
                                                ->get();
                            ?>



                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <div class="ul-project">
                                        <div class="ul-project-img"><img
                                                src="{{ RvMedia::getImageUrl($product->image, null, false, asset('images/no-image.png')) }}"
                                                alt="Project Image">
                                        </div>
                                        <div class="ul-project-txt">
                                            <span class="ul-project-tag">
                                                {{ ucfirst($product->project_status ?? 'Available') }}</span>

                                            <div class="top">
                                                <div class="left">
                                                    <a href="{{ url('projects/' . Str::slug(str_replace('&', '', html_entity_decode($product->name)))) }}"
                                                        class="ul-project-title">{{ $product->name }}</a>
                                      
                                                        {{-- {!! $product->location ?? '' !!} --}}
                                                  
                                                </div>

                                                {{-- <div class="right">
                                                <button class="ul-project-add-to-favorites-btn">
                                                    <i class="flaticon-heart"></i>
                                                </button>
                                            </div> --}}
                                            </div>

                                            <!-- bottom -->
                                            <div class="ul-project-infos ul-featured-property-infos">

                                                <div class="ul-project-info ul-featured-property-info">
                                                    <span class="icon"><i class="flaticon-map"></i></span>
                                                    <span
                                                        class="text">{{ $product->plot_type ?? 'NA Residential Plots' }}</span>
                                                </div>

                                                {{-- <div class="ul-project-info ul-featured-property-info">
                                                    <span class="icon"><i class="flaticon-checked"></i></span>
                                                    <span
                                                        class="text">{{ $product->approval ?? 'Government Approved' }}</span>
                                                </div>

                                                <div class="ul-project-info ul-featured-property-info">
                                                    <span class="icon"><i class="flaticon-growth"></i></span>
                                                    <span
                                                        class="text">{{ $product->growth_zone ?? 'High Appreciation Zone' }}</span>
                                                </div> --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>

            <!-- sidebar footer -->
            <div class="ul-sidebar-footer">
                <span class="ul-sidebar-footer-title">Follow us</span>

                <div class="ul-sidebar-footer-social">
                    <a href="https://www.facebook.com/Mivanrealty/" target="_blank"><i class="flaticon-facebook"></i></a>
                    <!-- <a href="#"><i class="flaticon-twitter"></i></a> -->
                    <a href="https://www.instagram.com/mivanrealty/" target="_blank"><i class="flaticon-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/mivanrealty" target="_blank"><i class="flaticon-linkedin"></i></a>
                               {{-- <a href="https://www.linkedin.com/company/mivanrealty" target="_blank"><i class="flaticon-youtube"></i></a> --}}
                </div>
            </div>
        </div>
        <!-- SIDEBAR SECTION END -->

        <!-- SEARCH MODAL SECTION START -->
        <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
            <button class="ul-search-closer"><i class="flaticon-close"></i></button>

            <form action="#" class="ul-search-form">
                <div class="ul-search-form-right">
                    <input type="search" name="search" id="ul-search" placeholder="Search Here">
                    <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
                </div>
            </form>
        </div>

        <!-- HEADER SECTION START -->
        <!-- HEADER SECTION START -->
        <header class="ul-header ul-header--home">
            <div class="ul-header-bottom">
                <div class="ul-header-bottom-wrapper">

                    <!-- HEADER LEFT : LOGO -->
                    <div class="header-bottom-left">
                        <div class="logo-container">
                            @if ($logo = theme_option('logo'))
                                <a href="{{ BaseHelper::getHomepageUrl() }}" class="d-inline-block">
                                    <img src="{{ RvMedia::getImageUrl($logo) }}"
                                        alt="{{ theme_option('site_title') }}" class="logo">
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- HEADER NAV : DYNAMIC MENU -->
                    <div class="ul-header-nav-wrapper">
                        <div class="to-go-to-sidebar-in-mobile">
                            <nav class="ul-header-nav">

                                {!! Menu::renderMenuLocation('main-menu', [
                                    'view' => 'main-menu',
                                ]) !!}

                            </nav>
                        </div>
                    </div>

                    <!-- HEADER ACTIONS -->
                    <div class="ul-header-actions">
                        <button class="ul-header-sidebar-opener">
                            <i class="flaticon-menu-button colormenu"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- HEADER SECTION END -->
