<form action="{{ route('settingsUpdate') }}" method="POST">
    @csrf
    <input type="hidden" name="mail-configs" value="1">

    <div class="form-group">
        <label for="mailDriver">Mail Driver</label>
        <input type="text" class="form-control" id="mailDriver" name="mail_driver" />
    </div>

    <div class="form-group">
        <label for="mailHost">Mail Host</label>
        <input type="text" class="form-control" id="mailHost" name="mail_host" />
    </div>

    <div class="form-group">
        <label for="mailPort">Mail Port</label>
        <input type="text" class="form-control" id="mailPort" name="mail_port" />
    </div>

    <div class="form-group">
        <label for="mailUsername">Mail Username</label>
        <input type="text" class="form-control" id="mailUsername" name="mail_username" />
    </div>

    <div class="form-group">
        <label for="mailPassword">Mail Password</label>
        <input type="text" class="form-control" id="mailPassword" name="mail_password"  />
    </div>

    <div class="form-group">
        <label for="mailFromName">From Name</label>
        <input type="text" class="form-control" id="mailFromName" name="mail_from_name" />
    </div>

    <div class="form-group">
        <label for="mailFromEmail">From Email</label>
        <input type="email" class="form-control" id="mailFromEmail" name="mail_from_email" />
    </div>

    <button type="submit" class="btn btn-primary btn-block">Save</button>
</form>
<script>
    $(document).ready(function() {
    // Load existing mail configurations safely
    $('#mailDriver').val(@json($mail->mail_driver ?? 'smtp'));
    $('#mailHost').val(@json($mail->mail_host ?? '127.0.0.1'));
    $('#mailPort').val(@json($mail->mail_port ?? '587'));
    $('#mailUsername').val(@json($mail->mail_username ?? 'N/A'));
    $('#mailPassword').val(@json($mail->mail_password ?? 'N/A'));
    $('#mailFromName').val(@json($mail->mail_from_name ?? 'N/A'));
    $('#mailFromEmail').val(@json($mail->mail_from_email ?? 'N/A'));
    })
</script>