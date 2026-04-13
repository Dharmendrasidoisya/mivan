<!-- Our products -->

{{-- 
<div class="px-3 px-xl-0 border-radius-2 text-light mt-5 mt-lg-0 p-relative overflow-hidden"
    style="background-color: #f4f4f4 !important;">
    <div class="container-fluid p-relative z-index-1">
        <div class="row align-items-center">

            <div class="container-fluid p-relative z-index-1">
                <div class="row align-items-center">
                    <div class="col py-4 topbottom">
                        <div class="appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0"
                            style="animation-delay: 0ms;">
                            <span
                                class="badge bg-gradient-tertiary-dark rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span
                                    class="d-inline-flex py-1 px-2">Products</span></span>
                        </div>
                        <div class="appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">
                            <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4 text-dark"> Our
                                Products</h2>
                        </div>
                        <div>
                            <div class="carousel-half-full-width-wrapper carousel-half-full-width-right">
                                <div class="owl-carousel owl-theme carousel-half-full-width-right nav-bottom nav-bottom-align-left nav-lg nav-transparent nav-borders-light nav-arrow-light rounded-nav mb-2 owl-loaded owl-drag owl-carousel-init"
                                    data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 4}, '1200': {'items': 5}}, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'margin': 20}"
                                    style="width: auto; height: auto;">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-1803px, 0px, 0px); transition: 0.25s; width: 5400px;">

                                            @foreach ($products as $product)
                                                <div class="owl-item" style="margin-right: 20px;">
                                                    <div class="box-shadow-7 border-radius-2 overflow-hidden">
                                                        <span
                                                            class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                                            <span
                                                                class="thumb-info-wrapper overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                                <a href="{{ $product->url }}">
                                                                    <img class="default-img img-fluid productsheight"
                                                                        src="{{ RvMedia::getImageUrl($product->image) }}"
                                                                        alt="{{ $product->name }}">
                                                                </a>
                                                            </span>
                                                            <span class="thumb-info-content">
                                                                <span class="thumb-info-content-inner bg-light p-4"
                                                                    style="height: 182px!important;">
                                                                    <h4 class="text-5 mb-2 ">{{ $product->name }}</h4>
                                                                    @if (!function_exists('html_limit'))
                                                                        @php
                                                                            function html_limit($html, $maxLength = 50)
                                                                            {
                                                                                $content = strip_tags($html);
                                                                                $limited = \Illuminate\Support\Str::limit(
                                                                                    $content,
                                                                                    $maxLength,
                                                                                );
                                                                                return $limited;
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                    <p class="lblp">
                                                                        {!! html_limit($product->content, 50) !!}
                                                                    </p>
                                                                    <span
                                                                        class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                                        <a href="{{ $product->url }}"
                                                                            class="text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">Read
                                                                            More</a>
                                                                        <a href="{{ $product->url }}"
                                                                            class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7">
                                                                            <span
                                                                                class="p-static bg-transparent transform-none"><i
                                                                                    class="fa-solid fa-arrow-right text-dark"></i></span>
                                                                        </a>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach



                                        </div>
                                    </div>
                                    <div class="owl-nav disabled"><button type="button" role="presentation"
                                            class="owl-prev"></button><button type="button" role="presentation"
                                            class="owl-next"></button></div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div> --}}


