   <!-- BANNER SECTION START -->
   <section class="ul-banner">
       <!-- top -->
       <div class="top">
           <div class="ul-banner-slider swiper">
               <div class="swiper-wrapper table">
                   <!-- single slide -->

                   <!-- single slide -->
                   <div class="swiper-slide">
                       <div class="ul-banner-slide"
                           style="background-image: url('{{ !empty($icon) ? RvMedia::getImageUrl(BaseHelper::clean($icon)) : '' }}');">


                           <div class="ul-banner-container">
                               <div class="row align-items-center flex-sm-row flex-column-reverse">

                                   <!-- banner text -->
                                   <div class="col-md-9 col-sm-8" style="padding-right: 0px;
    padding-left: 0px;">
                                       @if ($slideshadowtitle)
                                           <span
                                               class="ul-banner-slide-shadow-title">{{ BaseHelper::clean($slideshadowtitle) }}</span>
                                       @endif

                                       <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                           @if ($subtitle)
                                               <span
                                                   class="ul-banner-slide-sub-title">{{ BaseHelper::clean($subtitle) }}</span>
                                           @endif

                                           @if ($slidetitle)
                                               <h1 class="ul-banner-slide-title">{!! BaseHelper::clean($slidetitle) !!}</h1>
                                           @endif

                                           @if ($description)
                                               <p class="ul-banner-slide-descr">{!! BaseHelper::clean($description) !!}</p>
                                           @endif

                                           <div class="ul-banner-slide-btns">
                                               {{-- <a href="#" class="ul-btn">View Opportunities</a> --}}
                                               <a href="{{ url('about-us') }}" class="ul-blog-btn"><span class="txt">Read More</span> <span
                                                  class="icon"><i class="flaticon-aro-left"></i></span></a>
                                           </div>
                                       </div>
                                   </div>

                                   <!-- banner image column (optional, keep or remove) -->
                                   <div class="col-md-3 col-sm-4">
                                       <div class="ul-banner-slide-img wow animate__fadeInUp">
                                           {{-- Optional side image --}}
                                       </div>
                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>

                   <!-- single slide -->
                   {{-- <div class="swiper-slide" >
                       <div class="ul-banner-slide"  style="background-image: url('{{ !empty($icon2) ? RvMedia::getImageUrl(BaseHelper::clean($icon2)) : '' }}');">
                           <div class="ul-banner-container">
                               <div class="row align-items-center flex-sm-row flex-column-reverse">
                                   <!-- banner text -->
                                   <div class="col-md-9 col-sm-8">
                                       <span class="ul-banner-slide-shadow-title">Mivan Realty</span>
                                       <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                           <span class="ul-banner-slide-sub-title">Future Ready
                                               Infrastructure1</span>
                                           <h1 class="ul-banner-slide-title">Where Connectivity Meets Growth</h1>
                                           <p class="ul-banner-slide-descr"> DMIC corridor, International Airport,
                                               Expressway connectivity, and mega industries
                                               driving unmatched appreciation.</p>
                                           <div class="ul-banner-slide-btns">
                                               <a href="#" class="ul-btn">Know More</a>
                                           </div>
                                       </div>
                                   </div>

                                   <!-- banner image -->
                                   <div class="col-md-3 col-sm-4">
                                       <div class="ul-banner-slide-img wow animate__fadeInUp">
                                           <!-- <img src="assets/img/banner-img-1.png" alt="Banner Image"> -->
                                           <!-- <a href="https://youtu.be/4jnzf1yj48M?si=owDQ6MQLmVy0r56E" data-fslightbox="video" class="ul-banner-slide-video-btn"><i class="flaticon-play"></i></a> -->
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div> --}}
               </div>
           </div>
       </div>

       <!-- bottom -->
       <div class="bottom">
           <div class="left wow animate__fadeInUp">
               <div class="ul-banner-address-slider swiper">
                   <div class="swiper-wrapper ">
                       <!-- single slide -->
                       <div class="swiper-slide">
                           <span class="address-1">Trusted Real Estate Partner</span>
                           <span class="address-2">Provides a local point of reference for credibility.</span>
                       </div>

                       <!-- single slide -->
                       <div class="swiper-slide">
                           <span class="address-1">Trusted Real Estate Partner</span>
                           <span class="address-2">Provides a local point of reference for credibility.</span>
                       </div>

                       <!-- single slide -->
                       <div class="swiper-slide">
                           <span class="address-1">Trusted Real Estate Partner</span>
                           <span class="address-2">Provides a local point of reference for credibility.</span>
                       </div>
                   </div>

               </div>
           </div>

           <div class="right wow animate__fadeInUp">
               <div class="ul-banner-slider-pagination"></div>
               <div class="ul-banner-slider-nav ul-slider-nav">
                   <button class="prev"><i class="flaticon-left"></i></button>
                   <button class="next"><i class="flaticon-right"></i></button>
               </div>
           </div>
       </div>
   </section>
   <!-- BANNER SECTION END -->


<div class="text-center wow animate__fadeInUp blink" style="visibility: visible; animation-name: fadeInUp;">
    <a 
        href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices" 
        class="ul-btn ul-properties-btn" 
        target="_blank">
        Click to Get Free Dholera Consultation
    </a>
</div>

   <style>
	   .blink {
    animation: blink-animation 1s infinite;
}

@keyframes blink-animation {
    0%, 50%, 100% {
        opacity: 1;
    }
    25%, 75% {
        opacity: 0;
    }
}
	   /* Default: hide everywhere */


/* Show only on mobile screens */
@media (max-width: 767px) {
    .ul-properties-btn {
        display: inline-grid;
    }
}
	   
	   
	   
	  @media screen and (max-width: 575px) {
    .ul-banner-slide {
        padding: clamp(230px, 12.29vw, 310px) clamp(15px, 5.25vw, 100px) clamp(130px, 8.61vw, 240px);
    }
		  .flex-column-reverse {
    flex-direction: column !important;
}
}
       .ul-banner-slide-descr {
           margin-bottom: clamp(20px, 2.89vw, 30px);


       }

       .ck-content .table {
           margin: auto;
           display: table;
       }

       @media only screen and (max-width: 600px) {
           .table {
               display: table-row !important;
           }
       }

       @media only screen and (min-device-width : 1360px) and (max-device-width : 1460px) {
           .waid {
               max-width: calc(clamp(1350px, 61.48vw, 1170px) + var(--container-space-x)) !important;
           }
       }

       .waid {
           max-width: calc(clamp(1780px, 61.48vw, 1170px) + var(--container-space-x));
       }
   </style>
