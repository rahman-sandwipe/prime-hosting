<div class="header-top">
    <div class="container">
        <div class="header-top-content">
            <div class="header-info-group">
                <a href="tel:{{ config('app.contact_info.phone_number') }}" class="header-info">
                    <i class="fas fa-phone-alt"></i>
                    <span>{{ config('app.contact_info.contact_number') }}</span>
                </a>
                <a href="#" class="header-info">
                    <i class="fas fa-envelope"></i>
                    <span>{{ config('app.contact_info.contact_email') }}</span>
                </a>
                <a href="/contact-us" class="header-info">
                    <i class="fas fa-comments"></i>
                    <span>Live Chatting</span>
                </a>
            </div>

            <div class="header-select-group">
                <div class="header-select">
                    <i class="fas fa-flag"></i>
                    <select class="select">
                        <option value="en" selected>English - USA</option>
                        <option value="bn">Bangali - BD</option>
                    </select>
                </div>
                <div class="header-select">
                    <i class="fas fa-globe"></i>
                    <select class="select">
                        <option value="en" selected>Doller - $USD</option>
                        <option value="bn">Take - ৳BD</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>