<div class="row">
    <div class="col-lg-6">
        <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="100%" aria-hidden="false" tabindex="0"></iframe></div>
    </div>
    <div class="col-lg-6">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form class="contact-form" action="{{ route('contactPage') }}" method="POST">
            @csrf
            <h4>Drop Your Thoughts</h4>
            <div class="form-group">
                <div class="form-input-group">
                    <input class="form-control" type="text" name="name" placeholder="Your Name" required>
                    <i class="fas fa-user-alt"></i>
                </div>
            </div>
            <div class="form-group">
                <div class="form-input-group">
                    <input class="form-control" type="email" name="email" placeholder="Your Email" required>
                    <i class="fas fa-mail-bulk"></i>
                </div>
            </div>
            <div class="form-group">
                <div class="form-input-group">
                    <input class="form-control" type="text" name="subject" placeholder="Your Subject" required>
                    <i class="fas fa-bookmark"></i>
                </div>
            </div>
            <div class="form-group">
                <div class="form-input-group">
                    <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                    <i class="fas fa-paragraph"></i>
                </div>
            </div>
            <button type="submit" class="form-btn-group">
                <i class="fas fa-envelope"></i>
                <span>send message</span>
            </button>
        </form>
    </div>
</div>