<!-- portfolio area start -->
<!-- portfolio area start -->
<section id="homeportfolio" class="rs-portfolio-area section-space-top rs-portfolio-one rs-swiper primary-bg"
    style="display: none;">

    <div class="container">
        <div class="row g-5 section-title-space align-items-end">
            <div class="col-xxl-7 col-xl-8 col-lg-8">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle has-theme-blue justify-content-start">
                        Products
                    </span>
                    <h2 class="rs-section-title has-theme-orange">
                        Explore Large-Scale Products
                    </h2>
                </div>
            </div>

            <div class="col-xxl-5 col-xl-4 col-lg-4" style="    margin-top: 0rem;">
                <div class="rs-portfolio-navigation">
                    <button class="swiper-button-prev rs-swiper-btn has-bg-light">
                        <i class="fa-regular fa-arrow-left"></i>
                    </button>
                    <button class="swiper-button-next rs-swiper-btn has-bg-light">
                        <i class="fa-regular fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="rs-portfolio-slider-wrapper">
                    <div class="swiper has-space portfolio-swiper" data-loop="true" data-speed="1500"
                        data-autoplay="true" data-hover-pause="true" data-delay="2500" data-item="4" data-item-xl="3"
                        data-item-lg="3" data-item-md="2" data-item-sm="1" data-item-xs="1" data-margin="30">

                        <div class="swiper-wrapper">
                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <div class="rs-portfolio-item">
                                        <div class="rs-portfolio-thumb">
                                            <img src="{{ RvMedia::getImageUrl($product->image) }}" alt="image">
                                        </div>

                                        <div class="rs-portfolio-content">
                                            <h4 class="rs-portfolio-title underline has-white">
                                                <a href="{{ $product->url }}" style="text-transform: capitalize;">
                                                    {{ $product->name }}
                                                </a>
                                            </h4>

                                            <div class="rs-portfolio-btn">
                                                <a href="{{ $product->url }}"
                                                    class="rs-btn has-theme-orange has-circle has-icon">
                                                    <span class="icon-box">
                                                        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 32 32">
                                                            <path
                                                                d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10Z" />
                                                        </svg>
                                                        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 32 32">
                                                            <path
                                                                d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10Z" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
     .ul-project-title {
            font-size: clamp(19px, 1.05vw, 20px) !important;
        }
        .ul-project-tag {

            color: #000;
        }
	@media (max-width: 767px) {
    .pbottom {
            padding-bottom: 20px !important;

    }
}
</style>
<!-- PROPERTIES SECTION START -->
<section class="ul-properties ul-section-spacing pbottom">
    <div class="ul-container">
        <!-- section heading -->
        <div class="ul-section-heading text-center justify-content-center wow animate__fadeInUp">
            <div>
                <span class="ul-section-sub-title">Projects</span>
                <h2 class="ul-section-title">Strategic locations. Trusted development.</h2>
            </div>
        </div>

        <div class="ul-properties-tab-navs wow animate__fadeInUp">
            <button class="tab-nav active" data-tab="tab-rent"> All</button>
            <button class="tab-nav" data-tab="tab-buy"> Ongoing</button>
			 <button class="tab-nav" data-tab="tab-up">Upcoming</button>
			            <button class="tab-nav" data-tab="tab-sell"> Sold Out</button>
        </div>

        <div class="tabs-wrapper wow animate__fadeInUp">

            <!-- 1st tab / All -->
            <div class="ul-tab active" id="tab-rent">
                <div class="row row-cols-2 ul-bs-row">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img">
                                    <a href="{{ $product->url }}">
                                        <img src="{{ RvMedia::getImageUrl($product->image, null, false, asset('images/no-image.png')) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                </div>

                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">
                                        {{ ucfirst($product->project_status ?? 'Available') }}
                                    </span>

                                    <div class="top">
                                        <div class="left">
                                            <a href="{{ $product->url }}" class="ul-project-title">
                                                {{ $product->name }}
                                            </a>
                                            {{-- <p class="ul-project-location"> --}}
                                                {{-- {!! $product->location ?? '' !!} --}}
                                            {{-- </p> --}}
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

            <!-- 2nd tab / Ongoing -->
            <div class="ul-tab" id="tab-buy">
                <div class="row row-cols-2 ul-bs-row">
                    @foreach ($products->where('project_status', 'ongoing') as $product)
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img">
                                    <a href="{{ $product->url }}">
                                        <img src="{{ RvMedia::getImageUrl($product->image, null, false, asset('images/no-image.png')) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                </div>

                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Ongoing</span>

                                    <div class="top">
                                        <div class="left">
                                            <a href="{{ $product->url }}" class="ul-project-title">
                                                {{ $product->name }}
                                            </a>
                                        
                                                {{-- {!!$product->location ?? '' !!} --}}
                                         
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
			
			<div class="ul-tab" id="tab-up">
                <div class="row row-cols-2 ul-bs-row">
                    @foreach ($products->where('project_status', 'upcoming') as $product)
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img">
                                    <a href="{{ $product->url }}">
                                        <img src="{{ RvMedia::getImageUrl($product->image, null, false, asset('images/no-image.png')) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                </div>

                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Upcoming</span>

                                    <div class="top">
                                        <div class="left">
                                            <a href="{{ $product->url }}" class="ul-project-title">
                                                {{ $product->name }}
                                            </a>
                                        
                                                {{-- {!!$product->location ?? '' !!} --}}
                                         
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

          <!-- 3rd tab / Sold Out -->
<div class="ul-tab" id="tab-sell">
    <div class="row row-cols-2 ul-bs-row">
        @forelse ($products->where('project_status', 'Sold Out') as $product)
            <div class="col">
                <div class="ul-project">
                    <div class="ul-project-img">
                        <a href="{{ $product->url }}">
                            <img src="{{ RvMedia::getImageUrl($product->image, null, false, asset('images/no-image.png')) }}"
                                alt="{{ $product->name }}">
                        </a>
                    </div>

                    <div class="ul-project-txt">
                        <span class="ul-project-tag">Sold Out</span>

                        <div class="top">
                            <div class="left">
                                <a href="{{ $product->url }}" class="ul-project-title">
                                    {{ $product->name }}
                                </a>
                                {{-- {!! $product->location ?? '' !!} --}}
                            </div>
                        </div>
                        <div class="ul-project-infos ul-featured-property-infos">

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-map"></i></span>
                                            <span
                                                class="text">{{ $product->plot_type ?? 'NA Residential Plots' }}</span>
                                        </div>

                                      

                                    </div>

                        <!-- bottom -->
                        {{-- <div class="ul-project-infos ul-featured-property-infos">
                            <div class="ul-project-info ul-featured-property-info">
                                <span class="icon"><i class="flaticon-map"></i></span>
                                <span class="text">{{ $product->plot_type ?? 'NA Residential Plots' }}</span>
                            </div>

                            <div class="ul-project-info ul-featured-property-info">
                                <span class="icon"><i class="flaticon-checked"></i></span>
                                <span class="text">{{ $product->approval ?? 'Government Approved' }}</span>
                            </div>

                            <div class="ul-project-info ul-featured-property-info">
                                <span class="icon"><i class="flaticon-growth"></i></span>
                                <span class="text">{{ $product->growth_zone ?? 'High Appreciation Zone' }}</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
    @empty
    <div class="col-12 text-center">
        <h2 class="no-projects-text">No Projects Available</h2>
    </div>
@endforelse
    </div>
</div>

        </div>

        <div class="text-center wow animate__fadeInUp" >
            <a href="{{ url('projects') }}" class="ul-btn ul-properties-btn">View All Projects</a>
        </div>
    </div>
</section>
<style>
    .no-projects-text {
    font-size: 32px;
    font-weight: 700;
}

</style>

<!-- PROPERTIES SECTION END -->

<!-- portfolio area end -->
