<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Menti School</title>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/menti-icon.png') }}">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="signinform">
                <img src="{{ asset('images/menti-icon.png') }}" alt="Menti School LOGO" style="height:80px;">
                <h2>Reset Your Password</h2>
                <p>Enter your email address and we'll send you instructions to reset your password.</p>
                
                <form action="{{ route('password.reset') }}" method="post">
                    @csrf
                    <div>
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <input type="submit" value="Send Reset Instructions">
                </form>
                
                <div style="margin-top: 20px;">
                    <a href="{{ route('signin') }}">Back to Sign In</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>