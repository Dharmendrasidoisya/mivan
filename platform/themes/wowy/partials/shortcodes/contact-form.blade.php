<section class="mt-50 pb-50" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 m-auto">
                <div class="contact-from-area  padding-20-row-col wow tmFadeInUp animated" style="visibility: visible;">
                    <h3 class="mb-10 text-center">{{ __('Drop Us a Line') }}</h3>
                    <p class="text-muted mb-30 text-center font-sm">{{ __('Contact Us For Any Questions') }}</p>
                    {{-- {!! Form::open(['route' => 'public.send.contact', 'class' => 'contact-form-style text-center contact-form', 'method' => 'POST']) !!}
                        {!! apply_filters('pre_contact_form', null) !!} --}}
                        <form id="contactForm" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}" type="tel" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="address" value="{{ old('address') }}" placeholder="{{ __('Location') }}" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mb-20">
                                    <div class="textarea-style">
                                        <textarea name="content" placeholder="{{ __('Message') }}" required>{{ old('content') }}</textarea>
                                    </div>
                                </div>
                        
                                <!-- Google reCAPTCHA Widget -->
                                <div class="col-lg-12 col-md-12 text-center">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                </div>
                        
                                <div class="col-lg-12 col-md-12">
                                    <button class="submit submit-auto-width mt-30" type="submit" id="contactSubmitBtn">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="form-group text-left">
                            <div class="contact-message contact-success-message mt-30" style="display: none"></div>
                            <div class="contact-message contact-error-message mt-30" style="display: none"></div>
                        </div>
                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CONTACT SECTION START -->
<div class="ul-inner-page-content-wrapper">
    <div class="ul-inner-page-container">
        <div class="ul-contact">
            <div class="row g-0">
                <!-- contact infos -->
                <div class="col-md-5">
                    <div class="ul-contact-infos-wrapper">
                        <div class="heading">
                            <h3 class="ul-contact-infos-title">Contact Information</h3>

                        </div>

                        <!-- infos -->
                        <div class="ul-contact-infos">
                            <div class="ul-contact-info">
                                <i class="flaticon-building"></i>
                                <span class="txt">Mivan Realty</span>
                            </div>
                            <div class="ul-contact-info">
                                <i class="flaticon-location-pin"></i>
                                <span class="txt">G-92, G Block, Sector 63, Noida-201307</span>
                            </div>
                            <a href="tel:180021212122" class="ul-contact-info">
                                <i class="flaticon-telephone"></i>1800 21 21 21 22
                            </a>
                            <a href="mailto:support@mivandholera.com" class="ul-contact-info">
                                <i class="flaticon-mail"></i>support@mivandholera.com
                            </a>


                        </div>


                        <!-- socials -->
                        <div class="ul-contact-socials">
                            <a href="https://www.facebook.com/Mivanrealty/" target="_blank"><i
                                    class="flaticon-facebook"></i></a>
                            <a href="https://www.instagram.com/mivanrealty/" target="_blank"><i
                                    class="flaticon-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/mivanrealty" target="_blank"><i
                                    class="flaticon-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- form -->
                <div class="col-md-7">
                    <div class="ul-contact-form-wrapper">
 <form id="contactForm" method="POST">
                            @csrf
                            {{-- <div class="row g-5"> --}}

                            <div class="form-group">
                                <label for="contact-first-name"> Name</label>
                                <input name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}"
                                    type="text" required>
                            </div>





                            <div class="form-group">
                                <label for="contact-email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    placeholder="{{ __('Email') }}" required>
                            </div>
                            <div class="form-group">

                                <label for="contact-phone">Phone Number</label>
                                <input name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}"
                                    type="tel" required>
                            </div>


                            <div class="form-group">
                                <label for="contact-location">Location</label>
                                <input name="address" value="{{ old('address') }}"
                                    placeholder="{{ __('Location') }}" type="text" required>
                            </div>


                            <div class="form-group">
                                <label for="contact-message">Message</label>
                                <textarea name="content" placeholder="{{ __('Message') }}" required>{{ old('content') }}</textarea>
                            </div>


                          

                            <button class="submit submit-auto-width mt-30 ul-btn" type="submit"
                                id="contactSubmitBtn">
                                {{ __('Submit') }}

                </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d70701.38296703255!2d72.195112!3d22.24836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f2451ff4100f9%3A0xaa2cd52f20110ead!2sDholera%2C%20Gujarat%20382455!5e1!3m2!1sen!2sin!4v1768304062627!5m2!1sen!2sin"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="ul-contact-map"></iframe>
<!-- CONTACT SECTION END -->

<!-- APP AD SECTION START -->
<div class="ul-app-ad wow animate__fadeInUp">
    <div class="ul-app-ad-container">
        <div class="ul-app-ad-content">
            <div class="row align-items-start gy-5">
                <!-- txt -->
                <div class="col-lg-7">
                    <div class="ul-app-ad-txt">
                        <a href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices"
                            target="_blank" style="text-decoration: none;">
                            <span class="ul-btn ul-blogs-heading-btn">Enquire Now</span>
                        </a>

                        <a href="https://api.whatsapp.com/send?phone=917778011154&text=Hello!%20I%20just%20visited%20your%20website%20and%20I%20wanted%20to%20schedule%20a%20free%20consultation%20about%20Dholera%20and%20its%20Prime%20Locations%20and%20Transparent%20Land%20Prices"
                            target="_blank" style="text-decoration: none; color: inherit;">
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    $(document).ready(function(){
        $("#contactForm").submit(function(e){
            e.preventDefault(); // Prevent page reload
            
            

            $.ajax({
                url: "{{ route('public.send.contact') }}",
                type: "POST",
                data: $(this).serialize(),
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content') },
                beforeSend: function() {
                    $("#contactSubmitBtn").prop("disabled", true).text("Sending...");
                },
                success: function(response){
                    $("#contactForm")[0].reset();
                    grecaptcha.reset(); // Reset reCAPTCHA after submission
                    window.location.href = "/thankyou.html";
                },
                complete: function() {
                    $("#contactSubmitBtn").prop("disabled", false).text("Send Message");
                }
            });
        });
    });
</script>



