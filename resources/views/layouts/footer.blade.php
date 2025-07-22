<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodKind Footer</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <footer class="footer" id="footer">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Left Section - Logo and Tagline -->
                <div class="footer-left">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="BloodKind Logo" class="logo-image">
                        <span>BLOODKIND</span>
                    </div>
                    <p class="tagline">Saving lives through blood donation. Every drop counts.</p>
                </div>

                <!-- Middle Section - Quick Links -->
                <div class="footer-middle">
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('signup') }}">Sign Up</a></li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#collaborators">Our Collaborators</a></li>
                        <li><a href="#features">Our Features</a></li>
                    </ul>
                </div>

                <!-- Right Section - Contact -->
                <div class="footer-right">
                    <h3>Contact</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>0908-709-7775</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>Bloodkind@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Roxas, Iloilo Philippines</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="footer-bottom">
                <div class="copyright">
                    <p>&copy; 2025 BloodKind Center. All rights reserved.</p>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>