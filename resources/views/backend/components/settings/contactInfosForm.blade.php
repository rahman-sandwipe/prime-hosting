<form action="{{ route('settingsUpdate') }}" method="POST">
    @csrf
    <input type="hidden" name="contact-infos" value="1">

    <div class="form-group">
        <label for="contactEmail">Contact Email</label>
        <input type="email" class="form-control" id="contactEmail" name="contact_email">
    </div>

    <div class="form-group">
        <label for="supportEmail">Support Email</label>
        <input type="email" class="form-control" id="supportEmail" name="support_email">
    </div>

    <div class="form-group">
        <label for="contactPhone">Contact Phone</label>
        <input type="text" class="form-control" id="contactPhone" name="contact_phone">
    </div>

    <div class="form-group">
        <label for="whatsappNumber">WhatsApp Number</label>
        <input type="text" class="form-control" id="whatsappNumber" name="whatsapp_number">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="mapIframe">Google Map iFrame</label>
        <textarea class="form-control" id="mapIframe" name="map_iframe" rows="4"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Save</button>
</form>
<script>
    $(document).ready(function() {
        // Load existing contact information safely
        $('#contactEmail').val(@json($contact->contact_email ?? 'contact@domain.com'));
        $('#supportEmail').val(@json($contact->support_email ?? 'support@domain.com'));
        $('#contactPhone').val(@json($contact->contact_phone ?? '+1234567890'));
        $('#whatsappNumber').val(@json($contact->whatsapp_number ?? '+1234567890'));
        $('#address').val(@json($contact->address ?? '123 Main St, City, Country'));
        $('#mapIframe').val(@json($contact->map_iframe ?? 'N/A'));
    });
</script>