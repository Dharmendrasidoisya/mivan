<!-- BREADCRUMB SECTION START -->
<div class="ul-breadcrumb">
    <div class="wow animate__fadeInUp">
        <h2 class="ul-breadcrumb-title">About Us</h2>
        <div class="ul-breadcrumb-nav">
            <a href="{{ BaseHelper::getHomepageUrl() }}">Home</a>
            <span class="separator"><i class="flaticon-aro-left"></i></span>
            <span class="current-page">About Us</span>
        </div>
    </div>
</div>
<!-- BREADCRUMB SECTION END -->

<div class="ul-inner-page-content-wrapper">
    <!-- ABOUT US SECTION START -->
    <section class="ul-why-choose-us wow animate__fadeInUp">
        <div class="ul-inner-page-container">
            <div class="row row-cols-lg-2 row-cols-1 align-items-center">

                <!-- Images -->
                <div class="col">
                    <div class="ul-why-choose-us-imgs">

                        <div class="img">
                            @if (!empty($icon))
                                <img src="{{ RvMedia::getImageUrl(BaseHelper::clean($icon)) }}"
                                    alt="Mivan Realty Vision">
                            @endif
                        </div>


                        <div class="img">
                            @if (!empty($icon2))
                                <img src="{{ RvMedia::getImageUrl(BaseHelper::clean($icon2)) }}"
                                    alt="Mivan Realty History">
                            @endif

                            <!-- IMAGE INSTEAD OF ICON -->
                            <div class="icon">
                                @if (!empty($icon3))
                                    <img src="{{ RvMedia::getImageUrl(BaseHelper::clean($icon3)) }}" alt="Mil Favicon"
                                        class="icon-img" style=" width: 60px;height: 60px;">
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Content -->
                <div class="col">
                    <div class="ul-why-choose-us-txt">
                        <h2 class="">About Us</h2>
                        @if ($title)
                            <h2 class="ul-section-title" style="display:none;">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                        @if ($shorttitle)
                            <!-- INTRO PARAGRAPH (FIRST) -->
                            <p class="ul-why-choose-us-heading-descr">
                                {!! BaseHelper::clean($shorttitle) !!}
                            </p>
                        @endif

                        <div class="ul-why-choose-us-list">

                            <!-- OUR VISION -->
                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-property"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Our Vision</h3>
                                    @if ($vision)
                                        <p class="ul-why-choose-us-heading-descr">
                                            {!! BaseHelper::clean($vision) !!}
                                        </p>
                                    @endif

                                </div>
                            </div>


                            <!-- WHY MIVAN REALTY -->
                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-change"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Why Mivan Realty</h3>

                                    @if ($mission)
                                        <p class="ul-why-choose-us-heading-descr">
                                            {!! BaseHelper::clean($mission) !!}
                                        </p>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ABOUT US SECTION END -->


    <style>
        .container-about {

            max-width: 1420px !important;
        }

        .strategic-advantage-section {
            padding: 50px 0;
            background: #f8f9fc;
        }

        .advantage-box {
            background: #fff;
            border-radius: 30px;
            padding: 60px 50px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
        }

        .advantage-title {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: #1e2a78;
            margin-bottom: 50px;
        }

        .advantage-box p {
            font-size: 16px;
            line-height: 1.9;
            color: #555;
            margin-bottom: 18px;
        }

        .advantage-image img {
            width: 100%;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .advantage-box {
                padding: 40px 25px;
            }

            .advantage-title {
                font-size: 26px;
            }
        }
    </style>

    <!-- ABOUT SECTION START -->
    <section class="ul-about ul-inner-about ul-section-spacing">
        <div class="ul-inner-page-container my-0 wow animate__fadeInUp">
            <div class="row row-cols-lg-2 row-cols-1 align-items-center ul-bs-row">
                <!-- txt -->
                <div class="col">
                    <div class="ul-about-txt ul-inner-about-txt">
                        <h2 class="ul-section-title">Our History</h2>
                        <div>

                            @if ($history)
                                <p class="ul-why-choose-us-heading-descr"> {!! BaseHelper::clean($history) !!}
                                </p>
                            @endif
                            @if ($history2)
                                <p class="ul-why-choose-us-heading-descr">
                                    {!! BaseHelper::clean($history2) !!}
                                </p>
                            @endif
                        </div>

                    </div>
                </div>

                <!-- img -->
                <div class="col" style="    padding-left: inherit;">
                    <div class="ul-about-img ul-inner-about-img"><img src="assets/img/about-img.png" alt="About Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->


    <style>
        .location-icon-section {
            padding: 50px 0;
            background: #f7f9ff;
        }

        .location-icon-section h2 {
            font-size: 32px;
            color: #1e2a78;
            font-weight: 700;
        }

        .location-icon-section .subtitle {
            color: #666;
        }

        .icon-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .icon-item {
            background: #fff;
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 15px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        }
    </style>


    <!-- APP AD SECTION START -->
    <div class="ul-app-ad wow animate__fadeInUp">
        <div class="ul-app-ad-container">
            <div class="ul-app-ad-content">
                <div class="row align-items-start gy-5">
                    <!-- txt -->
                    <div class="col-lg-7">
                        <div class="ul-app-ad-txt">
                            <a href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices"
                                target="_blank" style="text-decoration: none;">
                                <span class="ul-btn ul-blogs-heading-btn">Enquire Now</span>
                            </a>

                            <a href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices"
                                target="_blank" style="text-decoration: none; color: inherit;">
                                <h2 class="ul-section-title">
                                    Get a Free Dholera Investment Consultation
                                </h2>
                            </a>

                        </div>
                    </div>

                    <!-- img -->
                    <div class="col-lg-5">
                        <div class="ul-app-ad-imgs">

                            <div class="ul-app-ad-img">
                                <!-- app screenshot 2 -->
                                <img src="assets/img/app-ad-ss-2.jpg" alt="App Screenshot" class="ul-app-ad-ss-2">
                            </div>

                            <!-- vector -->
                            <img src="assets/img/app-ad-img-vector.svg" alt="vector" class="vector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
