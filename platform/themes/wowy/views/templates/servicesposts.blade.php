 @if ($servicescategories)

     <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
         <div class="rs-breadcrumb-bg" data-background="{{ asset('themes/wowy/ads/images/bg/breadcrumb-bg-01.png') }}">
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-xxl-6 col-xl-8 col-lg-8">
                     <div class="rs-breadcrumb-content-wrapper">
                         <div class="rs-breadcrumb-title-wrapper">
                             {{-- @if ($servicescategories->isNotEmpty()) --}}
                                 <h1 class="rs-breadcrumb-title"> {!! $servicescategories->first()->name !!}</h1>
                             {{-- @endif --}}
                         </div>
                         <div class="rs-breadcrumb-menu">
                             <nav>
                                 <ul>
                                     <li><span><a href="{{ BaseHelper::getHomepageUrl() }}">Home</a></span></li>
                                     <li><span><a href="{{ url('products') }}">Products</a></span></li>
                                     <li><span> {!! optional($servicescategories->first())->name !!}</span></li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <div class="container-fluid" id="intro">
         <div class="row align-items-center">

             <div class="col-lg-12 py-lg-5 pt-4">

                 <div class="appear-animation animated fadeInUpShorter appear-animation-visible"
                     data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                     style="animation-delay: 400ms;">
                     @if ($servicescategories->isNotEmpty())
                         @foreach ($servicescategories as $post)
                             <div class="service-description" style="text-align:center;font-size: 22px;margin-bottom: 10px;">
                                 {!! $post->shortdescription !!}
                             </div>
                         @endforeach
                     @else
                         <div class="col-12 text-center">
                             <p class="text-muted font-weight-bold">No data availablesss</p>
                         </div>
                     @endif
                 </div>


             </div>
         </div>
     </div>
     {{-- @if ($servicescategories->isNotEmpty()) --}}
     <!-- News -->
     @if ($posts->isNotEmpty())
         <section class="rs-team-area section-space rs-team-one">
             <div class="container">
                 <div class="row g-5">

                     @foreach ($posts as $post)
                         <div class="col-xl-4 col-lg-4 col-md-6">
                             <div class="rs-team-item">

                                 {{-- Image --}}
                                 <div class="rs-team-thumb has-clip">
                                     <a href="{{ Str::slug(str_replace('&', '', html_entity_decode($post->name))) }}">
                                         <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="{{ $post->name }}">
                                     </a>
                                 </div>

                                 {{-- Content --}}
                                 <div class="rs-team-content-wrapper">
                                     <div class="rs-team-content-box">
                                         <h5 class="rs-team-title">
                                             <a style="text-transform: capitalize;"
                                                 href="{{ Str::slug(str_replace('&', '', html_entity_decode($post->name))) }}">
                                                 {!! $post->name !!}
                                             </a>
                                         </h5>

                                         <span class="rs-services-desc">
                                             {{-- {!! \Illuminate\Support\Str::limit(strip_tags($post->content), 80) !!} --}}
                                             {!! $post->content !!}
                                         </span>
                                         <div class="rs-blog-tag has-theme-blue">
                                             <a class="rs-btn has-theme-blue has-bg has-icon"
                                                 href="{{ Str::slug(str_replace('&', '', html_entity_decode($post->name))) }}">Read
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
     @endif
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
 <style>
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
 </style>
 <style>
     .service-description p {
         font-size: 21px;
     }
 </style>
 {{-- @include(Theme::getThemeNamespace() . '::views.templates.servicesposts', ['children' => $category->activeChildren]) --}}
