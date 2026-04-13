    {!! dynamic_sidebar('top_footer_sidebar') !!}
    
     <!-- FOOTER SECTION START -->
     <style>
        .ul-app-ad-txt {
            padding-bottom: 60px;
        }
        .ul-app-ad-img:first-child{
            display: none;
        }
        .ul-app-ad-imgs .vector {
            display: none;
        }
        .ul-app-ad-imgs::before{
                background-color: transparent;
        }
        .ul-app-ad-ss-2 {
                aspect-ratio: 100 / 101;
        }
                @media only screen and (max-width: 600px) {
                      .formbold-action-btn {
                
                    width: 60px !important;
    height: 60px!important;
            }
                    .open-button {
                            right: 0px!important;
                    }
                    .ul-app-ad-imgs {
                        display: none;
                    }
                }
	.mobilenoonef{
        display: block;
    }
		 
	

/* Show only on mobile screens */
  @media only screen and (max-width: 600px) {
    
		 .mobilenoonef {
    display: none !important;
}
	  .ul-app-ad-txt {
    padding-bottom: 0px;
}
}
     </style>
    <footer class="ul-footer">
        <div class="ul-footer-top">
            <div class="ul-container">
                <div class="ul-footer-top-wrapper wow animate__fadeInUp">
                
   
                    <div class="ul-footer-about">
                        <a href="{{ BaseHelper::getHomepageUrl() }}" class="d-inline-block"><img src="{{asset('assets/img/logo.png')}}" alt="logo"
                                class="logo"></a>
                        <p class="ul-footer-about-txt">Mivan Realty – trusted Dholera plot investments.</p>
                        <div class="ul-footer-socials">
                            <a href="https://www.facebook.com/Mivanrealty/" target="_blank"><i class="flaticon-facebook"></i></a>
                            <a href="https://www.instagram.com/mivanrealty/" target="_blank"><i class="flaticon-instagram"></i></a>
                           
                            <a href="https://www.linkedin.com/company/mivanrealty" target="_blank"><i class="flaticon-linkedin"></i></a>
                        </div>
                    </div>
                    <!-- </div> -->

                 
                    <div class="single-column mobilenoonef">
                        <div class="ul-footer-widget " >
                            <h3 class="ul-footer-widget-title">Quick Links</h3>

                            <div class="ul-footer-widget-links">
                                <a href="{{ url('/') }}">Home</a>
                                <a href="{{ url('about-us') }}">About Us</a>
                                <a href="{{ url('about-dholera') }}">About Dholera</a>
                                <a href="{{ url('projects') }}">Projects</a>
                                <a href="{{ url('blog') }}">Blog</a>
                                <a href="{{ url('contact') }}">Contact Us</a>
                                    <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
                                     <a href="{{ url('disclaimer') }}">Disclaimer</a>
                                

                            </div>
                        </div>
                   
                    </div>
                    <div class="single-column">
                       <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">Our Projects</h3>

                        <div class="ul-footer-widget-links">
                           <?php
                                    $projects = DB::table('projectsposts')
                                                ->where('status', 'published')
                                                ->get();
                                    ?>

                            @foreach ($projects as $project)
                                <a href="{{ url('projects/' . Str::slug(str_replace('&', '', html_entity_decode($project->name)))) }}">{{ $project->name }}</a>
                            @endforeach
                        </div>
                    </div>
               
                    </div>
                    <div class="single-column">
                        <div class="ul-footer-widget">
                            <h3 class="ul-footer-widget-title">Contact Us</h3>
                          
                            <div class="ul-footer-widget-links">
								  <a >Mivan Realty</a>
                            <a >G-92,G Block, Sector 63, Noida-201307</a>
                                <a href="tel:180021212122">1800 21 21 21 22</a>
                                <a href="mailto:support@mivandholera.com">support@mivandholera.com</a>
                            </div>
                        </div>

                    </div>
                  
                </div>
            </div>
        </div>

        <!-- footer bottom -->
        <div class="ul-footer-bottom">
            <p class="copyright-txt">&copy;2026 Mivan Realty. All rights reserved.</p>
        </div>

        <!-- vector -->
        <div class="ul-footer-vectors">
            <img src="{{asset('assets/img/footer-vector-img-1.png')}}" alt="Footer Image" class="ul-footer-vector-1">
            <img src="{{asset('assets/img/footer-vector-img-2.png')}}" alt="Footer Image" class="ul-footer-vector-2">
        </div>
    </footer>
    <!-- FOOTER SECTION END -->

   

<style>
    .qlwapp-header{
        background: #e1b55b !important;
    }
</style>
 <style>
.float {
    position: fixed;
    width: 130px;
    height: 0;
    bottom: 115px;
    left: -28px;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    z-index: 100;
}
.iconwhatsup {
    display: none
}
#popup {
    background-position: left
}
.float1 {
    position: fixed;
  width: 100px;
    height: 0;
      bottom: 110px;
  left: 94.2%;
    color: #fff;
    border-radius: 50px;
    text-align: center;
        font-size: 100px;
    z-index: 100
}
@media only screen and (max-width:600px) {
    .dhs {
        display: none!important
    }
    .float1 {
        left: 78.5%!important
    }
    .lbldes {
        display: none!important
    }
    .iconwhatsup {
        display: block!important
    }
    #popup {
        background-image: none
    }
    .xs-h-300px {
        height: 161px!important
    }
}
.form-control,
.form-select,
input,
select,
textarea {
    padding: 4px 8px;
    margin-bottom: 15px
}
@media only screen and (min-width:601px) {
    .dh {
        display: none!important
    }
}
.ul-properties-btn {
    background-color: #DFB45E;
     border-color: #DFB45E;
 
    color: #000;
}
.ul-btn {
    
        color: #000;
}
</style>
 
