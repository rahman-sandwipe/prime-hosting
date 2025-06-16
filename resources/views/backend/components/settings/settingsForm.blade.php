<form action="{{ route('settingsUpdate') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="site-settings" value="1">

    <div class="form-group">
        <label for="siteName">Site Name</label>
        <input type="text" class="form-control" id="siteName" name="site_name">
    </div>

    <div class="form-group">
        <label for="siteTagline">Site Tagline</label>
        <input type="text" class="form-control" id="siteTagline" name="site_tagline">
    </div>

    <div class="form-group">
        <label for="defaultLanguage">Default Language</label>
        <input type="text" class="form-control" id="defaultLanguage" name="default_language">
    </div>

    <div class="form-group">
        <label for="defaultTimezone">Default Timezone</label>
        <input type="text" class="form-control" id="defaultTimezone" name="default_timezone">
    </div>

    {{-- Light Logo --}}
    <div class="form-group row">
        <div class="col-10">
            <label for="lightLogo">Light Logo</label>
            <input type="file" class="form-control" id="lightLogo" name="light_logo" accept="image/*" onchange="previewImage(this, 'lightLogoPreview')">
        </div>
        <div class="col-2">
            <img id="lightLogoPreview" src="#" alt="Light Logo" height="70" width="120">
        </div>
    </div>

    {{-- Dark Logo --}}
    <div class="form-group row">
        <div class="col-10">
            <label for="darkLogo">Dark Logo</label>
            <input type="file" class="form-control" id="darkLogo" name="dark_logo" accept="image/*" onchange="previewImage(this, 'darkLogoPreview')">
        </div>
        <div class="col-2">
            <img id="darkLogoPreview" src="#" alt="Dark Logo" height="70" width="120">
        </div>
    </div>

    {{-- Favicon --}}
    <div class="form-group row">
        <div class="col-10">
            <label for="favicon">Favicon</label>
            <input type="file" class="form-control" id="favicon" name="favicon" accept="image/*" onchange="previewImage(this, 'faviconPreview')">
        </div>
        <div class="col-2 pt-2">
            <img id="faviconPreview" src="#" alt="Favicon" height="50" width="50">
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Save</button>
</form>

<script>
    function previewImage(input, previewId) {
        const file = input.files[0];
        const preview = document.getElementById(previewId);

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }
</script>
<script>
    $(document).ready(function () {
        $('#siteName').val('{{ $settings->site_name ?? "N/A" }}');
        $('#siteTagline').val('{{ $settings->site_tagline ?? "N/A" }}');
        $('#defaultLanguage').val('{{ $settings->default_language ?? 'en' }}');
        $('#defaultTimezone').val('{{ $settings->default_timezone ?? 'UTC' }}');

        $('#lightLogoPreview').attr('src', '{{ asset($settings->light_logo ?? "images/partials/default2.jpg") }}').show();
        $('#darkLogoPreview').attr('src', '{{ asset($settings->dark_logo ?? "images/partials/default2.jpg") }}').show();
        $('#faviconPreview').attr('src', '{{ asset($settings->favicon ?? "images/partials/default.jpg") }}').show();
    });
</script>
