<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodKind - Login</title>
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

        <!-- Right Card - Login Form -->
        <div class="login-card">
            <div class="login-header">
                <h2>LOGIN</h2>
            </div>
            <form action="#" method="POST" id="login-form">
                @csrf
                <div class="form-group">
                    <div class="input-line">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                        <i class="fas fa-user icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-line">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class="fas fa-lock icon"></i>
                    </div>
                </div>
                
                <button type="submit" class="login-btn">Login</button>
                
                <div class="form-links">
                    <a href="{{ route('signup') }}">Create an account</a>
                    <span class="divider">|</span>
                    <a href="{{ route('forgot') }}">Forgot password?</a>
                </div>
            </form>
            <a href="{{ route('landing') }}" class="landing-btn">Go to Landing Page</a>
        </div>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your form submission logic here
            console.log('Form submitted');
        });
    </script>
</body>
</html>