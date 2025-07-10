<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodKind - Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <!-- Left Card - Branding -->
        <div class="brand-card">
            <div class="brand-header">
                <h1 class="brand-title">BLOODKIND</h1>
            </div>
            <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="BloodKind Logo" class="logo-image">
            </div>
        </div>

        <!-- Right Card - Forgot Password Form -->
        <div class="login-card">
            <div class="login-header">
                <h2>Forgot Password</h2>
            </div>
            <form action="#" method="POST" id="forgot-form">
                @csrf
                <div class="form-group">
                    <div class="input-line">
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        <i class="fas fa-envelope icon"></i>
                    </div>
                </div>
                <button type="submit" class="login-btn">Send Reset Link</button>
                <div class="form-links">
                    <a href="{{ route('login') }}">Back to Login</a>
                    <span class="divider">|</span>
                    <a href="{{ route('signup') }}">Create an account</a>
                </div>
            </form>
            <a href="{{ route('landing') }}" class="landing-btn">Go to Landing Page</a>
        </div>
    </div>

    <script>
        document.getElementById('forgot-form').addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your forgot password logic here
            console.log('Forgot password form submitted');
        });
    </script>
</body>
</html>