<a href="tel:180021212122" class="float1">
    <img loading="lazy" src="{{asset('assets/img/callnow.png')}}" alt="call now" style="width: 60px;">
</a>
    <div id="qlwapp" class="qlwapp qlwapp-free qlwapp-bubble qlwapp-bottom-left qlwapp-all qlwapp-rounded"
       >
        <div class="qlwapp-container">
            <div class="qlwapp-box">
                <div class="qlwapp-header">
                    <i class="qlwapp-close" data-action="close">&times;</i>
                    <div class="qlwapp-description">
                        <div class="qlwapp-description-container">
                            <h3>Hello!</h3>

                            <p>Click one of our representatives below to chat on WhatsApp or send us an email to
                                @if (theme_option('contact_email'))
                                    <a
                                        href="mailto:support@mivandholera.com">support@mivandholera.com</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="qlwapp-body">
                    @if (theme_option('hotline'))
                        @php
                            $hotline = theme_option('hotline');
                            // Removing any non-numeric characters
                            $formatted_hotline = preg_replace('/\D/', '', $hotline);

                            // If it's a valid length, format it
                                if (strlen($formatted_hotline) == 10) {
                                    $formatted_hotline =
                                        '+91 ' . substr($formatted_hotline, 0, 5) . ' ' . substr($formatted_hotline, 5);
                                                            }
                        @endphp
                        <a class="qlwapp-account" data-action="open" data-phone="+917778011154"
                            data-message="Hello! I just visited your website and I wanted to schedule a free consultation about Dholera and its Prime Locations and Transparent Land Prices"
                            role="button" tabindex="0" target="_blank">
                            <div class="qlwapp-avatar">
                                <div class="qlwapp-avatar-container">
                                    <img alt="nanavaty" data-src="{{ asset('storage/mil-favicon-1.png') }}"
                                        src="{{ asset('storage/mil-favicon-1.png') }}"
                                        class="lazyload"
                                        style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/140;">
                                </div>
                            </div>
                            <div class="qlwapp-info">
                                <span class="qlwapp-label">Support</span>
                                <span class="qlwapp-name">Mivan Realty</span>
                            </div>
                        </a>
                    @endif
                </div>
                <div class="qlwapp-footer">
                    <p>Powered by Mivan Realty</p>
                </div>
            </div>

            <a class="qlwapp-toggle" data-action="box" data-phone="919426059817"
                data-message="Hello! I just visited your website and am interested in Know more about your products. I have one query"
                role="button" tabindex="0" target="_blank">
          
                <img loading="lazy" src="{{ asset('themes/wowy/ads/img/wt.png') }}" alt="whatsapp"
                    style="width: 65px;">
                <i class="qlwapp-close" style=" background: #000;" data-action="close">&times;</i>
            </a>
        </div>
    </div> 


    @if (is_plugin_active('ecommerce'))
        <script>
            window.currencies = {!! json_encode(get_currencies_json()) !!};
        </script>
    @endif

    {!! Theme::footer() !!}

    <script>
        window.trans = {
            "Views": "{{ __('Views') }}",
            "Read more": "{{ __('Read more') }}",
            "days": "{{ __('days') }}",
            "hours": "{{ __('hours') }}",
            "mins": "{{ __('mins') }}",
            "sec": "{{ __('sec') }}",
            "No reviews!": "{{ __('No reviews!') }}"
        };
    </script>

    {!! Theme::place('footer') !!}

    @if (session()->has('success_msg') ||
            session()->has('error_msg') ||
            (isset($errors) && $errors->count() > 0) ||
            isset($error_msg))
        <script type="text/javascript">
            window.onload = function() {
                @if (session()->has('success_msg'))
                    window.showAlert('alert-success', '{{ session('success_msg') }}');
                @endif

                @if (session()->has('error_msg'))
                    window.showAlert('alert-danger', '{{ session('error_msg') }}');
                @endif

                @if (isset($error_msg))
                    window.showAlert('alert-danger', '{{ $error_msg }}');
                @endif

                @if (isset($errors))
                    @foreach ($errors->all() as $error)
                        window.showAlert('alert-danger', '{!! BaseHelper::clean($error) !!}');
                    @endforeach
                @endif
            };
        </script>
    @endif
   
    
    
    
     <div class="formbold-main-wrapper">

    
    </div>
    <div class="chat-popup">
        <form class="form-container lbl11">
            <h6 class="lblcross" onclick="closeForm2()">✕</h6>

            <div class="chat-box">
                <!-- Message bubble -->
                <div class="message-bubble">
                    <span>Hi, How Can I help You?</span>
                </div>

                <!-- Buttons as fake textarea -->
                <div class="fake-textarea">
                    <button type="button" onclick="submitPopupForm('Want to book plot in dholera')">
                        Want to book plot in dholera
                    </button>

                    <button type="button"
                        onclick="submitPopupForm('Want to know more about ongoing scheme in dholera')">
                        Want to know more about ongoing scheme in dholera
                    </button>

                    <button type="button" onclick="submitPopupForm('Want to connect with sales team')">
                        Want to connect with sales team
                    </button>
                </div>
            </div>

            
        </form>

        <form id='webform223553000036407622' action='#' name=WebToContacts223553000036407622
            class="form-container lbl44" method="post" name="form" id="form"
            onSubmit='javascript:document.charset="UTF-8"; return checkMandatory223553000036407622()'
            accept-charset='UTF-8'>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span class="lblcross1" onclick="backToPreviousFormlast()" style="cursor: pointer;">
                    <i class="fa fa-arrow-left"></i>
                </span>
                <span class="lblcross" onclick="closeForm2()" style="cursor: pointer;">X</span>
            </div>
            <h3 class="lblh1" style="margin: 0px!important;">
                <img src="{{ asset('assets/img/Mivan.png') }}" alt="Indian Tradebird Logo12" class="lblwidth" style="">
            </h3>
            <input type='text' style='display:none;' name='xnQsjsdp'
                value='1c064f0e89b527f6af8258a6527a557646b1adc9e0497372b0ec48601e2dd57c'>
            </input>
            <input type='hidden' name='zc_gad' id='zc_gad' value=''>
            </input>
            <input type='text' style='display:none;' name='xmIwtLD'
                value='3d142f1e6102acf0707c5b975647f20bfa6bcef0d45364ecb754a903b889cb2c1ff4c38ebd0f0eb43f756b0f937a8d32'>
            </input>
            <input type='text' style='display:none;' name='actionType' value='Q29udGFjdHM='>
            </input>
            <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;gapgroup.in&#x2f;'>
            </input>
            <!-- Do not remove this code. -->
            <style>
                html,
                body {
                    margin: 0px;
                }

                .formsubmit.zcwf_button {
                    color: white !important;
                    background: transparent linear-gradient(0deg, #000 0%, #000 100%);
                }

                #crmWebToEntityForm.zcwf_lblLeft {
                    width: 100%;
                    padding: 25px;
                    margin: 0 auto;
                    box-sizing: border-box;
                }

                #crmWebToEntityForm.zcwf_lblLeft * {
                    box-sizing: border-box;
                }

                #crmWebToEntityForm {
                    text-align: left;
                }

                #crmWebToEntityForm * {
                    direction: ltr;
                }

                .zcwf_lblLeft .zcwf_title {
                    word-wrap: break-word;
                    padding: 0px 6px 10px;
                    font-weight: bold
                }

                .zcwf_lblLeft.cpT_primaryBtn:hover {
                    background: linear-gradient(#02acff 0, #006be4 100%)no-repeat padding-box !important;
                    box-shadow: 0 -2px 0 0 #0159b9 inset !important;
                    border: 0 !important;
                    color: #fff !important;
                    outline: 0 !important;
                }

                .zcwf_lblLeft .zcwf_col_fld input[ type=text],
                input[ type=password],
                .zcwf_lblLeft .zcwf_col_fld textarea {
                    width: 60%;
                    border: 1px solid #c0c6cc !important;
                    resize: vertical;
                    border-radius: 2px;
                    float: left;
                }

                .zcwf_lblLeft .zcwf_col_lab {
                    width: 30%;
                    word-break: break-word;
                    padding: 0px 6px 0px;
                    margin-right: 10px;
                    margin-top: 5px;
                    float: left;
                    min-height: 1px;
                }

                .zcwf_lblLeft .zcwf_col_fld {
                    float: left;
                    width: 68%;
                    padding: 0px 6px 0px;
                    position: relative;
                    margin-top: 5px;
                }

                .zcwf_lblLeft .zcwf_privacy {
                    padding: 6px;
                }

                .zcwf_lblLeft .wfrm_fld_dpNn {
                    display: none;
                }

                .dIB {
                    display: inline-block;
                }

                .zcwf_lblLeft .zcwf_col_fld_slt {
                    width: 60%;
                    border: 1px solid #ccc;
                    background: #fff;
                    border-radius: 4px;
                    font-size: 16px;
                    float: left;
                    resize: vertical;
                    padding: 2px 5px;
                }

                .zcwf_lblLeft .zcwf_row:after,
                .zcwf_lblLeft .zcwf_col_fld:after {
                    content: '';
                    display: table;
                    clear: both;
                }

                .zcwf_lblLeft .zcwf_col_help {
                    float: left;
                    margin-left: 7px;
                    font-size: 16px;
                    max-width: 35%;
                    word-break: break-word;
                }

                .zcwf_lblLeft .zcwf_help_icon {
                    cursor: pointer;
                    width: 16px;
                    height: 16px;
                    display: inline-block;
                    background: #fff;
                    border: 1px solid #c0c6cc;
                    color: #c1c1c1;
                    text-align: center;
                    font-size: 11px;
                    line-height: 16px;
                    font-weight: bold;
                    border-radius: 50%;
                }

                .zcwf_lblLeft .zcwf_row {
                    margin: 15px 0px;
                }

                .zcwf_lblLeft .formsubmit {
                    margin-right: 5px;
                    cursor: pointer;
                    color: #313949;
                    font-size: 16px;
                }

                .zcwf_lblLeft .zcwf_privacy_txt {
                    width: 90%;
                    color: rgb(0, 0, 0);
                    font-size: 16px;
                    font-family: Arial;
                    display: inline-block;
                    vertical-align: top;
                    color: #313949;
                    padding-top: 2px;
                    margin-left: 6px;
                }

                .zcwf_lblLeft .zcwf_button {
                    font-size: 16px;
                    color: #313949;
                    border: 1px solid #c0c6cc;
                    padding: 3px 9px;
                    border-radius: 4px;
                    cursor: pointer;
                    max-width: 120px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }

                .zcwf_lblLeft .zcwf_tooltip_over {
                    position: relative;
                }

                .zcwf_lblLeft .zcwf_tooltip_ctn {
                    position: absolute;
                    background: #dedede;
                    padding: 3px 6px;
                    top: 3px;
                    border-radius: 4px;
                    word-break: break-word;
                    min-width: 100px;
                    max-width: 150px;
                    color: #313949;
                    z-index: 100;
                }

                .zcwf_lblLeft .zcwf_ckbox {
                    float: left;
                }

                .zcwf_lblLeft .zcwf_file {
                    width: 55%;
                    box-sizing: border-box;
                    float: left;
                }

                .cBoth:after {
                    content: '';
                    display: block;
                    clear: both;
                }

                @media all and (max-width: 600px) {

                    .zcwf_lblLeft .zcwf_col_lab,
                    .zcwf_lblLeft .zcwf_col_fld {
                        width: auto;
                        float: none !important;
                    }

                    .zcwf_lblLeft .zcwf_col_help {
                        width: 40%;
                    }
                }

                .zcwf_row {
                    padding: 0px 0px;
                }
            </style>
            <style>
                .zcwf_col_fld {
                    display: flex;
                    gap: 10px;
                    /* space between buttons */
                }

                .zcwf_button {
                    padding: 2px 17px;
                    font-size: 16px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }

                #formsubmit {
                    background-color: #28a745;
                    /* green */
                    color: white;
                }

                .zcwf_button[type="reset"],
                input[name="reset"] {
                    background-color: #000;
                    /* red */
                    color: white;
                }
            </style>

            <!-- First Name hidden -->
            <!-- First Name (hidden) -->
             <form action="#" method="POST" id="popupForm">

                <input type="hidden" name="btn_action" id="btn_action" value="">
                <input type="hidden" name="ctype" id="ctype" value="I1114">

                <!-- Name -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <input type='text' name='name' class="lbla" maxlength='80' placeholder='Name *'
                             pattern="[A-Za-z\s]+" title="Only letters allowed" style="height: 38px;">
                    </div>
                </div>

                <!-- Email (changed to "mail") -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <input type='email' id="email" name="email" class="lbla" maxlength='100'
                            placeholder='Email *' style="height: 38px;" >
                    </div>
                </div>

                <!-- Phone (changed to "subj") -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <input type='text' id="phone" name="phone" class="lbla" maxlength='10'
                            placeholder='Phone *' style="height: 38px;"  pattern="\d{10}"
                            title="Enter 10 digit phone number">
                    </div>
                </div>
                <input type="hidden" name="location" value="Null">

                <!-- Message -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <textarea name='message' placeholder='Message *' class="lbla"  style="height: 38px;"></textarea>
                    </div>
                </div>
                 <div class="g-recaptcha" data-sitekey="6LeReFIsAAAAAIP9MCmCOY9VjrK96-W03umJ53y3" style="margin:0px 0;"></div> 
                
                                <!-- Submit Button -->
                                <div class='zcwf_row'>
                                    <div class='zcwf_col_fld'>
                                        <input type='submit' id='formsubmit1' class='formsubmit zcwf_button' value='Submit'>
                                    </div>
                                </div>

            </form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

            <script>
                function validateEmail223553000036407622() {
                    var form = document.forms['WebToContacts223553000036407622'];
                    var emailFld = form.querySelectorAll('[ftype=email]');
                    var i;
                    for (i = 0; i < emailFld.length; i++) {
                        var emailVal = emailFld[i].value;
                        if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
                            var atpos = emailVal.indexOf('@');
                            var dotpos = emailVal.lastIndexOf('.');
                            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
                                alert('Please enter a valid email address. ');
                                emailFld[i].focus();
                                return false;
                            }
                        }
                    }
                    return true;
                }
                function checkMandatory223553000036407622() {
                    var mndFileds = new Array('Last Name');
                    var fldLangVal = new Array('Last\x20Name');
                    for (i = 0; i < mndFileds.length; i++) {
                        var fieldObj = document.forms['WebToContacts223553000036407622'][mndFileds[i]];
                        if (fieldObj) {
                            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                if (fieldObj.type == 'file') {
                                    alert('Please select a file to upload.');
                                    fieldObj.focus();
                                    return false;
                                }
                                alert(fldLangVal[i] + ' cannot be empty.');
                                fieldObj.focus();
                                return false;
                            }
                            else if (fieldObj.nodeName == 'SELECT') {
                                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                    alert(fldLangVal[i] + ' cannot be none.');
                                    fieldObj.focus();
                                    return false;
                                }
                            }
                            else if (fieldObj.type == 'checkbox') {
                                if (fieldObj.checked == false) {
                                    alert('Please accept  ' + fldLangVal[i]);
                                    fieldObj.focus();
                                    return false;
                                }
                            }
                            try {
                                if (fieldObj.name == 'Last Name') {
                                    name = fieldObj.value;
                                }
                            }
                            catch (e) { }
                        }
                    }
                    if (!validateEmail223553000036407622()) {
                        return false;
                    }
                    var urlparams = new URLSearchParams(window.location.search);
                    if (urlparams.has('service') && (urlparams.get('service') === 'smarturl')) {
                        var webform = document.getElementById('webform223553000036407622');
                        var service = urlparams.get('service');
                        var smarturlfield = document.createElement('input');
                        smarturlfield.setAttribute('type', 'hidden');
                        smarturlfield.setAttribute('value', service);
                        smarturlfield.setAttribute('name', 'service');
                        webform.appendChild(smarturlfield);
                    }
                    document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
                }
                function tooltipShow223553000036407622(el) {
                    var tooltip = el.nextElementSibling;
                    var tooltipDisplay = tooltip.style.display;
                    if (tooltipDisplay == 'none') {
                        var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                        for (i = 0; i < allTooltip.length; i++) {
                            allTooltip[i].style.display = 'none';
                        }
                        tooltip.style.display = 'block';
                    }
                    else {
                        tooltip.style.display = 'none';
                    }
                }
            </script>
            <!-- Do not remove this --- Analytics Tracking code starts -->

            <!-- Do not remove this --- Analytics Tracking code ends. -->
        </form>




    </div>

    

    <style>
        #btnproduct:hover {
            border-color: #ea4e38 !important;
        }

        .category-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 10px;
            margin-top: 10px;
            justify-content: flex-start;
        }

        .category-btn {

            border-radius: 15px;
            padding: 6px 12px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .category-btn:hover {
            background: linear-gradient(145deg, #ea4e38, #ea4e38);
            color: #fff;
            border-color: #ea4e38;
            box-shadow: 0 8px 20px rgba(171, 133, 60, 0.3);
        }

        .category-btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(171, 133, 60, 0.3);
        }

        #btnproduct {
            border-radius: 15px !important;
        }

        #btnproduct:hover {
            border-radius: 15px !important;
        }
    </style>
    <style>
    .g-recaptcha {
    transform: scale(0.8);
    transform-origin: 0 0;
}

