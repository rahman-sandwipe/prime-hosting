<form action="{{ route('settingsUpdate') }}" method="POST">
    @csrf
    <!-- SEO Settings Hidden input -->
    <input type="hidden" name="seo-settings" value="1">

    <!-- Meta Title -->
    <div class="form-group">
        <label for="metaTitle">Meta Title</label>
        <input type="text" class="form-control" id="metaTitle" name="meta_title">
    </div>

    <!-- Meta Description -->
    <div class="form-group">
        <label for="metaDescription">Meta Description</label>
        <textarea class="form-control" id="metaDescription" name="meta_description" rows="3"></textarea>
    </div>

    <!-- Meta Keywords -->
    <div class="form-group">
        <label for="metaKeywords">Meta Keywords</label>
        <input type="text" class="form-control" id="metaKeywords" name="meta_keywords">
    </div>

    <!-- Meta Author -->
    <div class="form-group">
        <label for="metaAuthor">Meta Author</label>
        <input type="text" class="form-control" id="metaAuthor" name="meta_author">
    </div>

    <!-- Robots -->
    <div class="form-group">
        <label for="robots">Robots</label>
        <input type="text" class="form-control" id="robots" name="robots" placeholder="index, follow">
    </div>

    <!-- Canonical URL -->
    <div class="form-group">
        <label for="canonicalUrl">Canonical URL</label>
        <input type="text" class="form-control" id="canonicalUrl" name="canonical_url">
    </div>

    <!-- Structured Data -->
    <div class="form-group">
        <label for="structuredData">Structured Data (JSON-LD)</label>
        <textarea class="form-control" id="structuredData" name="structured_data" rows="3"></textarea>
    </div>

    <!-- Google Analytics ID -->
    <div class="form-group">
        <label for="googleAnalyticsId">Google Analytics ID</label>
        <input type="text" class="form-control" id="googleAnalyticsId" name="google_analytics_id">
    </div>

    <!-- Bing Webmaster ID -->
    <div class="form-group">
        <label for="bingWebmasterId">Bing Webmaster ID</label>
        <input type="text" class="form-control" id="bingWebmasterId" name="bing_webmaster_id">
    </div>

    <!-- Yandex Verification Code -->
    <div class="form-group">
        <label for="yandexVerificationCode">Yandex Verification Code</label>
        <input type="text" class="form-control" id="yandexVerificationCode" name="yandex_verification_code">
    </div>

    <!-- Google Tag Manager ID -->
    <div class="form-group">
        <label for="googleTagManagerId">Google Tag Manager ID</label>
        <input type="text" class="form-control" id="googleTagManagerId" name="google_tag_manager_id">
    </div>

    <!-- Google Tag Manager No Script -->
    <div class="form-group">
        <label for="googleTagManagerNoScript">Google Tag Manager No Script</label>
        <textarea class="form-control" id="googleTagManagerNoScript" name="google_tag_manager_no_script" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Save</button>
</form>

<script>
    $(document).ready(function() {
        // Load existing SEO Settings if available
        @if(isset($seo))
            $('#metaTitle').val('{{ $seo->meta_title ?? "N/A" }}');
            $('#metaDescription').val('{{ $seo->meta_description ?? "N/A" }}');
            $('#metaKeywords').val('{{ $seo->meta_keywords ?? "N/A" }}');
            $('#metaAuthor').val('{{ $seo->meta_author ?? "N/A" }}');
            $('#robots').val('{{ $seo->robots ?? "N/A" }}');
            $('#canonicalUrl').val('{{ $seo->canonical_url ?? "N/A" }}');
            $('#structuredData').val('{{ $seo->structured_data ?? "N/A" }}');
            $('#googleAnalyticsId').val('{{ $seo->google_analytics_id ?? "N/A" }}');
            $('#bingWebmasterId').val('{{ $seo->bing_webmaster_id ?? "N/A" }}');
            $('#yandexVerificationCode').val('{{ $seo->yandex_verification_code ?? "N/A" }}');
            $('#googleTagManagerId').val('{{ $seo->google_tag_manager_id ?? "N/A" }}');
            $('#googleTagManagerNoScript').val('{{ $seo->google_tag_manager_no_script ?? "N/A" }}');
        @endif
    });
</script>