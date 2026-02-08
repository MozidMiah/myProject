<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>

<h2>Reset Password</h2>

@if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

<form action="{{ route('reset.password.post') }}" method="POST">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>New Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <label>Confirm Password:</label>
    <input type="password" name="password_confirmation" required>
    <br><br>

    <button type="submit">Reset Password</button>
</form>

</body>
</html>
