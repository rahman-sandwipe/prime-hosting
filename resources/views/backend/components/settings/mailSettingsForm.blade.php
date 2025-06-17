<form action="{{ route('settingsUpdate') }}" method="POST">
    @csrf
    <input type="hidden" name="mail-settings" value="1">

    <div class="form-group">
        <label for="mailer">Mail Mailer / Transport</label>
        <input type="text" class="form-control" id="mailer" name="mailer" value="{{ old('mailer', $mail->mailer ?? 'smtp') }}">
    </div>

    <div class="form-group">
        <label for="host">Mail Host</label>
        <input type="text" class="form-control" id="host" name="host" value="{{ old('host', $mail->host ?? '') }}">
    </div>

    <div class="form-group">
        <label for="port">Mail Port</label>
        <input type="text" class="form-control" id="port" name="port" value="{{ old('port', $mail->port ?? '') }}">
    </div>

    <div class="form-group">
        <label for="username">Mail Username</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $mail->username ?? '') }}">
    </div>

    <div class="form-group">
        <label for="password">Mail Password</label>
        <input type="text" class="form-control" id="password" name="password" value="{{ old('password', $mail->password ?? '') }}">
    </div>

    <div class="form-group">
        <label for="encryption">Mail Encryption (e.g. ssl/tls)</label>
        <input type="text" class="form-control" id="encryption" name="encryption" value="{{ old('encryption', $mail->encryption ?? '') }}">
    </div>

    <div class="form-group">
        <label for="from_address">Mail From Address</label>
        <input type="email" class="form-control" id="from_address" name="from_address" value="{{ old('from_address', $mail->from_address ?? '') }}">
    </div>

    <div class="form-group">
        <label for="from_name">Mail From Name</label>
        <input type="text" class="form-control" id="from_name" name="from_name" value="{{ old('from_name', $mail->from_name ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Save Mail</button>
</form>
