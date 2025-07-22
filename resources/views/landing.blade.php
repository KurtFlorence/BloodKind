<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BLOODKIND</title>
    <!-- Custom navbar styles -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    @include('layouts.header') 

    <section class="landing-hero" id="home">
        <div class="hero-content">
            <h1>
                Save A Life Here At<br>
                <span class="highlight">BLOOD</span>KIND
            </h1>
            <h2>Make a Difference</h2>
            <p>
                Every drop counts.<br>
                Join our mission to save lives through the simple yet powerful act of donating blood. Every day, patients in hospitals depend on generous donors like you to recover from surgeries, illnesses, and emergencies.<br>
                Whether you're donating for the first time or you're a regular hero, your blood can save up to three lives. Imagine being the reason a child beats cancer, a mother survives childbirth, or a loved one gets a second chance at life.<br>
                At our blood bank, your compassion makes a difference. You're not just giving blood — you're giving hope, healing, and time.<br>
                Be a hero. Donate blood. Save lives.
            </p>
            <a href="#footer" class="hero-btn">Contact Us</a>
        </div>
        <div class="hero-images">
            <!-- Large faded dropp.svg (background) -->
            <img src="{{ asset('images/dropp.svg') }}" alt="Blood drop background" class="hero-drop hero-drop-bg">
            <!-- Large plus.png (background) -->
            <img src="{{ asset('images/plus.png') }}" alt="Large blood drop icon" class="hero-plus hero-plus-lg">
            <!-- Small plus.png (foreground) -->
            <img src="{{ asset('images/plus.png') }}" alt="Small blood drop icon" class="hero-plus hero-plus-sm">
            <!-- Small dropp.svg (foreground) -->
            <img src="{{ asset('images/dropp.svg') }}" alt="Small blood drop icon" class="hero-drop hero-drop-sm">
            <!-- Main vial image (foreground) -->
            <img src="{{ asset('images/vial.webp') }}" alt="Hand holding blood sample" class="hero-main-img">
        </div>
    </section>

 <!-- About Section -->
<section class="about-section" id="about">
    <div class="about-header">
        <h2>
            About us — <span class="brand-name"><span style="color: #f4426e;">BLOOD</span><span style="color: #000;">KIND</span></span>
            <div class="logo-placeholder">
                <img src="{{ asset('images/logoo.webp') }}" alt="BloodKind Logo" class="brand-logo">
            </div>
        </h2>
        <p class="about-description">
            At BloodKind, we're dedicated to saving lives through the power of 
            voluntary blood donation. Our platform connects generous donors 
            with those in critical need, creating a community of heroes who 
            give the gift of life.
        </p>
    </div>

    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon community">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
            </div>
            <h3>Community Driven</h3>
            <p>Join thousands of donors</p>
            <p>who make a difference every day in their communities.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon health">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                </svg>
            </div>
            <h3>Life Saving</h3>
            <p>Every donation can save up to 3 lives.</p>
            <p>Your contribution directly impacts patient care.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon location">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
            </div>
            <h3>Local Impact</h3>
            <p>Find donation centers near</p>
            <p>you and see the immediate impact in your area.</p>
        </div>
    </div>
</section>

