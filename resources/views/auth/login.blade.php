<h2>Login</h2>

@if (session('message'))
    <p style="color:green">{{ session('message') }}</p>
@endif

@if (session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

<form method="POST" action="{{ route('login.check') }}">
    @csrf

    <input type="email" name="email" placeholder="Enter Email"><br><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>

    <button type="submit">Login</button>
    <button type="button" onclick="window.location='{{ route('forgot.password') }}'">
        Forgot Password
    </button>


</form>

<a href="{{ route('register') }}">Create a account</a>
