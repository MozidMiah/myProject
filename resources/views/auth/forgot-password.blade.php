<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>

<h2>Forgot Password</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

@if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

<form action="{{ route('forgot.password.post') }}" method="POST">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <button type="submit">Send Reset Link</button>
</form>

</body>
</html>
