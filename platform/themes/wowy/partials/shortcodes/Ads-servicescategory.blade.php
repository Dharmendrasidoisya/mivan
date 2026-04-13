<!-- breadcrumb area start -->
{{-- <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
    <div class="rs-breadcrumb-bg" data-background="themes/wowy/ads/images/bg/breadcrumb-bg-01.png"></div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 col-lg-8">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper">
                        <h1 class="rs-breadcrumb-title">Services</h1>
                    </div>
                    <div class="rs-breadcrumb-menu">
                        <nav>
                            <ul>
                                <li><span><a href="{{ BaseHelper::getHomepageUrl() }}">Home</a></span></li>
                                <li><span>Services</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<div class="ul-breadcrumb">
    <div class="wow animate__fadeInUp">
        <h2 class="ul-breadcrumb-title">Projects</h2>
        <div class="ul-breadcrumb-nav">
            <a href="{{ BaseHelper::getHomepageUrl() }}">Home</a>
            <span class="separator"><i class="flaticon-aro-left"></i></span>
            <span class="current-page">Projects</span>
        </div>
    </div>
</div>




<section class="rs-team-area section-space rs-team-one" style="display: none;">
    <div class="container">
        <div class="row g-5">
            @foreach ($productcategory as $servicescategorys)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-team-item">

                        {{-- Image --}}
                        <div class="rs-team-thumb has-clip">
                            <a href="{{ $servicescategorys->url }}">
                                <img src="{{ RvMedia::getImageUrl($servicescategorys->image) }}"
                                    alt="{{ $servicescategorys->name }}">
                            </a>


                        </div>

                        {{-- Content --}}
                        <div class="rs-team-content-wrapper">
                            <div class="rs-team-content-box">
                                <h5 class="rs-team-title rs-services-desc">
                                    <a href="{{ $servicescategorys->url }}">
                                        {{ $servicescategorys->name }}
                                    </a>
                                </h5>

                                <span class="rs-team-designation">
                                    {!! \Illuminate\Support\Str::limit($servicescategorys->description, 90) !!}
                                </span>
                                <div class="rs-blog-tag has-theme-blue">
                                    <a class="rs-btn has-theme-blue has-bg has-icon"
                                        href="{{ $servicescategorys->url }}">Read
                                        More
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 32 32">
                                                <path
                                                    d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                </path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 32 32">
                                                <path
                                                    d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- FEATURED PROPERTIES SECTION START -->
<div class="ul-inner-page-content-wrapper">
    <div class="ul-inner-page-container">

        @foreach ($productcategory as $index => $step)
            <div class="ul-hiw-step wow animate__fadeInUp
                {{ $index % 2 != 0 ? 'ul-hiw-step-reverse' : '' }}">

                <!-- TEXT -->
                <div class="ul-hiw-step-txt">
                    <div class="ul-hiw-step-txt-wrapper">
                        <span class="ul-hiw-step-vertical-txt">Dholera SIR Projects</span>

                        <div class="ul-hiw-step-txt-right">
                            <h3 class="ul-hiw-step-title">
                                <a href="{{ $step->url }}">
                                    {{ $step->name }}
                                </a>
                            </h3>

                            <p class="ul-hiw-step-descr">
                                {{ $step->description }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- IMAGE -->
                <div class="ul-hiw-step-img">
                    <a href="{{ $step->url }}">
                        <img src="{{ RvMedia::getImageUrl($step->image) }}"
                             alt="{{ $step->name }}">
                    </a>
                </div>

            </div>
        @endforeach

    </div>
</div>

<style>
     .ul-hiw-step-reverse {
        flex-direction: row-reverse;
    }
    .ul-hiw-step {
            align-items: center;
    }
    .ul-hiw-step:nth-child(even) {
         align-items: center;
    }
</style>

<!-- FEATURED PROPERTIES SECTION END -->
<!-- APP AD SECTION START -->
<div class="ul-app-ad wow animate__fadeInUp">
    <div class="ul-app-ad-container">
        <div class="ul-app-ad-content">
            <div class="row align-items-start gy-5">
                <!-- txt -->
                <div class="col-lg-7">
                    <div class="ul-app-ad-txt">
                                           <a 
    href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices" 
    target="_blank"
    style="text-decoration: none;">
    <span class="ul-btn ul-blogs-heading-btn">Enquire Now</span>
</a>

                      <a 
    href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices" 
    target="_blank"
    style="text-decoration: none; color: inherit;">
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



<!-- breadcrumb area end -->