/* For mobile devices */
@media (max-width: 480px) {
    .g-recaptcha {
        transform: scale(0.7);
        transform-origin: 0 0;
    }
}
        .chat-box {
            /* display: flex; */
            justify-content: flex-start;
            padding: 0px 0 0px;
            font-family: 'Segoe UI', sans-serif;
        }

        .message-bubble {
            background: #f2f4f6;
            padding: 15px 10px;
            border-radius: 20px 20px 20px 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            position: relative;
        }

        .typing-text {

            white-space: nowrap;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            color: #0f2043 !important;
            width: 0;

        }



        /* end //animation */
        .textarea-container {
            position: relative;
        }

        .fake-textarea {
            border-radius: 6px;
         
            font-size: 14px;
         
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            align-items: normal;
        }

        .fake-textarea button {
            background-color: #e5e5e5;
            color: #0f2043;
           
            padding: 6px 10px;
            font-size: 14px;
            border-radius: 15px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .fake-textarea button:hover {
            background-color: #000;
            color: #fff;
        }

        .send-icon {
            position: absolute;
            right: 10px;
            bottom: 10px;
            color: #666;
            cursor: pointer;
        }

        .chat-option-btn {
            display: inline-block;
            margin: 5px;
            padding: 10px 18px;
            background-color: #ea4e38;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .chat-option-btn:hover {
            background-color: #c03b2d;
        }

        .form-container {
            display: none;
        }

        .form-container.lbl11 {
            display: block;
        }

        .textarea-container {
            margin-bottom: 10px;
            position: relative;
            max-width: 100%;
        }

        .formbold-form-input {
            width: 100%;
            padding: 6px 12px;
            border-radius: 15px !important;
            font-size: 15px;
            font-weight: 500;
            color: #333;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 30px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease-in-out;

            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 16px;
        }

        .formbold-form-input:focus {
            outline: none;
            border-color: #ab853c;
            box-shadow: 0 0 0 3px rgba(171, 133, 60, 0.2);
        }

        .formbold-form-input option {
            font-size: 15px;
            padding: 10px;
        }
    </style>
    <style>
        .textarea-container {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 65px;
        }

        .textarea-container textarea {
            width: 100%;
            padding-right: 40px;
      
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 10px;
            font-size: 12px;
            resize: none;

        }

        .textarea-container .send-icon {
            position: absolute;
            right: 10px;
            bottom: 10px;
            cursor: pointer;
            color: #a8a8a8;
        }

        .textarea-container .send-icon:hover {
            color: #0056b3;
        }

        .lblcross {
            color: #000 !important;
        }
    </style>
    <style>
        /* 12 */
        .btn-12 {
            position: relative;
            right: 20px;
            bottom: 20px;
            border: none;
            box-shadow: none;
            width: 130px;
            height: 40px;
            line-height: 42px;
            -webkit-perspective: 230px;
            perspective: 230px;
        }

        .btn-12 span {
            background: rgb(0, 172, 238);
            background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
            display: block;
            position: absolute;
            width: 130px;
            height: 40px;
           
            border-radius: 5px;
            margin: 0;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all .3s;
            transition: all .3s;
        }

        .btn-12 span:nth-child(1) {
            box-shadow:
                -7px -7px 20px 0px #fff9,
                -4px -4px 5px 0px #fff9,
                7px 7px 20px 0px #0002,
                4px 4px 5px 0px #0001;
            -webkit-transform: rotateX(90deg);
            -moz-transform: rotateX(90deg);
            transform: rotateX(90deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
            transform-origin: 50% 50% -20px;
        }

        .btn-12 span:nth-child(2) {
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
            transform-origin: 50% 50% -20px;
        }

        .btn-12:hover span:nth-child(1) {
          
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
        }

        .btn-12:hover span:nth-child(2) {
            
            color: transparent;
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
        }
    </style>
    <style>
        .form-container {
            width: 360px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            font-family: 'Arial', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .lblcross {
            position: absolute;
            right: 15px;
            top: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .chat-box {
            margin-top: 20px;
        }

        .message-bubble {
            background: #f2f4f6;
            padding: 15px 20px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            max-width: 90%;
            font-size: 20px;
            color: #000;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .message-bubble .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .fake-textarea {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .fake-textarea button {
            background: #fff;
            border: 0px solid #ddd;
            border-radius: 12px;
            padding: 4px 9px;
            font-size: 15px;
            cursor: pointer;
            text-align: left;
            transition: all 0.2s ease-in-out;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

   

        .fake-textarea button::after {
            content: "➤";
            color: #dfb45e;
            font-weight: bold;
            margin-left: 10px;
        }

        .lblp {
            text-align: center;
            font-size: 13px;
            margin-top: 20px;
            color: #666;
        }

      
     @media screen and (min-device-width: 1540px) and (max-device-width: 1740px) {
         .open-button {
                    right: 15px!important;
            } 
            .formbold-action-btn {
                 width: 60px!important;
                 height: 60px!important; 
            }
     }
     
     
          @media screen and (min-device-width: 1200px) and (max-device-width: 1360px) {
               .float1 {
                       left: 91.8% !important;
            }
          }
        @media screen and (min-device-width: 1360px) and (max-device-width: 1540px) {
            .open-button {
                    right: 25px!important;
            }
           
            .formbold-action-btn {
                    width: 60px !important;
                height: 60px!important;
            }
            .float1 {
                  left: 92.8% !important;
            }
            .form-container textarea {
                height: 40px !important;
            }

            .formbold-form-input {
                padding: 0px 12px !important;
            }
        }

        /* Button used to open the chat form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
          bottom: 118px;
            right: 30px;
            width: 280px;
        }

        /* The popup chat - hidden by default */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 161px;
            right: 15px;
  
            z-index: 9;
            border-radius: 8px 8px 0px 0px;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
            padding-top: 0px;
        }

        /* Full-width textarea */
        .form-container textarea {
           

            width: 100%;
            padding: 5px 10px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 15px;
            color: #6b7280;
            outline: none;
            resize: none;
        }

        textarea::placeholder {
            color: #6b7280;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
            border-color: #6a64f1;
            color: #6b7280;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        /* Set a style for the submit/send button */
        .form-container .btn {

            color: rgb(0, 0, 0);
            border: 1px solid #000 !important;
            padding: 10px 10px;
            border: none;
            cursor: pointer;
        
            width: 100%;
     
            opacity: 0.8;
            border-radius: 6px;
        }

        .form-container .btn:hover {
            background-color: #ea4e38;
            color: #fff;
            border: 1px solid #000 !important;

            border-radius: 6px;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

  
        .formbold-mb-5 {
            margin-bottom: 5px;
        }

        .formbold-pt-3 {
            padding-top: 12px;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            display: none;
        }

        .formbold-form-wrapper.active {
            display: block;
        }

        .formbold-form-label {
            display: block;
            font-weight: 500;
            font-size: 12px;
            color: #07074d;
            margin-bottom: 0px;
        }

        .formbold-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .formbold-form-input {
            width: 100%;
            padding: 5px 10px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 12px;
            color: #6b7280;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
        }

        .formbold-px-3 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .w-full {
            width: 100%;
        }

        .formbold-form-header {
            background: #6a64f1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 36px;
            border-radius: 8px 8px 0px 0px;
        }

        .formbold-form-header h3 {
            font-weight: 700;
            font-size: 20px;
            color: white;
        }

        .formbold-form-header button {
            color: white;
            background: transparent;
            border: none;
        }

        .formbold-chatbox-form {
            padding: 32px 36px;
        }

        .formbold-action-buttons {
            /* max-width: 550px; */
            margin-left: auto;
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-top: 0px;
        }

        .formbold-action-btn {
            width: 60px;
            height: 60px;
           
      
            color: white;
            border-radius: 50%;
            margin-left: 20px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .formbold-action-btn .formbold-cross-icon {
            display: none;
        }

        .formbold-action-btn.active .formbold-cross-icon {
            display: block;
        }

        .formbold-action-btn.active .formbold-chat-icon {
            display: none;
        }

        .lblh1 {
        
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px 50px !important;
            border-radius: 8px 8px 0px 0px;
            font-size: 14px;
            color: #fff !important;
        }

        .lbla {
            color: #000 !important;
        }

        .lblm-b {
            margin-bottom: 20px;
        }

        .lblp {
            color: black !important;
            display: flex;
            margin-bottom: 0px;
            font-size: 14px;
        }

        .lblcancle {
            background-color: #ab853c;
            color: #fff !important;
            border: 1px solid #ab853c !important;
            padding: 10px 10px;
            cursor: pointer;
            width: 48%;
            margin-bottom: 10px;
            line-height: 12px;
            border-radius: 6px;
            margin-bottom: 0px !important;
        }

        .banner-area .box-cell,
        .banner-area .box-cell div,
        .banner-area.auto-height,
        .banner-area.auto-height div {
            z-index: 1;
        }

        .btn {
            line-height: 12px;
        }

        input {
            min-height: 0px;
        }

        .d-n {
            display: none;
        }

        .lblcross {
            color: #000;
            text-align: end;
            font-weight: 800;
            cursor: pointer;
        }

        .lblchat {
            background: #F2F2F2;
            padding: 10px;
            border-radius: 20px 20px 20px 5px;
            margin-bottom: 10px;

        }

        .lblchath1 {
            font-size: 20px;
            font-weight: 600;
            color: #000 !important;
            margin: 0 0 0px !important;

        }

        .lblh3 {
            color: #000 !important;
            font-size: 20px;
            text-align: center;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .lblp1 {
            color: #000 !important;
            font-size: 14px;
            line-height: 20px;
            text-align: center;
        }

        .lbllabel {
            color: #000;
            font-size: 11px;
            line-height: 15px;
        }

        .divp {
            color: #000 !important;
            font-size: 12px;
            line-height: 18px;
            margin-top: 50px;
            background: rgb(250, 251, 251);
            padding: 10px;
            border-radius: 8px;
        }

        .lblbefore {
            margin-top: 50px;
        }

        .divp a {
            color: #000 !important;
            border-bottom: 1px solid;
        }
    </style>
    <style>
        /* 12 */
        .btn-12 {
            position: relative;
            right: 20px;
            bottom: 20px;
            border: none;
            box-shadow: none;
            width: 130px;
            height: 40px;
            line-height: 42px;
            -webkit-perspective: 230px;
            perspective: 230px;
        }

        .btn-12 span {
            background: rgb(0, 172, 238);
            background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
            display: block;
            position: absolute;
            width: 130px;
            height: 40px;
            
            border-radius: 5px;
            margin: 0;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all .3s;
            transition: all .3s;
        }

        .btn-12 span:nth-child(1) {
            box-shadow:
                -7px -7px 20px 0px #fff9,
                -4px -4px 5px 0px #fff9,
                7px 7px 20px 0px #0002,
                4px 4px 5px 0px #0001;
            -webkit-transform: rotateX(90deg);
            -moz-transform: rotateX(90deg);
            transform: rotateX(90deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
            transform-origin: 50% 50% -20px;
        }

        .btn-12 span:nth-child(2) {
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
            transform-origin: 50% 50% -20px;
        }

        .btn-12:hover span:nth-child(1) {
            
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
        }

        .btn-12:hover span:nth-child(2) {
      
            color: transparent;
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
        }
    </style>
    <style>
        input {
            height: 32px !important;
     
        }

        input {
            height: 38px;
            padding: 0 12px 0 9px;
            padding-right: 25px;

            color: var(--body-color);
            background-color: transparent;
            border-radius: 8px;
            font-size: 16px;
            width: 100%;
            font-family: var(--body-font);
            -webkit-transition: 0.4s ease-in-out;
            transition: 0.4s ease-in-out
        }

        input:focus {
            outline: 0;
            box-shadow: none;
            border-color: #ff4136;
            background-color: transparent
        }
    </style>

    <script>
        function backToPreviousForm() {
            // Hide all popup forms
            document.querySelectorAll('.form-container').forEach(el => el.style.display = 'none');

            // Show lbl11 form (chat box)
            const form = document.querySelector('.lbl11');
            if (form) form.style.display = 'block';
        }
    </script>
    <script>
        function backToPreviousFormlast() {
            // Hide all popup forms
            document.querySelectorAll('.form-container').forEach(el => el.style.display = 'none');

            // Show lbl11 form (chat box)
            const form = document.querySelector('.lbl11');
            if (form) form.style.display = 'block';
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
            const el = document.querySelector(".intro-text");

            if (!el) return; // Exit if element not found

            el.textContent = "";
            let i = 0;

            const interval = setInterval(() => {
                el.textContent += text[i];
                i++;
                if (i === text.length) clearInterval(interval);
            }, 50);
        });
    </script>

    <script>
        function openPopupForm(className) {
            document.querySelectorAll('.form-container').forEach(function (form) {
                form.style.display = 'none';
            });

            const target = document.querySelector('.' + className);
            if (target) {
                target.style.display = 'block';
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdown = document.getElementById("chatDropdown");

            if (dropdown) {
                dropdown.addEventListener("change", function () {
                    const selectedForm = this.value;

                    // Hide all forms first
                    document.querySelectorAll(".form-container").forEach(form => {
                        form.style.display = "none";
                    });

                    // Show the selected form
                    if (selectedForm) {
                        const selectedFormElement = document.querySelector("." + selectedForm);
                        if (selectedFormElement) {
                            selectedFormElement.style.display = "block";
                        }
                    }
                });
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const textarea = document.querySelector(".textarea-container textarea");
            const chatForm = document.querySelector(".form-container.lbl11");
            const emailForm = document.querySelector(".form-container:not(.lbl11)");

            // Check if textarea exists before adding event listener
            if (textarea) {
                textarea.addEventListener("keypress", function (event) {
                    if (event.key === "Enter" && !event.shiftKey) {
                        event.preventDefault(); // Prevents new line
                        if (chatForm) chatForm.style.display = "none";
                        if (emailForm) emailForm.style.display = "block";
                    }
                });
            }
        });

        function closeForm2() {
            document.querySelectorAll(".form-container").forEach(form => {
                form.style.display = "none";
            });
        }
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sendIcon = document.querySelector(".send-icon");
            const chatForm = document.querySelector(".form-container.lbl11");
            const emailForm = document.querySelector(".form-container.lbl44");
            const emailForm22 = document.querySelector(".form-container.lbl22");

            if (sendIcon) {
                sendIcon.addEventListener("click", function () {
                    if (chatForm) chatForm.style.display = "none";
                    if (emailForm) emailForm.style.display = "block";
                    if (emailForm22) emailForm22.style.display = "block";
                });
            }
        });

        function closeForm2() {
            document.querySelectorAll(".form-container").forEach(form => {
                form.style.display = "none";
            });
        }
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const textarea = document.querySelector(".textarea-container textarea");
            const sendIcon = document.querySelector(".send-icon");
            const chatForm = document.querySelector(".form-container.lbl11"); // Chat form
            const emailForm = document.querySelector(".form-container.lbl44"); // Email form
            const emailForm22 = document.querySelector(".form-container.lbl22"); // Email form

            // Only run if all required elements exist
            if (textarea && sendIcon) {
                // Disable send icon initially
                sendIcon.style.opacity = "0.5";
                sendIcon.style.pointerEvents = "none";

                // Enable send icon when there is text
                textarea.addEventListener("input", function () {
                    if (textarea.value.trim() !== "") {
                        sendIcon.style.opacity = "1";
                        sendIcon.style.pointerEvents = "auto";
                    } else {
                        sendIcon.style.opacity = "0.5";
                        sendIcon.style.pointerEvents = "none";
                    }
                });

                // Handle send icon click
                sendIcon.addEventListener("click", function () {
                    if (textarea.value.trim() !== "") {
                        if (chatForm) chatForm.style.display = "none";
                        if (emailForm) emailForm.style.display = "block";
                        if (emailForm22) emailForm22.style.display = "block";
                    }
                });
            }
        });

        function closeForm2() {
            document.querySelectorAll(".form-container").forEach(form => {
                form.style.display = "none";
            });
        }
    </script>


    <script>
        function showForm(formToShow) {
            var form1 = document.querySelector(".lbl11");
            var form2 = document.querySelector(".lbl22");
            var form3 = document.querySelector(".lbl33");
            var form4 = document.querySelector(".lbl44");

            form1 && (form1.style.display = "none");
            form2 && (form2.style.display = "none");
            form3 && (form3.style.display = "none");
            form4 && (form4.style.display = "none");

            if (formToShow === "lbl11") form1 && (form1.style.display = "block");
            else if (formToShow === "lbl22") form2 && (form2.style.display = "block");
            else if (formToShow === "lbl33") form3 && (form3.style.display = "block");
            else if (formToShow === "lbl44") form4 && (form4.style.display = "block");
        }

        function closeForm2() {
            var popup = document.querySelector(".chat-popup");
            if (popup) popup.style.display = "none";
        }

        // Show popup on phone icon click and open lbl44 form
        const phoneIcons = document.querySelectorAll("li i.fa-phone, li i.fas.fa-phone, li i.fa.fa-phone");
        phoneIcons.forEach(icon => {
            const link = icon.nextElementSibling;
            if (link && link.tagName === 'A') {
                link.addEventListener("click", function (event) {
                    event.preventDefault();
                    const popup = document.querySelector(".chat-popup");
                    if (popup) popup.style.display = "block";
                    showForm("lbl33");
                });
            }
        });

        // If needed: other handlers for other icons
        const emailIcons = document.querySelectorAll("li i.fas.fa-envelope-open, li i.lblemail");
        emailIcons.forEach(icon => {
            const link = icon.nextElementSibling;
            if (link && link.tagName === 'A') {
                link.addEventListener("click", function (event) {
                    event.preventDefault();
                    const popup = document.querySelector(".chat-popup");
                    if (popup) popup.style.display = "block";
                    showForm("lbl33");
                });
            }
        });

        const openBtn = document.querySelector(".open-button");
        if (openBtn) {
            openBtn.addEventListener("click", function () {
                const popup = document.querySelector(".chat-popup");
                if (popup) popup.style.display = "block";
                showForm("lbl11");
            });
        }
    </script>


    <!-- Email code start-->
    <script>
        function toggleFields(event) {
            event.preventDefault();
            var fields = document.getElementById('additionalFields');
            if (fields.style.display === 'none') {
                fields.style.display = 'block';
            } else {
                fields.style.display = 'none';
            }
        }

        function closeForm1() {
            // Add your close form logic here
        }
    </script>
    <!-- Email code end-->

    <script>
        function toggleOtherFields(event) {
            event.preventDefault(); // Prevent the default action of the link
            var otherFields = document.getElementById('other-fields');
            if (otherFields.style.display === "none") {
                otherFields.style.display = "block";
            } else {
                otherFields.style.display = "none";
            }
        }

        function closeForm2() {
            document.querySelector('.form-container').style.display = 'none';
        }
    </script>

    <script>
        function closeForm2() {
            document.querySelector(".chat-popup").style.display = "none";
        }
    </script>

    <script>
        function selectCategoryAndOpenForm(categoryName) {
            const input = document.getElementById('selected_category');
            if (input) {
                input.value = categoryName;
            }

        
            openPopupForm('lbl44');
        }
    </script>

    <script>
        function submitPopupForm(actionText) {
         
            document.getElementById('btn_action').value = actionText;

            
            openPopupForm('lbl44');
        }
    </script>
    
    </body>

    </html>
