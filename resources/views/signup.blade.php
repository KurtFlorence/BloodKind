<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - BloodKind</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <div class="signup-container">
        <!-- Left Card - Branding -->
        <div class="brand-card">
            <div class="brand-header">
                <h1 class="brand-title">BLOODKIND</h1>
            </div>
            <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="BloodKind Logo" class="logo-image">
            </div>
        </div>

        <!-- Right Card - Signup Form -->
        <div class="form-card">
            <div class="form-header">
                <h2>SIGN UP</h2>
            </div>
            <form action="#" method="POST" id="signup-form">
                @csrf
                <div class="form-group">
                    <div class="input-line">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <i class="fas fa-envelope icon"></i>
                    </div>
                </div>
                
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
                
                <div class="form-group">
                    <div class="input-line">
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm Password" required>
                        <i class="fas fa-lock icon"></i>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">Sign Up</button>
                
                <div class="form-links">
                    <a href="{{ route('login') }}">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>