  <!-- breadcrumb area start -->
  <div class="ul-breadcrumb">
      <div class="wow animate__fadeInUp">
          <h2 class="ul-breadcrumb-title">{!! $post->name !!} </h2>
          <div class="ul-breadcrumb-nav">
              <a href="{{ BaseHelper::getHomepageUrl() }}">Home</a>
              <span class="separator"><i class="flaticon-aro-left"></i></span>
              <span class="current-page">Blogs</span>
              <span class="separator"><i class="flaticon-aro-left"></i></span>
              <span class="current-page">{!! $post->name !!} </span>

          </div>
      </div>
  </div>
  <!-- breadcrumb area end -->

  <!-- team details area start -->
  <!-- services details area start -->
  <section class="rs-services-area section-space " style="display:none;">
      <div class="container">
          <div class="row g-5">
              <div class="col-xl-8 col-lg-8">
                  <div class="rs-services-details-wrapper">
                      <div class="rs-services-details-thumb">
                          <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                              alt="image">
                      </div>
                      {!! $post->content !!}
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4">
                  <div class="rs-sidebar-wrapper rs-sidebar-sticky">


                      <div class="sidebar-widget widget-categories-two has-content-none mb-30">
                          <h5 class="mb-25 sidebar-widget-title">Realted Blogs</h5>

                          @if ($relatedblogs->isNotEmpty())
                              <ul>
                                  @foreach ($relatedblogs as $service)
                                      <li>
                                          <a style="text-transform: capitalize;"
                                              href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($service->name)))) }}">
                                              {!! $service->name !!}
                                              <i class="ri-arrow-right-line"></i>
                                          </a>
                                      </li>
                                  @endforeach
                              </ul>
                          @else
                              <p class="text-muted">No Blogs available</p>
                          @endif
                      </div>






                      {{-- <div class="sidebar-widget widget-download mb-30">
                          <h5 class="mb-25 sidebar-widget-title">Download Brochure</h5>

                          <ul>
                              <li>
                                  <a href="http://127.0.0.1:8000/storage/avinashi-infratech-logo-final.pdf"
                                      target="_blank" download>
                                      <div class="left">
                                          <span>
                                              <img src="http://127.0.0.1:8000/themes/wowy/ads/images/icon/pdf.svg"
                                                  alt="PDF">
                                          </span>
                                          avinashi-infratech-logo-final.pdf
                                      </div>

                                  </a>
                              </li>
                          </ul>
                      </div> --}}




                  </div>
              </div>

          </div>
      </div>
  </section>




  <!-- BLOG SECTION START -->
  <div class="ul-inner-page-container">
      <div class="ul-inner-page-content-wrapper">
          <div class="row ul-bs-row gy-5">
              <!-- left/blog details -->
              <div class="col-lg-8 col-md-7">
                  <div class="ul-blog-details ul-blog--inner-2 mb-0">
                      <div class="ul-blog">
                          <div class="ul-blog-img">
                              <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                  alt="Blog Image">
                              <!-- date -->
                              {{-- <div class="date">
                                        <span class="number">15</span>
                                        <span class="txt">Dec</span>
                                    </div> --}}
                          </div>

                          <div class="ul-blog-txt">

                              <h3 class="ul-blog-details-title"> {!! $post->name !!}</h3>
                              {!! $post->content !!}


                          </div>


                      </div>
                  </div>
              </div>

              <!-- sidebar -->
              <div class="col-lg-4 col-md-5">
                  <div class="ul-blog-sidebar">


                      <!-- single widget / Categories -->
                      {{-- <div class="ul-blog-sidebar-widget categories">
                                <h3 class="ul-blog-sidebar-widget-title ul-service-details-sidebar-widget-title">Categories</h3>
                                <div class="ul-blog-sidebar-widget-content">
                                    <div class="ul-blog-sidebar-categories">
                                        <a href="blog.html">Product Presentation <span>(08)</span></a>
                                        <a href="blog.html">Dedicated Video Call <span>(11)</span></a>
                                        <a href="blog.html">Trending Challenge <span>(18)</span></a>
                                        <a href="blog.html">Dance Awarness <span>(11)</span></a>
                                        <a href="blog.html">Photography <span>(07)</span></a>
                                    </div>
                                </div>
                            </div> --}}

                      <!-- single widget / Recent Posts -->
                      <div class="ul-blog-sidebar-widget posts">
                          <h3 class="ul-blog-sidebar-widget-title ul-service-details-sidebar-widget-title">Related Blogs
                          </h3>

                          <div class="ul-blog-sidebar-widget-content">
                              <div class="ul-blog-sidebar-posts">

                                  @if ($relatedblogs->isNotEmpty())
                                      @foreach ($relatedblogs as $blog)
                                          <div class="ul-blog-sidebar-post">
                                              <div class="img">
                                                  <a
                                                      href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($blog->name)))) }}">
                                                      <img src="{{ RvMedia::getImageUrl($blog->image, null, false, asset('images/no-image.png')) }}"
                                                          alt="{{ $blog->name }}">
                                                  </a>
                                              </div>

                                              <div class="txt">


                                                  <h4 class="title">
                                                      <a
                                                          href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($blog->name)))) }}">{!! $blog->name !!}</a>
                                                  </h4>
                                              </div>
                                          </div>
                                      @endforeach
                                  @else
                                      <p class="text-muted">No Blogs available</p>
                                  @endif

                              </div>
                          </div>

                      </div>

                      <!-- single widget / Recommended Topics -->
                      {{-- <div class="ul-blog-sidebar-widget tags">
                                <h3 class="ul-blog-sidebar-widget-title ul-service-details-sidebar-widget-title">Tags</h3>
                                <div class="ul-blog-sidebar-widget-content">
                                    <div class="ul-blog-sidebar-tags">
                                        <a href="blog-2.html">Marketing</a>
                                        <a href="blog-2.html">Agency</a>
                                        <a href="blog-2.html">Search Engine</a>
                                        <a href="blog-2.html">AI</a>
                                        <a href="blog-2.html">Influencer</a>
                                        <a href="blog-2.html">Advertising</a>
                                        <a href="blog-2.html">Branding</a>
                                    </div>
                                </div>
                            </div> --}}
                  </div>
              </div>
          </div>
      </div>
  </div>


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
                          <!-- <div class="ul-app-ad-btns">
                                    <button>
                                        <i class="flaticon-play"></i>
                                        <span>
                                            <span class="sub-title">Get in on</span>
                                            <span class="title">Apps Store</span>
                                        </span>
                                    </button>
                                    <button>
                                        <i class="flaticon-play"></i>
                                        <span>
                                            <span class="sub-title">Get in on</span>
                                            <span class="title">Google Play</span>
                                        </span>
                                    </button>
                                </div> -->
                      </div>
                  </div>

                  <!-- img -->
                  <div class="col-lg-5">
                      <div class="ul-app-ad-imgs">
                          <div class="ul-app-ad-img">

                              <img src="{{ asset('assets/img/app-ad-ss-2.jpg') }}" alt="App Screenshot"
                                  class="ul-app-ad-ss-2">
                          </div>

                          <!-- vector -->
                          <img src="{{ asset('assets/img/app-ad-img-vector.svg') }}" alt="vector" class="vector">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- BLOG SECTION END -->
