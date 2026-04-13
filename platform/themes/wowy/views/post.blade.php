@php
    // dd($post);
    $layout = MetaBox::getMetaData($post, 'layout', true);
    $layout = $layout && in_array($layout, array_keys(get_blog_single_layouts())) ? $layout : 'blog-right-sidebar';
    Theme::layout($layout);
    $relatedPosts = get_related_posts($post->id, 5);
    // dd($relatedPosts);
    $related = DB::table('productsposts')->where('id', '!=', $post->id)->where('status', 'published')->get();
    // $posts = DB::table('posts')->where('status', 'published')->get();
    // dd($posts);
@endphp




<?php
$productslink = DB::table('settings')->where('key', 'permalink-botble-products-models-post')->value('value');
// dd($servicelink);
?>
<?php
// Check if the service post exists

$solutionlink = DB::table('settings')->where('key', 'permalink-botble-blog-models-post')->value('value');
// dd($servicelink);
?>
@if (request()->is($productslink . '/*'))
    <?php
    $posts = DB::table('productsposts')->where('id', $post->id)->get();
    
    $relatedblogs = DB::table('productsposts')->where('id', '!=', $post->id)->where('status', 'published')->get();
    // dd($post->id);
    // $posts = DB::table('servicesposts')->get();
    
    // $servicespostIds = DB::table('servicesposts')->pluck('id')->toArray(); // Extract only IDs
    // $postIds = DB::table('post_categories')->where('category_id', $servicespostIds)->pluck('post_id'); // Get only post IDs as an array
    //     // dd($postIds );
    //     // Fetch posts that match the retrieved post IDs
    //     $posts = DB::table('servicesposts')->whereIn('id', $postIds)->get();
    // // dd($posts);
    // $servicespostIds = DB::table('servicescategories')->pluck('id')->toArray(); // Extract only IDs
    // // dd($servicespostIds);
    
    // $postIds = DB::table('post_categories')
    //     ->whereIn('post_id', [$post->id]) // Convert to an array
    //     ->pluck('category_id');
    // // dd($postIds);
    //     $posts = DB::table('servicesposts')
    //     ->whereIn('id', $postIds) // Use whereIn to match multiple IDs
    //     ->orderBy('id', 'desc') // Order by ID in descending order
    //    // Limit the result to 4 records
    //     ->get();
    
    // $posts = DB::table('servicesposts')->whereIn('id', [$post->id])->get();
    
    // dd($posts);
    // dd($post->id);
    // $postIds = DB::table('post_categories')->where('post_id', $post->id)->pluck('post_id'); // Get only post IDs as an array
    // $categoryidfetch = DB::table('post_categories')->where('post_id', $post->id)->orderBy('post_id', 'desc')->get()->last(); // Get only post IDs as an array
    // $catid = $categoryidfetch->category_id;
    
    // $relatedid = DB::table('post_categories')->where('category_id', $catid)->pluck('post_id'); // Get only post IDs as an array
    
    // $posts = DB::table('servicesposts')->whereIn('id', $relatedid)->where('id', '!=', $post->id)->get();
    // dd($relatedpost);
    
    // $posts = DB::table('servicesposts')
    // ->whereIn('id', $postIds) // Use whereIn to match multiple IDs
    // ->orderBy('id', 'desc') // Order by ID in descending order
    // // Limit the result to 4 records
    // ->get();
    // dd($posts);
    // $posts = DB::table('servicesposts')->get();
    ?>

    @include(Theme::getThemeNamespace() . '::views.templates.productspostsdeatils')
@elseif(request()->is($solutionlink . '/*'))
    <?php
    $posts = DB::table('posts')->where('id', $post->id)->get();
    
    $relatedblogs = DB::table('posts')->where('id', '!=', $post->id)->where('status', 'published')->get();
    ?>
    @include(Theme::getThemeNamespace() . '::views.templates.blogdetils')
