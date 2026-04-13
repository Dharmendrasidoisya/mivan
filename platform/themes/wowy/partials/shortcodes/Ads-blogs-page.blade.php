<?php
$posts = DB::table('posts')->where('status', 'published')->get();
// dd($posts);
?>

<!-- BLOG SECTION START -->

<!-- BREADCRUMB SECTION START -->
<div class="ul-breadcrumb">
    <div class="wow animate__fadeInUp">
        <h2 class="ul-breadcrumb-title">Blog</h2>
        <div class="ul-breadcrumb-nav">
            <a href="{{ BaseHelper::getHomepageUrl() }}">Home</a>
            <span class="separator"><i class="flaticon-aro-left"></i></span>
            <span class="current-page">Blog</span>
        </div>
    </div>
</div>
<!-- BREADCRUMB SECTION END -->
<!-- BLOG SECTION START -->
<div class="ul-inner-page-container">
    <div class="ul-inner-page-content-wrapper">
       
        <div class="row ul-bs-row row-cols-md-3 row-cols-2 row-cols-xxs-1">
       
             @foreach ($posts as $post)
            <div class="col">
                <div class="ul-blog ul-blog--inner">
                    <div class="ul-blog-img">
                        <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="Article Image">
                    </div>
                    <div class="ul-blog-txt">
                        <h3 class="ul-blog-title"><a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($post->name)))) }}">{!! \Illuminate\Support\Str::limit($post->name, 38) !!}</a></h3>
                        <p class="ul-blog-descr">{{ \Illuminate\Support\Str::limit($post->description, 110) }}</p>
                        <a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($post->name)))) }}" class="ul-blog-btn"><span class="icon">Read More</span> <span
                                class="icon"><i class="flaticon-aro-left"></i></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- BLOG SECTION END -->


<!-- APP AD SECTION START -->
<div class="ul-app-ad wow animate__fadeInUp">
    <div class="ul-app-ad-container">
        <div class="ul-app-ad-content">
            <div class="row align-items-start gy-5">
        
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

        
                <div class="col-lg-5">
                    <div class="ul-app-ad-imgs">
                        <div class="ul-app-ad-img">

                            <img src="assets/img/app-ad-ss-2.jpg" alt="App Screenshot" class="ul-app-ad-ss-2">
                        </div>

                  
                        <img src="assets/img/app-ad-img-vector.svg" alt="vector" class="vector">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
	
	.ul-blog--inner .ul-blog-btn{
		font-size: 16px !important;
		    width: auto;
	}
	.ul-blog--inner .ul-blog-btn i {
    font-size: 16px;
}
</style>