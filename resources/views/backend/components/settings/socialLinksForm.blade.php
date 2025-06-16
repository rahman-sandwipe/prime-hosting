<form action="{{ route('settingsUpdate') }}" method="POST">
    @csrf
    <!-- Social Links Hidden input -->
    <input type="hidden" name="social-links" value="1">

    <div class="form-group">
        <label for="facebookInput">Facebook</label>
        <input type="text" class="form-control" id="facebookInput" name="facebook_url">
    </div>

    <div class="form-group">
        <label for="twitterInput">Twitter</label>
        <input type="text" class="form-control" id="twitterInput" name="twitter_url">
    </div>

    <div class="form-group">
        <label for="instagramInput">Instagram</label>
        <input type="text" class="form-control" id="instagramInput" name="instagram_url">
    </div>

    <div class="form-group">
        <label for="linkedinInput">Linkedin</label>
        <input type="text" class="form-control" id="linkedinInput" name="linkedin_url">
    </div>

    <div class="form-group">
        <label for="youtubeInput">YouTube</label>
        <input type="text" class="form-control" id="youtubeInput" name="youtube_url">
    </div>

    <div class="form-group">
        <label for="githubInput">GitHub</label>
        <input type="text" class="form-control" id="githubInput" name="github_url">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Save</button>
</form>
<script>
    $(document).ready(function() {
        // Load existing social links
        $('#facebookInput').val('{{ $social->facebook_url ?? "https://facebook.com/" }}');
        $('#twitterInput').val('{{ $social->twitter_url ?? "https://twiter.com/" }}');
        $('#instagramInput').val('{{ $social->instagram_url ?? "https://instagram.com/" }}');
        $('#linkedinInput').val('{{ $social->linkedin_url ?? "https://linkedin.com/" }}');
        $('#youtubeInput').val('{{ $social->youtube_url ?? "https://youtube.com/" }}');
        $('#githubInput').val('{{ $social->github_url ?? "https://github.com/" }}');
    });
</script>
