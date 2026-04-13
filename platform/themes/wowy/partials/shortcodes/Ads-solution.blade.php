<div class="page-header py-0 bg-tertiary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden"
    style="display:none;">
    <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
        <div class="custom-el-5 custom-pos-4">
            <img class="img-fluid opacity-2 opacity-hover-2"
                src="{{ asset('themes/wowy/ads/img/demos/accounting-1/svg/waves.svg') }}" alt="waves">
        </div>
    </div>
    <div class="container-fluid p-relative z-index-1 py-2">
        <div class="row mh-200px mh-lg-300px align-items-center py-4">
            <div class="col" style="text-align:center;">
                <div class="appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0"
                    style="animation-delay: 0ms;">
                    <span
                        class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span
                            class="d-inline-flex py-1 px-2">Our Solutions</span></span>
                </div>
                <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
                    data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Solutions
                    </h1>
                </div>
                <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
                    data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                        <li><a href="{{ BaseHelper::getHomepageUrl() }}"
                                class="text-light text-decoration-none">Home</a></li>
                        <li class="active text-color-light opacity-7">Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- {!! Theme::partial('shortcodes.Ads-home-icons') !!} --}}
<div class="container-fluid  pt-5" id="intro" style="display: none;">

    <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                @if ($headertitle)
                    <p class="pe-lg-5 ">{!! BaseHelper::clean($headertitle) !!}</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div class="bg-grey-100 my-5 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden" style="display:none;">
    <div class="container-fluid ">
        <div class="row py-5">
            <div class="col" style="padding-top: 2rem !important;">
                <div class="sort- sort-destination-loader-showing mt-4 pt-2">
                    <div class="row portfolio-list sort-destination overflow-visible">
                        @foreach ($solution as $solutions)
                            <div class="col-12 col-sm-6 col-lg-3 isotope-item accounting">
                                <div class="portfolio-item">
                                    <div class="box-shadow-1 border-radius-2">
                                        <span
                                            class="thumb-info border-radius-2 bg-color-light thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="mb-1">{{ $solutions->name }}</h4>
                                                    <p class="card-text text-3-5 mb-1">
                                                        {!! \Illuminate\Support\Str::limit($solutions->description, 80) !!}
                                                    </p>
                                                    <span
                                                        class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="{{ $solutions->url }}" class="font-weight-semibold">
                                                            Read More
                                                        </a>
                                                        <a href="{{ $solutions->url }}"
                                                            class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7">
                                                            <span class="p-static bg-transparent transform-none">
                                                                <i class="fa-solid fa-arrow-right text-dark"></i>
                                                            </span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
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


