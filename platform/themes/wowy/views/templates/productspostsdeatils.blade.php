 @if ($posts)

  








     
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



  <!-- BLOG SECTION START -->
  <div class="ul-inner-page-container">
      <div class="ul-inner-page-content-wrapper">
          <div class="row ul-bs-row gy-5">
              <!-- left/blog details -->
              <div class="col-lg-7 col-md-7">
                  <div class="ul-blog-details ul-blog--inner-2 mb-0">
                      <div class="ul-blog">
                          <div class="ul-blog-img">
                          
                              <!-- date -->
                              {{-- <div class="date">
                                        <span class="number">15</span>
                                        <span class="txt">Dec</span>
                                    </div> --}}
                          </div>

                          <div class="ul-blog-txt">

                              <h3 class="ul-blog-details-title"> {!! $post->name !!}</h3>
                                  <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                  alt="Blog Image">
                              {!! $post->content !!}


                          </div>


                      </div>
                  </div>
              </div>

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
                          <h3 class="ul-blog-sidebar-widget-title ul-service-details-sidebar-widget-title">Related Property
                          </h3>

                          <div class="ul-blog-sidebar-widget-content">
                              <div class="ul-blog-sidebar-posts">

                                  @if ($relatedblogs->isNotEmpty())
                                      @foreach ($relatedblogs as $blog)
                                          <div class="ul-blog-sidebar-post">
                                              <div class="img">
                                                  <a
                                                      href="{{ url('products/' . Str::slug(str_replace('&', '', html_entity_decode($blog->name)))) }}">
                                                      <img src="{{ RvMedia::getImageUrl($blog->image, null, false, asset('images/no-image.png')) }}"
                                                          alt="{{ $blog->name }}">
                                                  </a>
                                              </div>

                                              <div class="txt">


                                                  <h4 class="title">
                                                      <a
                                                          href="{{ url('products/' . Str::slug(str_replace('&', '', html_entity_decode($blog->name)))) }}">{{ $blog->name }}</a>
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



   



   
 @else
     <?php
     
     $postIds = DB::table('post_categories')->where('category_id', $category->id)->pluck('post_id'); // Get only post IDs as an array
     $post = DB::table('servicesposts')->where('id', $category->id)->first();
     
     // Fetch posts that match the retrieved post IDs
     $posts = DB::table('servicesposts')->whereIn('id', $postIds)->get();
     $servicescategories = DB::table('servicescategories')->where('id', $category->id)->get();
     
     ?>
     @include(Theme::getThemeNamespace() . '::views.templates.servicespostsdeatils',
         compact('posts', 'servicescategories'))

 @endif
 
