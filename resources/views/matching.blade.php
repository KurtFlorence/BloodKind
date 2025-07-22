<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Matching</title>

    {{-- Essential global styles to make fixed header/sidebar and scrolling content work --}}
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Prevent body scroll, page-content-wrapper handles it */
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
        }
        * {
            box-sizing: border-box;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blood_matching.css') }}"> {{-- Specific styles for this page --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    @include('layouts.header-home')
    @include('layouts.sidebar')

    <div class="page-content-wrapper">
        <div class="blood-matching-container">
            <div class="matching-header">
                <div>
                    <h1 class="page-title">Blood Matching</h1>
                    <p class="page-description">Find compatible donors for patients in need</p>
                </div>
                <button class="new-request-btn" id="openNewRequestModal">
                    <i class="fas fa-plus"></i> New Request
                </button>
            </div>

            <div class="matching-stats-grid">
                <div class="stat-card">
                    <div class="stat-content">
                        <div class="stat-value">5</div>
                        <div class="stat-label">Active Requests</div>
                        <div class="stat-sublabel">Pending Blood Requests</div>
                    </div>
                    <div class="stat-icon-container heart-bg"><i class="fas fa-heart"></i></div>
                </div>

                <div class="stat-card">
                    <div class="stat-content">
                        <div class="stat-value">100</div>
                        <div class="stat-label">Available Donors</div>
                        <div class="stat-sublabel">Ready to Donate</div>
                    </div>
                    <div class="stat-icon-container users-bg"><i class="fas fa-users"></i></div>
                </div>

                <div class="stat-card">
                    <div class="stat-content">
                        <div class="stat-value">2</div>
                        <div class="stat-label">Matches Today</div>
                        <div class="stat-sublabel">Successful Matches</div>
                    </div>
                    <div class="stat-icon-container heart-outline-bg"><i class="far fa-heart"></i></div>
                </div>

                <div class="stat-card critical-case-card">
                    <div class="stat-content">
                        <div class="stat-value">1</div>
                        <div class="stat-label">Critical Cases</div>
                        <div class="stat-sublabel">Urgent Requests</div>
                    </div>
                    <div class="stat-icon-container alert-bg"><i class="fas fa-heart-broken"></i></div>
                </div>
            </div>

            <div class="compatibility-finder-section">
                <div class="section-header">
                    <h2 class="section-title">Blood Type Compatibility Finder</h2>
                </div>
                <div class="finder-controls">
                    <div class="form-group">
                        <label for="patientBloodType">Patient Blood Type</label>
                        <select id="patientBloodType" name="patientBloodType">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="urgencyLevel">Urgency Level</label>
                        <select id="urgencyLevel" name="urgencyLevel">
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                            <option value="Critical">Critical</option>
                        </select>
                    </div>
                    <button class="find-donors-btn">Find Compatible Donors</button>
                </div>
            </div>

            <div class="pending-requests-section">
                <div class="section-header">
                    <h2 class="section-title">Pending Blood Requests</h2>
                </div>
                <div class="table-responsive">
                    <table class="requests-table">
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Blood Type</th>
                                <th>Units Needed</th>
                                <th>Urgency</th>
                                <th>Location</th>
                                <th>Request Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Example Rows (will be populated dynamically) --}}
                            <tr>
                                <td>Jane Doe</td>
                                <td>A+</td>
                                <td>2 Units</td>
                                <td class="urgency-low">Low</td>
                                <td>Hospital A</td>
                                <td>2025-07-20</td>
                                <td>
                                    <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn match-btn"><i class="fas fa-link"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>John Smith</td>
                                <td>O-</td>
                                <td>4 Units</td>
                                <td class="urgency-critical">Critical</td>
                                <td>Hospital B</td>
                                <td>2025-07-19</td>
                                <td>
                                    <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn match-btn"><i class="fas fa-link"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Alice Brown</td>
                                <td>B+</td>
                                <td>1 Unit</td>
                                <td class="urgency-medium">Medium</td>
                                <td>Hospital C</td>
                                <td>2025-07-18</td>
                                <td>
                                    <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn match-btn"><i class="fas fa-link"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL HTML STRUCTURE for New Blood Request --}}
    <div class="modal-overlay" id="newRequestModalOverlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">New Blood Request</h2>
            </div>
            <form class="modal-form">
                <div class="form-group full-width">
                    <label for="modalPatientName">Patient Name</label>
                    <input type="text" id="modalPatientName" name="patientName" placeholder="Enter Patient Name">
                </div>
                <div class="form-grid-two-col"> {{-- New grid for Blood Type & Units --}}
                    <div class="form-group">
                        <label for="modalBloodTypeNeeded">Blood Type Needed</label>
                        <select id="modalBloodTypeNeeded" name="bloodTypeNeeded">
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
                        <label for="modalUnitsNeeded">Units Needed</label>
                        <input type="number" id="modalUnitsNeeded" name="unitsNeeded" placeholder="Number of Units">
                    </div>
                </div>

                <div class="form-grid-two-col"> {{-- New grid for Urgency & Needed by --}}
                    <div class="form-group">
                        <label for="modalUrgencyLevel">Urgency Level</label>
                        <select id="modalUrgencyLevel" name="urgencyLevel">
                            <option value="">Select Urgency</option>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                            <option value="Critical">Critical</option>
                        </select>
                    </div>
                    <div class="form-group date-group">
                        <label for="modalNeededBy">Needed by</label>
                        <input type="text" id="modalNeededBy" name="neededBy" placeholder="mm/dd/yyyy" class="date-input">
                        <i class="fas fa-calendar-alt calendar-icon"></i>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="modalHospital">Hospital</label>
                    <input type="text" id="modalHospital" name="hospital" placeholder="Enter Hospital Name">
                </div>
                <div class="form-group full-width">
                    <label for="modalContactPhone">Contact Phone</label>
                    <input type="text" id="modalContactPhone" name="contactPhone" placeholder="Enter Contact Phone">
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn cancel-btn" id="cancelNewRequest">Cancel</button>
                    <button type="submit" class="btn submit-request-btn">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
    {{-- END MODAL HTML STRUCTURE --}}


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Modal Functionality for New Request ---
            const openNewRequestModalBtn = document.getElementById('openNewRequestModal');
            const newRequestModalOverlay = document.getElementById('newRequestModalOverlay');
            const cancelNewRequestBtn = document.getElementById('cancelNewRequest');
            const modalNeededByInput = document.getElementById('modalNeededBy');

            function openNewRequestModal() {
                newRequestModalOverlay.style.display = 'flex';
            }

            function closeNewRequestModal() {
                newRequestModalOverlay.style.display = 'none';
                document.querySelector('#newRequestModalOverlay .modal-form').reset(); // Reset specific modal form
            }

            if (openNewRequestModalBtn) {
                openNewRequestModalBtn.addEventListener('click', openNewRequestModal);
            }

            if (cancelNewRequestBtn) {
                cancelNewRequestBtn.addEventListener('click', closeNewRequestModal);
            }

            if (newRequestModalOverlay) {
                newRequestModalOverlay.addEventListener('click', function(event) {
                    if (event.target === newRequestModalOverlay) {
                        closeNewRequestModal();
                    }
                });
            }

            // Date picker functionality for modal date input
            if (modalNeededByInput) {
                modalNeededByInput.addEventListener('focus', function() {
                    this.type = 'date';
                });
                modalNeededByInput.addEventListener('blur', function() {
                    if (!this.value) {
                        this.type = 'text';
                    }
                });
            }

            // Handle modal form submission
            const newRequestModalForm = document.querySelector('#newRequestModalOverlay .modal-form');
            if (newRequestModalForm) {
                newRequestModalForm.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const patientName = document.getElementById('modalPatientName').value;
                    const bloodTypeNeeded = document.getElementById('modalBloodTypeNeeded').value;
                    const unitsNeeded = document.getElementById('modalUnitsNeeded').value;
                    const urgencyLevel = document.getElementById('modalUrgencyLevel').value;
                    const neededBy = document.getElementById('modalNeededBy').value;
                    const hospital = document.getElementById('modalHospital').value;
                    const contactPhone = document.getElementById('modalContactPhone').value;

                    if (!patientName || !bloodTypeNeeded || !unitsNeeded || !urgencyLevel || !neededBy || !hospital || !contactPhone) {
                        alert('Please fill in all required fields in the new request form.');
                        return;
                    }

                    alert('New Blood Request Submitted! (Data not actually sent)');
                    closeNewRequestModal();
                });
            }


            // --- Existing Table Functionality (View/Match buttons) ---
            document.querySelectorAll('.action-btn.view-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const patientName = row.cells[0].textContent;
                    alert(`View details for request from ${patientName}`);
                });
            });

            document.querySelectorAll('.action-btn.match-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const patientName = row.cells[0].textContent;
                    alert(`Initiate matching for request from ${patientName}`);
                });
            });

            // --- Find Compatible Donors Button Functionality ---
            const findDonorsBtn = document.querySelector('.find-donors-btn');
            if (findDonorsBtn) {
                findDonorsBtn.addEventListener('click', function() {
                    const patientBloodType = document.getElementById('patientBloodType').value;
                    const urgencyLevel = document.getElementById('urgencyLevel').value;
                    alert(`Finding compatible donors for Patient Blood Type: ${patientBloodType}, Urgency: ${urgencyLevel}`);
                    // In a real application, this would trigger an API call and update the table
                });
            }
        });
    </script>
</body>
</html>