<div class="rs-testimonial-bg-thumb-wrapper" >
    <div class="rs-testimonial-bg-thumb" data-background="themes/wowy/ads/images/bg/testimonials-bg-01.png"> </div>

    <!-- testimonial area start -->
    <section class="rs-testimonial-area section-space rs-testimonial-one has-theme-blue rs-swiper" style="display:none;">
        <div class="container">
            <div class="row  g-5 section-title-space align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="rs-section-title-wrapper">
                        <span class="rs-section-subtitle justify-content-start has-theme-blue">
                            Testimonials
                        </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">What people say about
                            Industrie
                            company</h2>
                    </div>
                </div>
                <!-- <div class="col-xl-5 col-lg-5">
                            <div class="rs-testimonial-btn">
                                <a class="rs-btn has-theme-blue has-icon has-bg" href="contact.html">More Reviews
                                    <span class="icon-box">
                                        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path
                                                d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                            </path>
                                        </svg>
                                        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path
                                                d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div> -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="1500"
                        data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="false"
                        data-delay="2500" data-item="3" data-item-xl="3" data-item-lg="3" data-item-md="2"
                        data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30" data-margin-xl="30">
                        <div class="swiper-wrapper">
                               @foreach ($solution as $solutions)
                            <div class="swiper-slide">
                                <div class="rs-testimonial-item">
                                    <div class="rs-testimonial-content">
                                        <div class="rs-testimonial-top">
                                            <div class="rs-testimonial-avater-wrapper">
                                                {{-- <div class="rs-testimonial-avater-thumb">
                                                    <img src="themes/wowy/ads/images/user/user-thumb-01.png"
                                                        alt="image">
                                                </div> --}}
                                                <div class="rs-testimonial-avater-info">
                                                    <h6 class="rs-testimonial-avater-title">{{ $solutions->name }}</h6>
                                                    <!-- <span class="rs-testimonial-avater-designation">Ceo</span> -->
                                                </div>
                                            </div>
                                            <!-- <div class="rs-testimonial-icon">
                                                        <img src="themes/wowy/ads/images/brand/brand-thumb-01.png" alt="image">
                                                    </div> -->
                                        </div>
                                        <div class="rs-testimonial-description">
                                            <p>  {!! \Illuminate\Support\Str::limit($solutions->description, 100) !!} </p>
                                        </div>
                                        <!-- <div class="rs-testimonial-rating-wrapper">
                                                    <div class="rs-rating">
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-half-line"></i></span>
                                                    </div>
                                                    <div class="rs-testimonial-quote">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="43"
                                                            viewBox="0 0 60 43" fill="none">
                                                            <path
                                                                d="M57.3913 0H33.913C32.4746 0 31.3043 1.14482 31.3043 2.55199V24.2439C31.3043 25.6511 32.4746 26.7959 33.913 26.7959H45V42.1077C45 42.7082 45.805 42.9717 46.1739 42.4907L59.8696 24.6267C59.9542 24.5163 60 24.382 60 24.2439V2.55199C60 1.14482 58.8299 0 57.3913 0ZM58.6957 24.0312L46.3043 40.1939V26.1579C46.3043 25.8055 46.0124 25.5199 45.6522 25.5199H33.913C33.1938 25.5199 32.6087 24.9475 32.6087 24.2439V2.55199C32.6087 1.84841 33.1938 1.276 33.913 1.276H57.3913C58.1105 1.276 58.6957 1.84841 58.6957 2.55199V24.0312ZM26.087 0H2.6087C1.17026 0 0 1.14482 0 2.55199V24.2439C0 25.6511 1.17026 26.7959 2.6087 26.7959H13.6957V42.1079C13.6957 42.7049 14.5004 42.9721 14.8696 42.4907L28.5652 24.6267C28.6499 24.5163 28.6957 24.382 28.6957 24.2439V2.55199C28.6957 1.14482 27.5254 0 26.087 0ZM27.3913 24.0312L15 40.1939V26.1579C15 25.8055 14.708 25.5199 14.3478 25.5199H2.6087C1.88948 25.5199 1.30435 24.9475 1.30435 24.2439V2.55199C1.30435 1.84841 1.88948 1.276 2.6087 1.276H26.087C26.8062 1.276 27.3913 1.84841 27.3913 2.55199V24.0312Z"
                                                                fill="#1F1F1F"></path>
                                                        </svg>
                                                    </div>
                                                </div> -->
                                    </div>
                                </div>
                            </div>
                                   @endforeach
                            {{-- <div class="swiper-slide">
                                <div class="rs-testimonial-item">
                                    <div class="rs-testimonial-content">
                                        <div class="rs-testimonial-top">
                                            <div class="rs-testimonial-avater-wrapper">
                                                <div class="rs-testimonial-avater-thumb">
                                                    <img src="themes/wowy/ads/images/user/user-thumb-01.png"
                                                        alt="image">
                                                </div>
                                                <div class="rs-testimonial-avater-info">
                                                    <h6 class="rs-testimonial-avater-title">John Wlick</h6>
                                                    <!-- <span class="rs-testimonial-avater-designation">Ceo</span> -->
                                                </div>
                                            </div>
                                            <!-- <div class="rs-testimonial-icon">
                                                        <img src="themes/wowy/ads/images/brand/brand-thumb-01.png" alt="image">
                                                    </div> -->
                                        </div>
                                        <div class="rs-testimonial-description">
                                            <p> More-or-less normal distribution of letters, as opposed to using
                                                content
                                                making
                                                it look like readable english. </p>
                                        </div>
                                        <!-- <div class="rs-testimonial-rating-wrapper">
                                                    <div class="rs-rating">
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-half-line"></i></span>
                                                    </div>
                                                    <div class="rs-testimonial-quote">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="43"
                                                            viewBox="0 0 60 43" fill="none">
                                                            <path
                                                                d="M57.3913 0H33.913C32.4746 0 31.3043 1.14482 31.3043 2.55199V24.2439C31.3043 25.6511 32.4746 26.7959 33.913 26.7959H45V42.1077C45 42.7082 45.805 42.9717 46.1739 42.4907L59.8696 24.6267C59.9542 24.5163 60 24.382 60 24.2439V2.55199C60 1.14482 58.8299 0 57.3913 0ZM58.6957 24.0312L46.3043 40.1939V26.1579C46.3043 25.8055 46.0124 25.5199 45.6522 25.5199H33.913C33.1938 25.5199 32.6087 24.9475 32.6087 24.2439V2.55199C32.6087 1.84841 33.1938 1.276 33.913 1.276H57.3913C58.1105 1.276 58.6957 1.84841 58.6957 2.55199V24.0312ZM26.087 0H2.6087C1.17026 0 0 1.14482 0 2.55199V24.2439C0 25.6511 1.17026 26.7959 2.6087 26.7959H13.6957V42.1079C13.6957 42.7049 14.5004 42.9721 14.8696 42.4907L28.5652 24.6267C28.6499 24.5163 28.6957 24.382 28.6957 24.2439V2.55199C28.6957 1.14482 27.5254 0 26.087 0ZM27.3913 24.0312L15 40.1939V26.1579C15 25.8055 14.708 25.5199 14.3478 25.5199H2.6087C1.88948 25.5199 1.30435 24.9475 1.30435 24.2439V2.55199C1.30435 1.84841 1.88948 1.276 2.6087 1.276H26.087C26.8062 1.276 27.3913 1.84841 27.3913 2.55199V24.0312Z"
                                                                fill="#1F1F1F"></path>
                                                        </svg>
                                                    </div>
                                                </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-testimonial-item">
                                    <div class="rs-testimonial-content">
                                        <div class="rs-testimonial-top">
                                            <div class="rs-testimonial-avater-wrapper">
                                                <div class="rs-testimonial-avater-thumb">
                                                    <img src="themes/wowy/ads/images/user/user-thumb-01.png"
                                                        alt="image">
                                                </div>
                                                <div class="rs-testimonial-avater-info">
                                                    <h6 class="rs-testimonial-avater-title">John Wlick</h6>
                                                    <!-- <span class="rs-testimonial-avater-designation">Ceo</span> -->
                                                </div>
                                            </div>
                                            <!-- <div class="rs-testimonial-icon">
                                                        <img src="themes/wowy/ads/images/brand/brand-thumb-01.png" alt="image">
                                                    </div> -->
                                        </div>
                                        <div class="rs-testimonial-description">
                                            <p> More-or-less normal distribution of letters, as opposed to using
                                                content
                                                making
                                                it look like readable english. </p>
                                        </div>
                                        <!-- <div class="rs-testimonial-rating-wrapper">
                                                    <div class="rs-rating">
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-fill"></i></span>
                                                        <span><i class="ri-star-half-line"></i></span>
                                                    </div>
                                                    <div class="rs-testimonial-quote">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="43"
                                                            viewBox="0 0 60 43" fill="none">
                                                            <path
                                                                d="M57.3913 0H33.913C32.4746 0 31.3043 1.14482 31.3043 2.55199V24.2439C31.3043 25.6511 32.4746 26.7959 33.913 26.7959H45V42.1077C45 42.7082 45.805 42.9717 46.1739 42.4907L59.8696 24.6267C59.9542 24.5163 60 24.382 60 24.2439V2.55199C60 1.14482 58.8299 0 57.3913 0ZM58.6957 24.0312L46.3043 40.1939V26.1579C46.3043 25.8055 46.0124 25.5199 45.6522 25.5199H33.913C33.1938 25.5199 32.6087 24.9475 32.6087 24.2439V2.55199C32.6087 1.84841 33.1938 1.276 33.913 1.276H57.3913C58.1105 1.276 58.6957 1.84841 58.6957 2.55199V24.0312ZM26.087 0H2.6087C1.17026 0 0 1.14482 0 2.55199V24.2439C0 25.6511 1.17026 26.7959 2.6087 26.7959H13.6957V42.1079C13.6957 42.7049 14.5004 42.9721 14.8696 42.4907L28.5652 24.6267C28.6499 24.5163 28.6957 24.382 28.6957 24.2439V2.55199C28.6957 1.14482 27.5254 0 26.087 0ZM27.3913 24.0312L15 40.1939V26.1579C15 25.8055 14.708 25.5199 14.3478 25.5199H2.6087C1.88948 25.5199 1.30435 24.9475 1.30435 24.2439V2.55199C1.30435 1.84841 1.88948 1.276 2.6087 1.276H26.087C26.8062 1.276 27.3913 1.84841 27.3913 2.55199V24.0312Z"
                                                                fill="#1F1F1F"></path>
                                                        </svg>
                                                    </div>
                                                </div> -->
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area start -->
            <section class="rs-brand-area rs-brand-one section-space-bottom has-theme-blue rs-swiper">
                <div class="container">
                    <div class="row  g-5 section-title-space justify-content-center">
                        <div class="col-xl-7 col-lg-7">
                            <div class="rs-section-title-wrapper text-center">
                                <span class="rs-section-subtitle">
                                    Partners
                                </span>
                                <h2 class="rs-section-title rs-split-text-enable split-in-fade">Partners Who Trust
                                    Industries
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="rs-brand-wrapper">
                                <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="1500"
                                    data-autoplay="false" data-dots-dynamic="false" data-center-mode="false"
                                    data-hover-pause="true" data-effect="false" data-delay="1500" data-item="6"
                                    data-item-xl="4" data-item-lg="4" data-item-md="3" data-item-sm="2" data-item-xs="2"
                                    data-item-mobile="1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="rs-brand-item">
                                                <div class="rs-brand-thumb">
                                                    <img src="themes/wowy/ads/img/logos
/logoc.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="rs-brand-item">
                                                <div class="rs-brand-thumb">
                                                    <img src="themes/wowy/ads/img/logo2.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="rs-brand-item">
                                                <div class="rs-brand-thumb">
                                                    <img src="themes/wowy/ads/images/brand/brand-thumb-18.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="rs-brand-item">
                                                <div class="rs-brand-thumb">
                                                    <img src="themes/wowy/ads/images/brand/brand-thumb-19.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="rs-brand-item">
                                                <div class="rs-brand-thumb">
                                                    <img src="themes/wowy/ads/images/brand/brand-thumb-20.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="rs-brand-item">
                                                <div class="rs-brand-thumb">
                                                    <img src="themes/wowy/ads/images/brand/brand-thumb-16.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- brand area end -->
</div>




    <!-- testimonial area start -->


      
