<h2>Register</h2>

@if(session('message'))
    <p style="color:green">{{ session('message') }}</p>
@endif

<form method="POST" action="{{ route('register.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="email" name="email" placeholder="Enter Email"><br><br>

    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br><br>

    <button type="submit">Register</button>
</form>

<a href="{{ route('login') }}">Already have account? Login</a>
