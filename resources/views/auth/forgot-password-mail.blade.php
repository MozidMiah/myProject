<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f2f4f6;
            font-family: Arial, sans-serif;
        }

        .email-container {
            width: 100%;
            padding: 30px 0;
        }

        .card {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.08);
        }

        .header {
            background: #0d6efd;
            padding: 25px;
            text-align: center;
            color: white;
        }

        .header h2 {
            margin: 0;
            font-size: 22px;
        }

        .content {
            padding: 30px;
            text-align: center;
        }

        .content p {
            font-size: 15px;
            color: #444;
            line-height: 1.7;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: #0d6efd;
            color: white !important;
            text-decoration: none;
            font-size: 16px;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn:hover {
            background: #084298;
        }

        .footer {
            background: #f7f7f7;
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #777;
        }

        .link-text {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
            word-break: break-all;
        }
    </style>
</head>

<body>

<div class="email-container">

    <div class="card">

        <!-- Header -->
        <div class="header">
            <h2>Password Reset Request</h2>
        </div>

        <!-- Content -->
        <div class="content">
            <p>Hello,</p>

            <p>
                We received a request to reset your password.
                Click the button below to reset your password.
            </p>

            <a href="{{ route('reset.password', $token) }}" class="btn">
                Reset Password
            </a>

            <p style="margin-top: 25px;">
                If you did not request a password reset, you can safely ignore this email.
            </p>

            <p class="link-text">
                If button doesn't work, copy and paste this link into your browser:<br>
                <a href="{{ route('reset.password', $token) }}">
                    {{ route('reset.password', $token) }}
                </a>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} Your Application. All Rights Reserved.
        </div>

    </div>

</div>

</body>
</html>
