<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONOR REGISTRATION</title>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%; /* Make html and body take full viewport height */
            overflow: hidden; /* CRUCIAL: Prevents scrollbars on the entire window */
            font-family: Arial, sans-serif; /* Example font */
            background-color: #f5f7fa; /* Light background for the overall page */
        }
        * {
            box-sizing: border-box; /* Ensures consistent box model across all elements */
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> {{-- Your specific style.css --}}
    <link rel="stylesheet" href="{{ asset('css/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/donor.css') }}"> {{-- Specific styles for this page --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    @include('layouts.user_header-home')
    @include('layouts.user_sidebar')

    <div class="page-content-wrapper"> {{-- This wrapper will handle its own scrolling --}}
        <div class="donor-registration-container">
            <h1 class="page-title">Donor Registration</h1>
            <p class="page-description">Register a new blood donor in the system</p>

            <form class="registration-form">
                <div class="form-section">
                    <h2 class="section-title">Personal Information</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email Address *</label>
                            <input type="email" id="emailAddress" name="emailAddress" required>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number *</label>
                            <input type="tel" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="form-group date-group">
                            <label for="dateOfBirth">Date of Birth *</label>
                            <input type="text" id="dateOfBirth" name="dateOfBirth" placeholder="mm/dd/yyyy" class="date-input" required>
                            <i class="fas fa-calendar-alt calendar-icon"></i>
                        </div>
                        <div class="form-group">
                            <label for="bloodType">Blood Type *</label>
                            <select id="bloodType" name="bloodType" required>
                                <option value="">Select Blood Type</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gender *</label>
                            <div class="radio-group">
                                <input type="radio" id="male" name="gender" value="Male" required>
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="Female">
                                <label for="female">Female</label>
                                <input type="radio" id="other" name="gender" value="Other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h2 class="section-title">Address Information</h2>
                    <div class="form-grid full-width-grid">
                        <div class="form-group full-width">
                            <label for="streetAddress">Street Address *</label>
                            <input type="text" id="streetAddress" name="streetAddress" required>
                        </div>
                        <div class="form-group">
                            <label for="cityTown">City/Town *</label>
                            <input type="text" id="cityTown" name="cityTown" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province *</label>
                            <input type="text" id="province" name="province" required>
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Zipcode *</label>
                            <input type="text" id="zipcode" name="zipcode" required>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h2 class="section-title">Emergency Contact</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="emergencyContactName">Emergency Contact name *</label>
                            <input type="text" id="emergencyContactName" name="emergencyContactName" required>
                        </div>
                        <div class="form-group">
                            <label for="emergencyPhoneNumber">Emergency Phone Number *</label>
                            <input type="tel" id="emergencyPhoneNumber" name="emergencyPhoneNumber" required>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h2 class="section-title">Medical Information</h2>
                    <div class="form-grid full-width-grid">
                        <div class="form-group full-width">
                            <label for="medicalCondition">Medical Condition</label>
                            <input type="text" id="medicalCondition" name="medicalCondition" placeholder="List any medical conditions, allergies or relevant health information">
                        </div>
                        <div class="form-group full-width">
                            <label for="currentMedication">Current Medication</label>
                            <input type="text" id="currentMedication" name="currentMedication" placeholder="List any current medication">
                        </div>
                        <div class="form-group date-group">
                            <label for="lastDonationDate">Last Donation Date* (If Applicable)</label>
                            <input type="text" id="lastDonationDate" name="lastDonationDate" placeholder="mm/dd/yyyy" class="date-input">
                            <i class="fas fa-calendar-alt calendar-icon"></i>
                        </div>
                    </div>
                </div>

                <div class="consent-checkbox">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">I consent to donate blood and understand that my information will be used in accordance with the blood bank's privacy policy. I confirm that all information provided is accurate and complete.</label>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn cancel-btn">Cancel</button>
                    <button type="submit" class="btn register-btn">Register Donor</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.registration-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const requiredInputs = form.querySelectorAll('[required]');
                let allFieldsFilled = true;
                requiredInputs.forEach(input => {
                    if (input.type === 'radio') {
                        const radioGroup = input.name;
                        if (!form.querySelector(`input[name="${radioGroup}"]:checked`)) {
                            allFieldsFilled = false;
                        }
                    } else if (!input.value.trim()) {
                        allFieldsFilled = false;
                    }
                });

                if (!document.getElementById('consent').checked) {
                    allFieldsFilled = false;
                    alert('Please agree to the consent statement.');
                }

                if (allFieldsFilled) {
                    alert('Donor registration submitted successfully!');
                    form.reset();
                } else {
                    alert('Please fill in all required fields and agree to the consent.');
                }
            });

            document.querySelectorAll('.date-input').forEach(input => {
                input.addEventListener('focus', function() {
                    this.type = 'date';
                });
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.type = 'text';
                    }
                });
            });

            const cancelBtn = document.querySelector('.cancel-btn');
            cancelBtn.addEventListener('click', function() {
                if (confirm('Are you sure you want to cancel? All unsaved data will be lost.')) {
                    form.reset();
                }
            });
        });
    </script>
</body>
</html>