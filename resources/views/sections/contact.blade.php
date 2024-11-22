    <!-- Start Contact us
  ============================================= -->
    <div class="contact-area bg-3 de-padding"  @if (App::getLocale() == 'ar') dir="rtl" @endif id="contact">
        <div class="container">
            <div class="contact-wpr">
                <div class="row g-5">
                    <div class="col-xl-4">
                        <div class="contact-sdebar">
                            <div class="contact-up-title">
                                <h2 class="heading-1">
                                    {{ __('messages.contactTitle') }}
                                </h2>
                                <p class="mb-0">
                                    {{ __('messages.contactSubtitle') }}
                                </p>
                            </div>
                            <div class="addr-home">
                                <div class="addr-box">
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-google-map"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>{{ __('messages.Location') }}</h5>
                                            <p class="mb-0">
                                                {{ __('messages.address1') }} <br>
                                                {{ __('messages.address2') }} 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-phone"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>{{ __('messages.phone') }}</h5>
                                            <p class="mb-0" dir="ltr">
                                                +963 958 000 280<br>
                                                +971 56 946 7274
                                            </p>
                                        </div>
                                    </div>
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-email"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>{{ __('messages.Email') }}</h5>
                                            <p class="mb-0">
                                                operations@jsh-logistic.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-home pl-30">
                            {{-- <form action="https://themekar.com/templatebucket/logtra/logtra/assets/mail/contact.php"
                                method="post" class="contact-form">
                                <div class="contact-form-title mb-30">
                                    <h2 class="heading-1">
                                        Send us a message
                                    </h2>
                                    <p class="mb-0">
                                        Integer at lorem eget diam facilisis lacinia ac id massage
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 col-md-5 col-lg-5 col-sm-12">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-style-2" id="name"
                                                    name="name" placeholder="Your Full Name*">
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control input-style-2" id="email"
                                                    name="email" placeholder="Your Email Address*">
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-style-2" id="phone"
                                                    name="phone" placeholder="Phone Number">
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-md-7 col-lg-7 col-sm-12">
                                        <div class="col-md-12">
                                            <textarea class="form-control input-style-2" id="comment" name="comments" placeholder="Your Message..."></textarea>
                                            <!-- Alert Message -->
                                            <div class="alert-notification">
                                                <div id="message" class="alert-msg"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-btn d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree to the <span>Terms &amp; Conditions</span>
                                        </label>
                                    </div>
                                    <div class="contact-sub-btn">
                                        <button type="submit" name="submit" id="submit" class="btn-submit">
                                            Send Message
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> --}}
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d415.7771223123928!2d36.289956422349704!3d33.521743857779235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snl!4v1732291376498!5m2!1sen!2snl" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1803.831056568748!2d55.396235498773684!3d25.281949405316226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c2612635b29%3A0x623324569a15ce4!2zTWFkaW5hIE1hbGwg2YXYr9mK2YbYqSDZhdmI2YQ!5e0!3m2!1sen!2snl!4v1732293823945!5m2!1sen!2snl" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