@else
    <style>
       
        img {
    max-width: -webkit-fill-available;
}
    </style>
    <div class="page-header py-0 bg-secondary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden"
        style="display: none;">
        <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
            <div class="custom-el-5 custom-pos-4">
                <img class="img-fluid opacity-2 opacity-hover-2"
                    src="{{ asset('themes/wowy/ads/img/demos/accounting-1/svg/waves.svg') }}" alt="waves">
            </div>
        </div>
        <div class="container-fluid p-relative z-index-1 py-2 ">
            <div class="row mh-200px mh-lg-300px align-items-center py-4">
                <div class="col" style="text-align:center;">
                    <div class="appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0"
                        style="animation-delay: 0ms;">
                        <span
                            class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span
                                class="d-inline-flex py-1 px-2">Our Blogs</span></span>
                    </div>
                    <div class="appear-animation animated fadeIn appear-animation-visible"
                        data-appear-animation="fadeIn" data-appear-animation-delay="200"
                        style="animation-delay: 200ms;">
                        <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">
                            {{ $post->name }}</h1>
                    </div>
                    <div class="appear-animation animated fadeIn appear-animation-visible"
                        data-appear-animation="fadeIn" data-appear-animation-delay="200"
                        style="animation-delay: 200ms;">
                        <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                            <li><a href="{{ BaseHelper::getHomepageUrl() }}"
                                    class="text-light text-decoration-none">Home</a></li>

                            <li class="active text-color-light opacity-7">{{ $post->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  pt-5 border-bottom border-bottom-color-grey-100 " style="display: none;">

        <div class="row">
            {{-- @foreach ($relatedPosts as $relatedItem) --}}
            <div class="col-lg-8 mb-5 mb-lg-0">
                <style>
                    @media screen and (min-device-width: 1367px) and (max-device-width: 1440px) {
                        .smallscreen {
                            height: 470px !important;
                            width: 870px !important;
                        }
                    }
                </style>
                <article>
                    <div class="card border-0">
                        <div class="card-body z-index-1 p-0">
                            <div class="post-image ">
                                <img class="card-img-top border-radius-2 smallscreen"
                                    src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                    alt="{{ $post->name }}" style="height: 507px;width: 762px;">
                            </div>

                            <div class="card-body pt-4 pb-4" style="padding: 0px;padding: 0rem;">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                </article>

            </div>
            {{-- @endforeach --}}

            <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0">
                <aside class="sidebar">
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>
                    <div class="px-3 mt-4">
                        <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>
                        <div class="pb-2 mb-1">
                            @foreach ($related as $relatedItem)
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                    <a href="{{ Str::slug($relatedItem->name) }}">
                                        <img src="{{ RvMedia::getImageUrl($relatedItem->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                            alt="img" width="70" height="70" class="widget-posts-img">
                                    </a>
                                    <a href="{{ Str::slug($relatedItem->name) }}"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 line-height-4">
                                        {!! $relatedItem->name !!}
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>



                </aside>
            </div>
        </div>

    </div>



    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative" style="display:none;">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('themes/wowy/ads/images/bg/breadcrumb-bg-01.png') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 col-lg-8">
                    <div class="rs-breadcrumb-content-wrapper">
                        <div class="rs-breadcrumb-title-wrapper">
                            <h1 class="rs-breadcrumb-title" style="text-transform: capitalize;">{{ $post->name }}
                            </h1>
                        </div>
                        <div class="rs-breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ BaseHelper::getHomepageUrl() }}">Home</a></span></li>
                                    <li><span><a href="{{ url('products') }}">Products</a></span></li>
                                    <li><span style="text-transform: capitalize;">{{ $post->name }}</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- team details area start -->
    <!-- services details area start -->
    <section class="rs-services-area section-space " style="display: none;">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-8 col-lg-8">
                    <div class="rs-services-details-wrapper">
                        <div class="rs-services-details-thumb">
                            <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                alt="image">
                        </div>
                        {!! $post->specification !!}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="rs-sidebar-wrapper rs-sidebar-sticky">

                        {{-- Our Services --}}
                        <div class="sidebar-widget widget-categories-two has-content-none mb-30">
                            <h5 class="mb-25 sidebar-widget-title">Realted Products</h5>

                            @if ($related->isNotEmpty())
                                <ul>
                                    @foreach ($related as $service)
                                        <li>
                                            <a href="{{ url('products/' . Str::slug(str_replace('&', '', html_entity_decode($service->name)))) }}"
                                                style="text-transform: capitalize;">
                                                {!! $service->name !!}
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">No services available</p>
                            @endif
                        </div>

                    

                        {{-- Download Brochures (optional dynamic later) --}}
                        {{-- @if (!empty($posts->pdf)) --}}
                        @if (!empty($post->pdf))
                            <div class="sidebar-widget widget-download mb-30">
                                <h5 class="mb-25 sidebar-widget-title">Download Brochure</h5>

                                <ul>
                                    <li>
                                        <a href="{{ RvMedia::getImageUrl($post->pdf) }}" target="_blank" download>
                                            <div class="left">
                                                <span>
                                                    <img src="{{ asset('themes/wowy/ads/images/icon/pdf.svg') }}"
                                                        alt="PDF">
                                                </span>
                                                {{ basename($post->pdf) }}
                                            </div>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif

                        {{-- @endif --}}


                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">{{ $post->name }}</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ BaseHelper::getHomepageUrl() }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">{{ $post->name }}</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">
        <div class="ul-inner-page-container">
           
            <div class="ul-project-details-body">
                <div class="row gy-5">
                    <!-- left -->
                    <div class="col-lg-12">
                    
                        <div class="ul-project-details-block wow animate__fadeIn">
    <div class="row align-items-start">
        
        <!-- Image Column -->
       <div class="col-lg-7 col-md-12 mb-3 mb-lg-0 position-relative">

    <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" 
         alt="Project Image" class="img-fluid rounded">

    <span class="ul-project-tag position-absolute">
        {{ ucfirst($post->project_status ?? 'Available') }}
    </span>

</div>

        <!-- Specification Column -->
        <div class="col-lg-5 col-md-12">
            <a href="#" class="ul-btn ul-properties-btn" style="display:none;">Live Plot</a>
            <h3 class="ul-project-details-title">Project Overview</h3>
            {!! $post->specification !!}
        </div>
      <div class="ul-project-details-block amenities-section">
    <h3 class="ul-project-details-title">Features & Amenities</h3>

    <div class="amenities-grid">
        <div class="amenity-item"><i class="flaticon-check-4"></i> Elegant Entry Gate</div>
        <div class="amenity-item"><i class="flaticon-check-4"></i> CCTV Surveillance System</div>
        <div class="amenity-item"><i class="flaticon-check-4"></i> Wide Internal Roads with Street Lights</div>
        <div class="amenity-item"><i class="flaticon-check-4"></i> Children Play Area</div>
        <div class="amenity-item"><i class="flaticon-check-4"></i> Landscaped Gardens</div>
        <div class="amenity-item"><i class="flaticon-check-4"></i> 24×7 Security with Security Cabin</div>
        <div class="amenity-item"><i class="flaticon-check-4"></i> Club House</div>
        <div class="amenity-item"><i class="flaticon-check-4"></i> Swimming Pool</div>
    </div>
</div>
<style>
    .ul-project-tag {
    top: 15px;
    left: 15px;
    background: #E0B65E;
    color: #fff;
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 4px;
    z-index: 10;
}

    .amenities-section {
    margin-top: 30px;
}

.amenities-section .ul-project-details-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
}

.amenities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 15px;
}

