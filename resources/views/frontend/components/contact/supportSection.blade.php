

<section class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-map">
                    {!! $contact->map_iframe !!}
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('contact.form') }}" method="POST" class="contact-form">
                    @csrf
                    <h4>Send us a message</h4>
                    @guest
                        <div class="form-group">
                            <div class="form-input-group">
                                <i class="fas fa-user-alt"></i>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-input-group">
                                <i class="fas fa-mail-bulk"></i>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-input-group">
                                <i class="fas fa-phone-alt"></i>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                        </div>
                    @endguest
                    
                    <div class="form-group">
                        <div class="form-input-group">
                            <i class="fas fa-bookmark"></i>
                            <input type="text" name="subject" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-input-group">
                            <i class="fas fa-paragraph"></i>
                            <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>
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
