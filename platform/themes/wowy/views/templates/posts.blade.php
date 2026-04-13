 @if ($posts->isNotEmpty())
     <div class="page-header py-0 bg-secondary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden"
         style="display: none;">
         <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
             <div class="custom-el-5 custom-pos-4">
                 <img class="img-fluid opacity-2 opacity-hover-2"
                     src="{{ asset('themes/wowy/ads/img/demos/accounting-1/svg/waves.svg') }}" alt="waves">
             </div>
         </div>
         <div class="container-fluid p-relative z-index-1 py-2">
             <div class="row mh-200px mh-lg-300px align-items-center py-4">
                 <div class="col" style="text-align:center;">
                     <div class="appear-animation" data-appear-animation="fadeInRightShorter"
                         data-appear-animation-delay="0">
                         <span
                             class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span
                                 class="d-inline-flex py-1 px-2">Our Blogs</span></span>
                     </div>
                     <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                         <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Blogs
                         </h1>
                     </div>
                     <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                         <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                             <li><a href="{{ BaseHelper::getHomepageUrl() }}"
                                     class="text-light text-decoration-none">Home</a></li>
                             <li class="active text-color-light opacity-7">Blogs</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- News -->
     <div class="bg-grey-100 px-3 px-xl-0 border-radius-2-bottom p-relative overflow-hidden" style="display: none;">
         <div class="container-fluid py-5">

             <div class="row pt-3">
                 @foreach ($posts as $post)
                     <div class="col-lg-3 mb-4 pb-1">
                         <article class="post">
                             <div
                                 class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                                 <div class="p-relative rounded-3 overflow-hidden">
                                     <div class="post-date p-absolute top-20 left-20">
                                         <span class="day py-1 text-4 font-weight-bold text-secondary">
                                             {{ \Carbon\Carbon::parse($post->updated_at)->format('d') }}
                                         </span>
                                         <span class="month bg-secondary">
                                             {{ \Carbon\Carbon::parse($post->updated_at)->format('M') }}
                                         </span>
                                     </div>


                                     <a href="{{ $post->url }}" class="text-decoration-none">
                                         <img class="card-img-top" src="{{ RvMedia::getImageUrl($post->image) }}"
                                             alt="{{ $post->name }}" loading="lazy" alt="Common Tax Mistakes">
                                     </a>
                                     <div class="card-body bg-light p-4">
                                         <h4 class="my-2"><a href="{{ $post->url }}"
                                                 class="text-decoration-none text-dark text-color-hover-primary">{{ \Illuminate\Support\Str::limit($post->name, 38) }}
                                             </a>
                                         </h4>
                                         <p class="card-text text-3-5 mb-1">
                                         <p>{{ \Illuminate\Support\Str::limit($post->description, 100) }}</p>
                                         <a href="{{ $post->url }}"
                                             class="read-more text-color-secondary font-weight-semibold text-2">Read
                                             More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                                     </div>
                                 </div>
                             </div>
                         </article>
                     </div>
                 @endforeach




             </div>


         </div>
     </div>

     <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
         <div class="rs-breadcrumb-bg" data-background="themes/wowy/ads/images/bg/breadcrumb-bg-01.png"></div>
         <div class="container">
             <div class="row">
                 <div class="col-xxl-6 col-xl-8 col-lg-8">
                     <div class="rs-breadcrumb-content-wrapper">
                         <div class="rs-breadcrumb-title-wrapper">
                             <h1 class="rs-breadcrumb-title">Blogs</h1>
                         </div>
                         <div class="rs-breadcrumb-menu">
                             <nav>
                                 <ul>
                                     <li><span><a href="{{ BaseHelper::getHomepageUrl() }}">Home</a></span></li>
                                     <li><span>Blogs</span></li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- breadcrumb area end -->


     <!-- blog area start -->
     <section id="homeblog" class="rs-blog-area section-space-bottom rs-blog-two has-theme-green">
         <div class="container">

             <div class="row g-5">
                 @foreach ($posts as $post)
                     <div class="col-xl-4 col-lg-4 col-md-6">
                         <div class="rs-blog-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                             <div class="rs-blog-thumb">
                                 <a href="{{ $post->url }}"> <img src="{{ RvMedia::getImageUrl($post->image) }}"
                                         alt="image"></a>
                             </div>
                             <div class="rs-blog-content">
                                 {{-- <div class="rs-blog-tag has-theme-green">
                                    <a href="{{ $post->url }}">Company</a>
                                </div> --}}
                                 <h5 class="rs-blog-title"> <a href="{{ $post->url }}" style="color:#2B227B;font-size: 24px;">{{ $post->name }}</a></h5>
                                 <div class="rs-blog-meta">
                                     <div class="">
                                         <span>
                                             {!! \Illuminate\Support\Str::limit($post->content, 100) !!}
                                             {{-- <a class="rs-blog-meta-author" href="#"> Nayeem</a> --}}
                                         </span>
                                     </div>

                                 </div>
                                 <div class="rs-blog-btn-wrapper">
                                     <div class="rs-about-btn">
                                         <a class="rs-btn has-theme-blue has-icon has-bg" href="{{ $post->url }}">Read More
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
     <!-- blog area end -->

     {!! $posts->withQueryString()->links(Theme::getThemeNamespace() . '::partials.custom-pagination') !!}
 @endif
