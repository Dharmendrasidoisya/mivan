{{-- <style>
    .p-4 {
        padding: 1.4rem !important;
    }
</style> --}}

<style>
    .projecth {
        height: 140px;
    }

    @media only screen and (max-width: 600px) {
        .projecth {
            height: 50px !important;
        }

        .client {
            height: 100px !important;
        }
    }
</style>
<section class="ul-featured-properties ul-section-spacing">
    <!-- section title slider -->
    <div class="ul-featured-properties-title-slider splide projecth">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i>Why invest in Dholera Smart
                        City?
                    </h2>
                </li>
                <li class="splide__slide">
                    <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i>Why invest in Dholera Smart
                        City?
                    </h2>
                </li>
            </ul>
        </div>
    </div>

    <!-- properties slider -->
    <div class="ul-featured-properties-slider-wrapper wow animate__fadeInUp">
        <div class="ul-featured-properties-slider swiper">
            <div class="swiper-wrapper">
                <!-- single property slider item -->


                {{-- @foreach ($projects as $project)
                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn">
                                            <i class="flaticon-heart"></i>
                                        </button>
                                    </div>
                                </div>

                                <a href="{{ $project->url }}" class="ul-project-title" style="font-size: 24px;">
                                    {{ $project->name ?? 'No Name Found' }}
                                </a>
                            </div>

                            <div class="ul-project-img">
                                <a href="{{ $project->url }}">
                                <img src="{{ RvMedia::getImageUrl($project->image, null, false, asset('images/no-image.png')) }}"
                                    alt="Project Image" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}


                <!-- single property slider item -->
                <div class="swiper-slide">
                    <div class="ul-featured-property ul-project">
                        <div>
                            <div class="header">
                                <!-- <div class="left"><span class="index">02</span></div> -->
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i
                                            class="flaticon-heart"></i></button>
                                </div>
                            </div>
                            <a href="#" class="ul-project-title">ABCD Building</a>
                            <!-- <p class="">2821 Lake Sevilla, Palm Harbor, TX</p> -->
                        </div>
                        <div class="ul-project-img">
                            <img src="assets/img/abcd.png" alt="Project Image">
                            <!-- <span class="ul-project-tag">Popular</span> -->
                        </div>

                    </div>
                </div>

                <!-- single property slider item -->
                <div class="swiper-slide">
                    <div class="ul-featured-property ul-project">
                        <div>
                            <div class="header">
                                <!-- <div class="left"><span class="index">03</span></div> -->
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i
                                            class="flaticon-heart"></i></button>
                                </div>
                            </div>
                            <a href="#" class="ul-project-title">Six Lane Express Way</a>
                            <!-- <p class="">2821 Lake Sevilla, Palm Harbor, TX</p> -->
                        </div>
                        <div class="ul-project-img">
                            <img src="assets/img/six.png" alt="Project Image">
                            <!-- <span class="ul-project-tag">Popular</span> -->
                        </div>

                    </div>
                </div>

                <!-- single property slider item -->
                <div class="swiper-slide">
                    <div class="ul-featured-property ul-project">
                        <div>
                            <div class="header">
                                <!-- <div class="left"><span class="index">01</span></div> -->
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i
                                            class="flaticon-heart"></i></button>
                                </div>
                            </div>
                            <a href="#" class="ul-project-title" style="font-size: 24px;">Metro Train</a>
                            <!-- <p class="">2821 Lake Sevilla, Palm Harbor, TX</p> -->
                        </div>
                        <div class="ul-project-img">
                            <img src="assets/img/Train.png" alt="Project Image">
                            <!-- <span class="ul-project-tag">Popular</span> -->
                        </div>

                    </div>
                </div>

                <!-- single property slider item -->
                <div class="swiper-slide">
                    <div class="ul-featured-property ul-project">
                        <div>
                            <div class="header">
                                <!-- <div class="left"><span class="index">02</span></div> -->
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i
                                            class="flaticon-heart"></i></button>
                                </div>
                            </div>
                            <a href="#" class="ul-project-title">International Airport</a>
                            <!-- <p class="">2821 Lake Sevilla, Palm Harbor, TX</p> -->
                        </div>
                        <div class="ul-project-img">
                            <img src="assets/img/Airport.png" alt="Project Image">
                            <!-- <span class="ul-project-tag">Popular</span> -->
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ul-featured-property ul-project">
                        <div>
                            <div class="header">
                                <!-- <div class="left"><span class="index">02</span></div> -->
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i
                                            class="flaticon-heart"></i></button>
                                </div>
                            </div>
                            <a href="#" class="ul-project-title">Largest Solar Park</a>
                            <!-- <p class="">2821 Lake Sevilla, Palm Harbor, TX</p> -->
                        </div>
                        <div class="ul-project-img">
                            <img src="assets/img/solar.png" alt="Project Image">
                            <!-- <span class="ul-project-tag">Popular</span> -->
                        </div>

                    </div>
                </div>
                {{-- <div class="swiper-slide">
                            <div class="ul-featured-property ul-project">
                                <div>
                                    <div class="header">
                                        <!-- <div class="left"><span class="index">02</span></div> -->
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>
                                    <a href="#" class="ul-project-title">Uninterrupted Clean Water Supply</a>
                                    <!-- <p class="">2821 Lake Sevilla, Palm Harbor, TX</p> -->
                                </div>
                                <div class="ul-project-img">
                                    <img src="assets/img/project-6.png" alt="Project Image">
                                    <!-- <span class="ul-project-tag">Popular</span> -->
                                </div>

                            </div>
                        </div> --}}
            </div>
        </div>

        <!-- slider navigation -->
        <div class="ul-featured-properties-slider-nav ul-slider-nav">
            <button class="prev"><i class="flaticon-arrow"></i></button>
            <button class="next"><i class="flaticon-right-arrow"></i></button>
        </div>
    </div>
</section>
<!-- FEATURED PROPERTIES SECTION END -->



<!-- services area start -->

{{-- <style>
    .rs-services-desc {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 👈 only 3 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.6em;
        /* optional – spacing better lage */
        max-height: calc(1.6em * 3);
    }

    .rs-services-desc1 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 👈 only 3 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.6em;
        /* optional – spacing better lage */
        max-height: calc(1.6em * 1);
    }
</style> --}}
<!-- services area end -->

{{-- <section class="popular-categories bg-grey-9 section-padding-60" id="featured-product-categories">
    <div class="container wow fadeIn animated">
        <h3 class="section-title mb-30">{{ $title }}</h3>

        <div class="carousel-6-columns-cover position-relative">
            <div class="slider-arrow slider-arrow-2 carousel-6-columns-arrow" id="carousel-6-columns-categories-arrows"></div>
            <div class="carousel-slider-wrapper carousel-6-columns" id="carousel-6-columns-categories" data-slick="{{ json_encode([
                'autoplay' => $shortcode->is_autoplay == 'yes',
                'infinite' => $shortcode->infinite == 'yes' || $shortcode->is_infinite == 'yes',
                'autoplaySpeed' => (int)(in_array($shortcode->autoplay_speed, theme_get_autoplay_speed_options()) ? $shortcode->autoplay_speed : 3000),
                'speed' => 800,
            ]) }}">
                @foreach ($categories as $category)
                    <div class="card-1 border-radius-10 hover-up p-20">
                        <figure class="mb-30 img-hover-scale overflow-hidden">
                            <a href="{{ $category->url }}"><img src="{{ RvMedia::getImageUrl($category->image, 'product-thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $category->name }}" /></a>
                        </figure>
                        <h5><a href="{{ $category->url }}">{{ $category->name }}</a></h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}
