<h2>Welcome Dashboard</h2>

<h3>Hello, {{ Auth::user()->name }}</h3>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
