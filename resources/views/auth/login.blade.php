<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: #fff;
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.2);
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .alert-success {
            background: #d1e7dd;
            color: #0f5132;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .alert-error {
            background: #f8d7da;
            color: #842029;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        input:focus {
            border-color: #0d6efd;
            box-shadow: 0px 0px 5px rgba(13, 110, 253, 0.5);
        }

        .error-text {
            color: red;
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login {
            background: #0d6efd;
            color: white;
        }

        .btn-login:hover {
            background: #084298;
        }

        .btn-forgot {
            background: #6c757d;
            color: white;
            margin-top: 10px;
        }

        .btn-forgot:hover {
            background: #565e64;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .register-link a {
            text-decoration: none;
            color: #0d6efd;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h2>Login</h2>

        {{-- Success Message --}}
        @if (session('message'))
            <div class="alert-success">
                {{ session('message') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert-error">
                {{ session('error') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert-error">
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.check') }}">
            @csrf

            {{-- Email --}}
            <div class="form-group">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">

                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            {{-- Password --}}
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter Password">

                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-login">Login</button>

            <button type="button" class="btn btn-forgot"
                onclick="window.location='{{ route('forgot.password') }}'">
                Forgot Password
            </button>
        </form>

        <div class="register-link">
            Don't have an account?
            <a href="{{ route('register') }}">Create an Account</a>
        </div>
    </div>

</body>
</html>
