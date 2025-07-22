<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Inventory</title>

    {{-- Essential global styles to make fixed header/sidebar and scrolling content work --}}
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
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
    <link rel="stylesheet" href="{{ asset('css/blood_inventory.css') }}"> {{-- Specific styles for this page --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    @include('layouts.header-home')
    @include('layouts.sidebar')

    <div class="page-content-wrapper">
        <div class="inventory-container">
            <div class="inventory-header">
                <div>
                    <h1 class="page-title">Blood Inventory</h1>
                    <p class="page-description">Manage and monitor blood stock levels</p>
                </div>
                <button class="add-stock-btn" id="openAddStockModal">
                    <i class="fas fa-plus"></i> Add Stock Entry
                </button>
            </div>

            <div class="inventory-stats-grid">
                <div class="inventory-stat-card">
                    <div class="stat-content">
                        <div class="stat-value">214</div>
                        <div class="stat-label">Total Units</div>
                        <div class="stat-sublabel">Units in stock</div>
                    </div>
                    <div class="stat-icon-bg units-icon-bg">
                        <i class="fas fa-tint"></i>
                    </div>
                </div>

                <div class="inventory-stat-card critical-card">
                    <div class="stat-content">
                        <div class="stat-value">2</div>
                        <div class="stat-label">Critical Stock</div>
                        <div class="stat-sublabel">Blood Types Critical</div>
                    </div>
                    <div class="stat-icon-bg alert-icon-bg">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>

                <div class="inventory-stat-card low-card">
                    <div class="stat-content">
                        <div class="stat-value">2</div>
                        <div class="stat-label">Low Stock</div>
                        <div class="stat-sublabel">Blood Types Low</div>
                    </div>
                    <div class="stat-icon-bg warning-icon-bg">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                </div>

                <div class="inventory-stat-card expiring-card">
                    <div class="stat-content">
                        <div class="stat-value">3</div>
                        <div class="stat-label">Expiring Soon</div>
                        <div class="stat-sublabel">Units expires in 7 days</div>
                    </div>
                    <div class="stat-icon-bg calendar-icon-bg">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </div>
            </div>

            <div class="inventory-management-section">
                <div class="section-header">
                    <h2 class="section-title">Inventory Management</h2>
                </div>
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search by blood type or location..." class="search-input">
                </div>

                <div class="table-responsive">
                    <table class="inventory-table">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Units Available</th>
                                <th>Status</th>
                                <th>Expiry Date</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td>O+</td>
                                <td>32</td>
                                <td class="status-high">High</td>
                                <td>2026-06-15</td>
                                <td>Storage A</td>
                                <td>
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>A-</td>
                                <td>12</td>
                                <td class="status-low">Low</td>
                                <td>2025-09-01</td>
                                <td>Storage B</td>
                                <td>
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>AB-</td>
                                <td>5</td>
                                <td class="status-critical">Critical</td>
                                <td>2025-07-28</td>
                                <td>Storage C</td>
                                <td>
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                             <tr>
                                <td>B+</td>
                                <td>22</td>
                                <td class="status-medium">Medium</td>
                                <td>2026-03-20</td>
                                <td>Storage A</td>
                                <td>
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                             <tr>
                                <td>O-</td>
                                <td>18</td>
                                <td class="status-medium">Medium</td>
                                <td>2026-01-10</td>
                                <td>Storage B</td>
                                <td>
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                             <tr>
                                <td>A+</td>
                                <td>28</td>
                                <td class="status-high">High</td>
                                <td>2026-04-05</td>
                                <td>Storage C</td>
                                <td>
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL HTML STRUCTURE --}}
    <div class="modal-overlay" id="addStockModalOverlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Add New Stock Entry</h2>
                {{-- <button class="close-modal-btn">&times;</button> --}}
            </div>
            <form class="modal-form">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="modalBloodType">Blood Type</label>
                        <select id="modalBloodType" name="bloodType">
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
                        <label for="modalUnits">Units</label>
                        <input type="number" id="modalUnits" name="units" placeholder="Number of Units">
                    </div>
                    <div class="form-group date-group">
                        <label for="modalExpiryDate">Expiry Date</label>
                        <input type="text" id="modalExpiryDate" name="expiryDate" placeholder="mm/dd/yyyy" class="date-input">
                        
                    </div>
                    <div class="form-group full-width">
                        <label for="modalStorageLocation">Storage Location</label>
                        <input type="text" id="modalStorageLocation" name="storageLocation" placeholder="Storage Location">
                    </div>
                    <div class="form-group full-width">
                        <label for="modalDonorID">Donor ID (Optional)</label>
                        <input type="text" id="modalDonorID" name="donorId" placeholder="Donor ID (Optional)">
                    </div>
                </div>
                <div class="modal-actions">
                    <button type="button" class="btn cancel-btn" id="cancelAddStock">Cancel</button>
                    <button type="submit" class="btn register-btn">Add Stock Entry</button>
                </div>
            </form>
        </div>
    </div>
    {{-- END MODAL HTML STRUCTURE --}}


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Modal Functionality ---
            const openAddStockModalBtn = document.getElementById('openAddStockModal');
            const addStockModalOverlay = document.getElementById('addStockModalOverlay');
            const cancelAddStockBtn = document.getElementById('cancelAddStock');
            const modalExpiryDateInput = document.getElementById('modalExpiryDate'); // Reference to the date input inside modal

            function openModal() {
                addStockModalOverlay.style.display = 'flex'; // Show the modal
            }

            function closeModal() {
                addStockModalOverlay.style.display = 'none'; // Hide the modal
                // Optionally reset the form when closing
                document.querySelector('.modal-form').reset();
            }

            if (openAddStockModalBtn) {
                openAddStockModalBtn.addEventListener('click', openModal);
            }

            if (cancelAddStockBtn) {
                cancelAddStockBtn.addEventListener('click', closeModal);
            }

            // Close modal when clicking outside of it
            if (addStockModalOverlay) {
                addStockModalOverlay.addEventListener('click', function(event) {
                    if (event.target === addStockModalOverlay) {
                        closeModal();
                    }
                });
            }

            // Date picker functionality for modal (basic: changes input type on focus)
            if (modalExpiryDateInput) {
                modalExpiryDateInput.addEventListener('focus', function() {
                    this.type = 'date';
                });
                modalExpiryDateInput.addEventListener('blur', function() {
                    if (!this.value) {
                        this.type = 'text';
                    }
                });
            }

            // Handle modal form submission
            const modalForm = document.querySelector('.modal-form');
            if (modalForm) {
                modalForm.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent default form submission

                    // Basic validation for modal form
                    const bloodType = document.getElementById('modalBloodType').value;
                    const units = document.getElementById('modalUnits').value;
                    const expiryDate = document.getElementById('modalExpiryDate').value;
                    const storageLocation = document.getElementById('modalStorageLocation').value;

                    if (!bloodType || !units || !expiryDate || !storageLocation) {
                        alert('Please fill in all required fields in the modal (Blood Type, Units, Expiry Date, Storage Location).');
                        return;
                    }

                    alert('New Stock Entry Added! (Data not actually sent)');
                    // In a real application, you would send this data to a server
                    // e.g., using fetch API or XMLHttpRequest
                    closeModal(); // Close modal on successful submission
                });
            }


            // --- Existing Table Functionality (from previous request) ---
            const addStockBtn = document.querySelector('.add-stock-btn'); // Still need this for existing functionality setup if any
            if (addStockBtn) {
                // The actual modal open listener is now on #openAddStockModal
                // This block is left for other potential existing functionality linked to this button
            }

            // Example for action buttons in the table (edit/delete)
            document.querySelectorAll('.action-btn.edit-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const bloodType = row.cells[0].textContent;
                    alert(`Edit button clicked for ${bloodType}`);
                });
            });

            document.querySelectorAll('.action-btn.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const bloodType = row.cells[0].textContent;
                    if (confirm(`Are you sure you want to delete ${bloodType} entry?`)) {
                        alert(`${bloodType} entry deleted!`);
                    }
                });
            });

            // Basic search functionality (client-side filter)
            const searchInput = document.querySelector('.search-input');
            if (searchInput) {
                searchInput.addEventListener('keyup', function() {
                    const filter = this.value.toLowerCase();
                    const table = document.querySelector('.inventory-table tbody');
                    const rows = table.querySelectorAll('tr');

                    rows.forEach(row => {
                        const bloodType = row.cells[0].textContent.toLowerCase();
                        const location = row.cells[4].textContent.toLowerCase();

                        if (bloodType.includes(filter) || location.includes(filter)) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>