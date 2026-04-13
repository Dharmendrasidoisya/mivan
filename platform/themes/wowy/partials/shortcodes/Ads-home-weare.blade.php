<style>
@media (max-width: 767px) {
    .abmb {
        padding-top: 20px;
    }
}</style>
  <section class="ul-why-choose-us ul-section-spacing abmb">
      <div class="ul-container waid">
          <div class="row align-items-center">

              <!-- TEXT COLUMN -->
              <div class="col-lg-6 col-md-12">
                  <div class="ul-why-choose-us-txt">
                      @if ($title)
                          <span class="ul-section-sub-title">{!! BaseHelper::clean($title) !!}</span>
                      @endif
                      @if ($description)
                          <h2 class="ul-section-title">
                              {!! BaseHelper::clean($description) !!}
                          </h2>
                      @endif

                      @if ($description2)
                          <p class="">
                              {!! BaseHelper::clean($description2) !!}
                          </p>
                      @endif

                      @if ($description3)
                          <p class="">
                              {{-- Our commitment to transparency and security is reflected in our rigorous development
                                  process—every project is launched only after securing Non-Agricultural (NA) approval,
                                  all required No Objection Certificates (NOCs), and clear, legally verified land
                                  titles.
                                  This ensures complete peace of mind for our clients while delivering strong long-term
                                  appreciation and sustainable growth opportunities in one of India’s most promising
                                  smart
                                  city destinations. --}}
                              {!! BaseHelper::clean($description3) !!}
                          </p>
                      @endif

                      <!-- Experience badge -->
                      <div class="experience-box" style="padding-bottom:8px;">
                          @if ($description4)
                              <span class="count">{!! BaseHelper::clean($description4) !!}</span>
                          @endif
                          @if ($description5)
                              <span class="text">{!! BaseHelper::clean($description5) !!}</span>
                          @endif
                      </div>
                      <a href="{{ url('about-us') }}" class="ul-blog-btn">Read More <span class="icon"><i
                                  class="flaticon-aro-left"></i></span></a>
                  </div>
              </div>

              <!-- IMAGE COLUMN -->
              <div class="col-lg-6 col-md-12">
                  <div class="ul-why-choose-us-image">
                      @if (!empty($icon1))
                          <img src="{{ RvMedia::getImageUrl(BaseHelper::clean($icon1)) }}" alt="Dholera Plot Planning"
                              style="border-radius: 15px;">
                      @endif
                  </div>
              </div>

          </div>
      </div>
  </section>


  {{-- Route::get('/dholeranewsandupdates',[FrontendController::class,'dholeranewsandupdates'])->name('news'); --}}
  {{-- Route::get('/dholeranewsandupdates/{id}/{title}/',[FrontendController::class,'dholeranewsandupdatesdetails'])->name('newsdetails'); --}}
