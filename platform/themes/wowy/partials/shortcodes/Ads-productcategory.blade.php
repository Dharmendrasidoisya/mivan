


       <!-- BREADCRUMB SECTION START -->
        <div class="ul-breadcrumb">
            <div class="wow animate__fadeInUp">
                <h2 class="ul-breadcrumb-title">Property</h2>
                <div class="ul-breadcrumb-nav">
                    <a href="{{ BaseHelper::getHomepageUrl() }}">Home</a>
                    <span class="separator"><i class="flaticon-aro-left"></i></span>
                    <span class="current-page">Property</span>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB SECTION END -->

       <!-- PROPERTIES SECTION START -->
      <section class="ul-properties ul-section-spacing">
    <div class="ul-container">
        <!-- section heading -->
        {{-- <div class="ul-section-heading text-center justify-content-center wow animate__fadeInUp">
            <div>
                <span class="ul-section-sub-title">Our Properties</span>
                <h2 class="ul-section-title">High-Growth Investment Opportunities in Dholera</h2>
            </div>
        </div> --}}

        <div class="ul-properties-tab-navs wow animate__fadeInUp">
            <button class="tab-nav active" data-tab="tab-rent"><i class="flaticon-key"></i> All</button>
            <button class="tab-nav" data-tab="tab-buy"><i class="flaticon-buy"></i> Ongoing</button>
            <button class="tab-nav" data-tab="tab-sell"><i class="flaticon-house-2"></i> Sold Out</button>
        </div>

        <div class="tabs-wrapper wow animate__fadeInUp">

            <!-- 1st tab / All -->
            <div class="ul-tab active" id="tab-rent">
                <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
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
                                            <p class="ul-project-location">
                                                {{ $product->location ?? '' }}
                                            </p>
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

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-checked"></i></span>
                                            <span
                                                class="text">{{ $product->approval ?? 'Government Approved' }}</span>
                                        </div>

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-growth"></i></span>
                                            <span
                                                class="text">{{ $product->growth_zone ?? 'High Appreciation Zone' }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- 2nd tab / Ongoing -->
            <div class="ul-tab" id="tab-buy">
                <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
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
                                            <p class="ul-project-location">
                                                {{ $product->location ?? '' }}
                                            </p>
                                        </div>

                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn">
                                                <i class="flaticon-heart"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-map"></i></span>
                                            <span
                                                class="text">{{ $product->plot_type ?? 'NA Residential Plots' }}</span>
                                        </div>

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-checked"></i></span>
                                            <span
                                                class="text">{{ $product->approval ?? 'Government Approved' }}</span>
                                        </div>

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-growth"></i></span>
                                            <span
                                                class="text">{{ $product->growth_zone ?? 'High Appreciation Zone' }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- 3rd tab / Sold Out -->
            <div class="ul-tab" id="tab-sell">
                <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                    @foreach ($products->where('project_status', 'Sold Out') as $product)
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
                                            <a href="{{ $product->url }} " class="ul-project-title">
                                                {{ $product->name }}
                                            </a>
                                            <p class="ul-project-location">
                                                {{ $product->location ?? '' }}
                                            </p>
                                        </div>

                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn">
                                                <i class="flaticon-heart"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-map"></i></span>
                                            <span
                                                class="text">{{ $product->plot_type ?? 'NA Residential Plots' }}</span>
                                        </div>

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-checked"></i></span>
                                            <span
                                                class="text">{{ $product->approval ?? 'Government Approved' }}</span>
                                        </div>

                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-growth"></i></span>
                                            <span
                                                class="text">{{ $product->growth_zone ?? 'High Appreciation Zone' }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
{{-- 
        <div class="text-center wow animate__fadeInUp">
            <a href="{{ url('property') }}" class="ul-btn ul-properties-btn">View All Properties</a>
        </div> --}}
    </div>
</section>
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
                                        <img src="assets/img/app-ad-ss-2.jpg" alt="App Screenshot"
                                            class="ul-app-ad-ss-2">
                                    </div>

                                    <!-- vector -->
                                    <img src="assets/img/app-ad-img-vector.svg" alt="vector" class="vector">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- team area end -->


        
