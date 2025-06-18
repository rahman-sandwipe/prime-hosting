<section class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <i class="fas fa-location-arrow"></i>
                    <h4>{{ __('Address') }}</h4>
                    <p>{{ config('app.contact_info.address') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card active">
                    <i class="fas fa-phone-alt"></i>
                    <h4>{{ __('Contact Number') }}</h4>
                    <p>
                        <a href="#">
                            {{ config('app.contact_info.contact_number') }}
                            <span>{{ __('for call') }}</span>
                        </a>
                        <a href="#">
                            {{ config('app.contact_info.whatsapp_number') }}
                            <span>{{ __('for whatsapp') }}</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h4>{{ __('Email') }}</h4>
                    <p>
                        <a href="#">{{ config('app.contact_info.contact_email') }}</a>
                        <a href="#">{{ config('app.contact_info.support_email') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>