.amenity-item {
    background: #f8f9fa;
    padding: 12px 15px;
    border-radius: 8px;
    font-size: 15px;
    color: #333;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.amenity-item i {
    color: #E1B45F;
    font-size: 16px;
}

.amenity-item:hover {
    background: #e9f5ee;
    transform: translateY(-3px);
}

</style>


    </div>
</div>
                                  {!! $post->content !!}

                        <!-- overview -->
                        <?php
                        $plots = \DB::table('projectsposts')->where('id', $post->id)->get()->keyBy('plot');
                        // dd($plots);
                        ?>
                        {{-- <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Booking Open</h3>

                            <div id="plot-wrapper">
                                {!! $post->specification !!}
                            </div>
                        </div> --}}

                        {{-- <script>
                            const plotData = @json($plots);
                        </script>
                        <div id="plotTooltip"
                            style="
                                position:absolute;
                                display:none;
                                background:#fff;
                                border:1px solid #333;
                                padding:10px;
                                font-size:14px;
                                z-index:9999;
                                box-shadow:0 4px 10px rgba(0,0,0,.2);">
                        </div> --}}


                        

                        <!-- location -->
                        {{-- <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Location</h3>
                            <div class="ul-project-details-map wow animate__fadeInUp">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d70701.38296703255!2d72.195112!3d22.24836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f2451ff4100f9%3A0xaa2cd52f20110ead!2sDholera%2C%20Gujarat%20382455!5e1!3m2!1sen!2sin!4v1768304062627!5m2!1sen!2sin"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div> --}}

                        <!-- floor plan -->
                        {{-- <div class="ul-project-details-block wow animate__fadeIn">
                                <h3 class="ul-project-details-title">Floor Plan</h3>
                                <div class="ul-project-details-floor-plan wow animate__fadeInUp">
                                    <div class="row ul-bs-row">
                                        <div class="col-md-5">
                                            <div class="ul-project-details-floor-plan-img">
                                                <img src="{{asset('assets/img/floor-plan-img.png')}}" alt="Floor Plan Image">
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="ul-project-details-floor-plan-tabs-wrapper">
                                                <div class="ul-project-details-floor-plan-tab-navs">
                                                    <button class="ul-btn tab-nav active" data-tab="tab-first-floor">First Floor</button>
                                                    <button class="ul-btn tab-nav" data-tab="tab-second-floor">Second Floor</button>
                                                    <button class="ul-btn tab-nav" data-tab="tab-third-floor">Third Floor</button>
                                                </div>

                                                <div>
                                                    <!-- 1st tab -->
                                                    <div class="ul-tab active" id="tab-first-floor">
                                                        <p>Consectetur adipiscing elit. Pellentesque sed elit tempus, consectetur augue vel, venenatis neque. Suspendisse potenti. Nunc convallis nulla fringilla tellus dapibus lobortis. Nam in bibendum mi, at molestie tellus. Quisque molestie</p>
                                                        <p>Consectetur adipiscing elit. Pellentesque sed elit tempus, consectetur augue vel, venenatis neque. Suspendisse potenti. Nunc convallis nulla fringilla tellus dapibus lobortis. Nam in bibendum mi, at molestie tellus. Quisque molestie</p>
                                                    </div>
                                                    <!-- 2nd tab -->
                                                    <div class="ul-tab" id="tab-second-floor">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, eius! Sit mollitia quisquam et officiis aliquam quam suscipit dicta facere beatae qui nam harum, aspernatur unde repudiandae reprehenderit minima odio.</p>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima optio minus in assumenda corrupti ratione. Libero iusto architecto incidunt suscipit.</p>
                                                    </div>
                                                    <!-- 3rd tab -->
                                                    <div class="ul-tab" id="tab-third-floor">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perspiciatis quia numquam incidunt consequuntur laboriosam esse impedit nesciunt, illo architecto id aliquid at laudantium autem cupiditate voluptates, accusamus dolore quod.</p>
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis repudiandae id blanditiis voluptates tempore optio, doloribus obcaecati eligendi quam alias.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        <!-- customer review -->
                        {{-- <div class="ul-project-details-block wow animate__fadeIn">
                                <h3 class="ul-project-details-title">Customer Review</h3>
                                <div class="wow animate__fadeInUp">
                                    <!-- single review -->
                                    <div class="ul-project-details-review">
                                        <!-- reviewer image -->
                                        <div class="ul-project-details-review-reviewer-img">
                                            <img src="{{asset('assets/img/reviewer-img-1.png')}}" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-project-details-review-txt">
                                            <div class="header">
                                                <div class="left">
                                                    <h4 class="reviewer-name">Leslie Alexander</h4>
                                                    <h5 class="review-date">March 20, 2023 at 2:37 pm</h5>
                                                </div>

                                                <div class="right">
                                                    <div class="rating">
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <p>Phasellus eget fermentum mauris. Suspendisse nec dignissim nulla. Integer non quam commodo, scelerisque felis id, eleifend turpis. Phasellus in nulla quis erat tempor tristique eget vel purus.</p>
                                        </div>
                                    </div>

                                    <!-- single review -->
                                    <div class="ul-project-details-review">
                                        <!-- reviewer image -->
                                        <div class="ul-project-details-review-reviewer-img">
                                            <img src="{{asset('assets/img/reviewer-img-2.png')}}" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-project-details-review-txt">
                                            <div class="header">
                                                <div class="left">
                                                    <h4 class="reviewer-name">Leslie Alexander</h4>
                                                    <h5 class="review-date">March 20, 2023 at 2:37 pm</h5>
                                                </div>

                                                <div class="right">
                                                    <div class="rating">
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <p>Phasellus eget fermentum mauris. Suspendisse nec dignissim nulla. Integer non quam commodo, scelerisque felis id, eleifend turpis. Phasellus in nulla quis erat tempor tristique eget vel purus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        <!-- Add a review -->
                        <div
                            class="ul-project-details-block ul-project-details-review-form-wrapper wow animate__fadeIn" style="display: none;">
                            {{-- <h3 class="ul-project-details-title">Offer Letter</h3> --}}
                            <style>
                                .offer-wrapper {
                                    max-width: 820px;
                                    margin: auto;
                                    background: #fff;
                                    border: 2px solid #000;
                                    padding: 20px;
                                    font-family: Arial, sans-serif;
                                }

                                .offer-title {
                                    text-align: center;
                                    font-weight: bold;
                                    font-size: 18px;
                                    margin-bottom: 15px;
                                }

                                .offer-table {
                                    width: 100%;
                                    border-collapse: collapse;
                                    font-size: 14px;
                                }

                                .offer-table td {
                                    border: 1px solid #000;
                                    padding: 6px;
                                }

                                .offer-table input,
                                .offer-table select {
                                    width: 100%;
                                    border: none;
                                    outline: none;
                                }

                                .section-title {
                                    font-weight: bold;
                                    text-align: center;
                                    background: #f2f2f2;
                                }

                                .submit-btn {
                                    margin-top: 15px;
                                    text-align: center;
                                }

                                .submit-btn button {
                                    padding: 10px 25px;
                                    background: #000;
                                    color: #fff;
                                    border: none;
                                    cursor: pointer;
                                }

                                .preview-img {
                                    max-width: 200px;
                                    display: none;
                                    margin-top: 10px;
                                }
                            </style>

                            {{-- <div class="offer-wrapper">

                                <div class="offer-title">
                                    – Offer Letter
                                </div>

                                <form id="offerForm" enctype="multipart/form-data">

                                    <table class="offer-table">

                                        <tr>
                                            <td>Name</td>
                                            <td colspan="3"><input type="text" name="name"></td>
                                        </tr>

                                        <tr>
                                            <td>Contact No *</td>
                                            <td colspan="3"><input type="text" name="contact"></td>
                                        </tr>

                                        <tr>
                                            <td>Email ID</td>
                                            <td colspan="3"><input type="email" name="email"></td>
                                        </tr>

                                        <tr>
                                            <td>Select Plot No.</td>
                                            <td colspan="3">
                                                <select name="plot_no">
                                                    <option>Select Plot</option>
                                                    <option>P-101</option>
                                                    <option>P-102</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr class="section-title">
                                            <td>Plot Area</td>
                                            <td>Sq. Yard</td>
                                            <td colspan="2">Sq. Feet</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td><input type="number" name="sq_yard"></td>
                                            <td colspan="2"><input type="number" name="sq_feet"></td>
                                        </tr>

                                        <tr class="section-title">
                                            <td>Price</td>
                                            <td>Per Sq. Yard</td>
                                            <td colspan="2">Per Sq. Feet</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td><input type="number" name="price_sq_yard"></td>
                                            <td colspan="2"><input type="number" name="price_sq_feet"></td>
                                        </tr>

                                        <tr>
                                            <td>Total Payment</td>
                                            <td colspan="3"><input type="number" name="total_payment"> Rs.</td>
                                        </tr>

                                        <tr class="section-title">
                                            <td colspan="4">Option – 1 : Full Payment</td>
                                        </tr>

                                        <tr>
                                            <td>Down Payment (25%)</td>
                                            <td><input type="number" name="opt1_down"></td>
                                            <td colspan="2">Within One Month</td>
                                        </tr>

                                        <tr>
                                            <td>Rest Payment (75%)</td>
                                            <td><input type="number" name="opt1_rest"></td>
                                            <td colspan="2">Within Three Months</td>
                                        </tr>

                                        <tr class="section-title">
                                            <td colspan="4">Option – 2 : Installment</td>
                                        </tr>

                                        <tr>
                                            <td>Down Payment (25%)</td>
                                            <td><input type="number" name="opt2_down"></td>
                                            <td colspan="2">Within One Month</td>
                                        </tr>

                                        <tr>
                                            <td>12 Months Installments</td>
                                            <td colspan="3"><input type="number" name="install_12"></td>
                                        </tr>

                                        <tr>
                                            <td>24 Months Installments</td>
                                            <td colspan="3"><input type="number" name="install_24"></td>
                                        </tr>

                                        <tr>
                                            <td>Upload Offer Image</td>
                                            <td colspan="3">
                                                <input type="file" name="offer_image" id="offerImage">
                                                <img id="preview" class="preview-img">
                                            </td>
                                        </tr>

                                    </table>

                                    <div class="submit-btn">
                                        <button type="submit">Submit Offer</button>
                                    </div>

                                </form>

                            </div> --}}

                        </div>
                    </div>

                    <!-- right sidebar -->
                    {{-- <div class="col-lg-5">
                        <div class="offer-title">
                            {{ $post->name }} – Offer Letter
                        </div>

                        <form id="offerForm" enctype="multipart/form-data">

                            <table class="offer-table">

                                <tr>
                                    <td>Name</td>
                                    <td colspan="3"><input type="text" name="name"></td>
                                </tr>

                                <tr>
                                    <td>Contact No *</td>
                                    <td colspan="3"><input type="text" name="contact"></td>
                                </tr>

                                <tr>
                                    <td>Email ID</td>
                                    <td colspan="3"><input type="email" name="email"></td>
                                </tr>

                                <tr>
                                    <td>Select Plot No.</td>
                                    <td colspan="3">
                                        <select name="plot_no">
                                            <option>Select Plot</option>
                                            <option>P-101</option>
                                            <option>P-102</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr class="section-title">
                                    <td>Plot Area</td>
                                    <td>Sq. Yard</td>
                                    <td colspan="2">Sq. Feet</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="number" name="sq_yard"></td>
                                    <td colspan="2"><input type="number" name="sq_feet"></td>
                                </tr>

                                <tr class="section-title">
                                    <td>Price</td>
                                    <td>Per Sq. Yard</td>
                                    <td colspan="2">Per Sq. Feet</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="number" name="price_sq_yard"></td>
                                    <td colspan="2"><input type="number" name="price_sq_feet"></td>
                                </tr>

                                <tr>
                                    <td>Total Payment</td>
                                    <td colspan="3"><input type="number" name="total_payment"> Rs.</td>
                                </tr>

                                <tr class="section-title">
                                    <td colspan="4">Option – 1 : Full Payment</td>
                                </tr>

                                <tr>
                                    <td>Down Payment (25%)</td>
                                    <td><input type="number" name="opt1_down"></td>
                                    <td colspan="2">Within One Month</td>
                                </tr>

                                <tr>
                                    <td>Rest Payment (75%)</td>
                                    <td><input type="number" name="opt1_rest"></td>
                                    <td colspan="2">Within Three Months</td>
                                </tr>

                                <tr class="section-title">
                                    <td colspan="4">Option – 2 : Installment</td>
                                </tr>

                                <tr>
                                    <td>Down Payment (25%)</td>
                                    <td><input type="number" name="opt2_down"></td>
                                    <td colspan="2">Within One Month</td>
                                </tr>

                                <tr>
                                    <td>12 Months Installments</td>
                                    <td colspan="3"><input type="number" name="install_12"></td>
                                </tr>

                                <tr>
                                    <td>24 Months Installments</td>
                                    <td colspan="3"><input type="number" name="install_24"></td>
                                </tr>

                                <tr>
                                    <td>Upload Offer Image</td>
                                    <td colspan="3">
                                        <input type="file" name="offer_image" id="offerImage">
                                        <img id="preview" class="preview-img">
                                    </td>
                                </tr>

                            </table>

                            <div class="submit-btn">
                                <button type="submit">Submit Offer</button>
                            </div>

                        </form>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <style>
        .styled-table td {
            background: #cfe3a1;
            text-align: center;
            font-weight: 600;
            cursor: pointer;
            padding: 10px;
            border: 1px solid;
        }

        .styled-table td:hover {
            background: #9fc46b;
        }

        table {
            width: -webkit-fill-available;
        }

        @media only screen and (max-width: 600px) {
            #plot-wrapper {
                overflow: auto !important;
            }
              img {
                max-width: -webkit-fill-available !important;
                height: fit-content !important;
            }
        }
    </style>
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
                                <img src="{{ asset('assets/img/app-ad-ss-2.jpg') }}" alt="App Screenshot"
                                    class="ul-app-ad-ss-2">
                            </div>

                            <!-- vector -->
                            <img src="{{ asset('assets/img/app-ad-img-vector.svg') }}" alt="vector"
                                class="vector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const tooltip = document.getElementById('plotTooltip');

            document.querySelectorAll('td[data-plot]').forEach(td => {

                td.addEventListener('mouseenter', function(e) {
                    const plotNo = this.dataset.plot;
                    const data = plotData[plotNo];

                    if (!data) return;

                    tooltip.innerHTML = `
                <strong>Plot No:</strong> ${plotNo}<br>
                <strong>Area:</strong> ${data.area}<br>
                <strong>North:</strong> ${data.north}<br>
                <strong>South:</strong> ${data.south}<br>
                <strong>East:</strong> ${data.east}<br>
                <strong>West:</strong> ${data.west}<br>
                <strong>Price:</strong> ₹${data.price}<br>
                <strong>Client:</strong> ${data.client} <br>
                <strong>Status:</strong> ${data.status}
            `;

                    tooltip.style.display = 'block';
                });

                td.addEventListener('mousemove', function(e) {
                    tooltip.style.top = (e.pageY + 15) + 'px';
                    tooltip.style.left = (e.pageX + 15) + 'px';
                });

                td.addEventListener('mouseleave', function() {
                    tooltip.style.display = 'none';
                });

                td.addEventListener('click', function() {
                    const plotNo = this.dataset.plot;
                    alert('Clicked Plot ' + plotNo);
                });

            });

        });
    </script>





@endif