<section class="blood-type-section">
    <div class="blood-type-container">
        <div class="blood-type-info">
            <div class="blood-type-content">
                <h3>Blood Type Compatibility</h3>
                <p>Understanding blood type compatibility is crucial for safe transfusions.</p>
                
                <div class="blood-type-grid">
                    <!-- Blood Type Badges -->
                    <div class="blood-type-badge o-negative">
                        <div class="badge-container">O-</div>
                    </div>
                    <div class="blood-type-badge o-positive">
                        <div class="badge-container">O+</div>
                    </div>
                    <div class="blood-type-badge a-negative">
                        <div class="badge-container">A-</div>
                    </div>
                    <div class="blood-type-badge a-positive">
                        <div class="badge-container">A+</div>
                    </div>
                    <div class="blood-type-badge b-negative">
                        <div class="badge-container">B-</div>
                    </div>
                    <div class="blood-type-badge b-positive">
                        <div class="badge-container">B+</div>
                    </div>
                    <div class="blood-type-badge ab-negative">
                        <div class="badge-container">AB-</div>
                    </div>
                    <div class="blood-type-badge ab-positive">
                        <div class="badge-container">AB+</div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Facts Inside Pink Container -->
            <div class="quick-facts-wrapper">
                <div class="quick-facts">
                    <h3>Quick Facts</h3>
                    <ul>
                        <li>O- is the universal donor</li>
                        <li>AB+ is the universal receiver</li>
                        <li>One donation can help up to 3 patients</li>
                        <li>Every 2 seconds someone needs blood</li>
                        <li>The process takes about 10-15 minutes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="core-features-section" id="features">
    <div class="container">
        <div class="core-section-header"> <h2 class="core-section-title"> <span class="core-text">Core</span>
                <span class="features-text">Features</span>
            </h2>
            <p class="core-section-description"> Discover key tools designed to streamline blood donation—from donor registration
                to efficient inventory tracking and accurate blood type matching.
            </p>
        </div>

        <div class="core-features-slider"> <div class="core-features-container"> <div class="core-feature-card" data-index="0"> <div class="core-feature-icon"> <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <h3 class="core-feature-title">DONOR REGISTRATION</h3> <p class="core-feature-description"> Seamlessly collect and manage donor information to build a reliable donor database.
                    </p>
                </div>

                <div class="core-feature-card active" data-index="1"> <div class="core-feature-icon"> <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <rect x="9" y="9" width="6" height="6"/>
                            <path d="M9 1v6"/>
                            <path d="M15 1v6"/>
                            <path d="M9 17v6"/>
                            <path d="M15 17v6"/>
                            <path d="M1 9h6"/>
                            <path d="M1 15h6"/>
                            <path d="M17 9h6"/>
                            <path d="M17 15h6"/>
                        </svg>
                    </div>
                    <h3 class="core-feature-title">BLOOD INVENTORY</h3> <p class="core-feature-description"> Monitor real-time blood stock levels to ensure availability and efficient resource management.
                    </p>
                </div>

                <div class="core-feature-card" data-index="2"> <div class="core-feature-icon"> <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            <circle cx="12" cy="12" r="2"/>
                        </svg>
                    </div>
                    <h3 class="core-feature-title">BLOOD MATCHING</h3> <p class="core-feature-description"> Quickly match donors with recipients based on blood type compatibility for safe and timely transfusions.
                    </p>
                </div>
            </div>

            <div class="core-slider-indicators"> <button class="indicator" data-index="0"></button>
                <button class="indicator active" data-index="1"></button>
                <button class="indicator" data-index="2"></button>
            </div>
        </div>
    </div>
</section>

<script>
    {!! file_get_contents(resource_path('views/javascript/core-features.js')) !!}
</script>

    <section class="collab-section" id="collaborators">
        <div class="collab-container">
            <h2 class="collab-title">
                <span class="collab-title-our">Our</span> Collaborators
            </h2>
            <p class="collab-description">
                We proudly work with trusted health organizations to ensure safe, reliable, and life-saving blood donation services.
            </p>
            
            <div class="collab-slider">
                <div class="collab-slider-container">
                    <div class="collab-card">
                        <div class="collab-card-icon">
                            <div class="collab-icon-doh">DOH</div>
                        </div>
                        <h3 class="collab-card-title">Department Of Health</h3>
                        <p class="collab-card-description">
                            National health agency promoting health and safety nationwide
                        </p>
                    </div>
                    
                    <div class="collab-card">
                        <div class="collab-card-icon">
                            <div class="collab-icon-redcross">
                                <div class="collab-red-cross-symbol">✚</div>
                            </div>
                        </div>
                        <h3 class="collab-card-title">Philippine Red Cross</h3>
                        <p class="collab-card-description">
                            National humanitarian organization providing emergency assistance and disaster relief
                        </p>
                    </div>
                    
                    <div class="collab-card">
                        <div class="collab-card-icon">
                            <div class="collab-icon-who">
                                <div class="collab-who-symbol">🌍</div>
                            </div>
                        </div>
                        <h3 class="collab-card-title">World Health Organization</h3>
                        <p class="collab-card-description">
                            Global health agency promoting health and safety worldwide
                        </p>
                    </div>
                </div>
                
                <div class="collab-slider-dots">
                    <span class="collab-dot active" data-slide="0"></span>
                    <span class="collab-dot" data-slide="1"></span>
                    <span class="collab-dot" data-slide="2"></span>
                </div>
            </div>
        </div>
    </section>
    
    <script>
         {!! file_get_contents(resource_path('views/javascript/collaborators.js')) !!}
    </script>

     @include('layouts.footer') 
</body>
</html>