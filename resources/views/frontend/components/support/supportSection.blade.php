<section class="contact-part section-mb-95 mt-10">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <i class="fas fa-location-arrow"></i>
                    <h4>head office</h4>
                    <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card active">
                    <i class="fas fa-phone-alt"></i>
                    <h4>phone number</h4>
                    <p><a href="#">009-215-5596 <span>(toll free)</span></a><a href="#">009-215-5595</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h4>Support mail</h4>
                    <p><a href="#">contact@example.com</a><a href="#">info@example.com</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-map">
                    {!! $contact->map_iframe !!}
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('support.store') }}" method="POST" class="contact-form">
                    @csrf
                    <h4>send us a message</h4>

                    @guest
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                    @endguest

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="form-btn-group">
                        <i class="fas fa-envelope"></i>
                        <span>send message</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
