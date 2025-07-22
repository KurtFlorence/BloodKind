<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    @include('layouts.header-home')
    @include('layouts.sidebar')
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Dashboard Overview</h1>
            <div class="date-info">
                <i class="fas fa-calendar-alt"></i>
                <span>Today, June 23, 2025</span>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card donors">
                <div class="stat-header">
                    <div class="stat-icon donors">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-title">Total Donors</div>
                </div>
                <div class="stat-value">115</div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    12% from last month
                </div>
            </div>

            <div class="stat-card units">
                <div class="stat-header">
                    <div class="stat-icon units">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="stat-title">Available Units</div>
                </div>
                <div class="stat-value">115</div>
                <div class="stat-change negative">
                    <i class="fas fa-arrow-down"></i>
                    12% from last month
                </div>
            </div>

            <div class="stat-card matches">
                <div class="stat-header">
                    <div class="stat-icon matches">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="stat-title">Pending Matches</div>
                </div>
                <div class="stat-value">115</div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    12% from last month
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="inventory-section">
                <div class="section-header">
                    <h2 class="section-title">Blood Inventory Levels</h2>
                    <select class="filter-dropdown">
                        <option>Last 90 Days</option>
                        <option>Last 30 Days</option>
                        <option>Last 7 Days</option>
                        <option>Today</option>
                    </select>
                </div>

                <div class="inventory-grid">
                    <div class="blood-type-card blood-type-Op">
                        <div class="blood-type">O+</div>
                        <div class="donor-count">Available: 32 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill high" style="width: 75%;"></div>
                        </div>
                        <div class="availability-text">75% of donors</div>
                    </div>

                    <div class="blood-type-card blood-type-On">
                        <div class="blood-type">O-</div>
                        <div class="donor-count">Available: 18 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill medium" style="width: 45%;"></div>
                        </div>
                        <div class="availability-text">45% of donors</div>
                    </div>

                    <div class="blood-type-card blood-type-Ap">
                        <div class="blood-type">A+</div>
                        <div class="donor-count">Available: 28 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill high" style="width: 70%;"></div>
                        </div>
                        <div class="availability-text">70% of donors</div>
                    </div>

                    <div class="blood-type-card blood-type-An">
                        <div class="blood-type">A-</div>
                        <div class="donor-count">Available: 12 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill low" style="width: 30%;"></div>
                        </div>
                        <div class="availability-text">30% of donors</div>
                    </div>

                    <div class="blood-type-card blood-type-Bp">
                        <div class="blood-type">B+</div>
                        <div class="donor-count">Available: 22 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill medium" style="width: 55%;"></div>
                        </div>
                        <div class="availability-text">55% of donors</div>
                    </div>

                    <div class="blood-type-card blood-type-Bn">
                        <div class="blood-type">B-</div>
                        <div class="donor-count">Available: 8 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill low" style="width: 20%;"></div>
                        </div>
                        <div class="availability-text">20% of donors</div>
                    </div>

                    <div class="blood-type-card blood-type-ABp">
                        <div class="blood-type">AB+</div>
                        <div class="donor-count">Available: 15 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill medium" style="width: 50%;"></div>
                        </div>
                        <div class="availability-text">50% of donors</div>
                    </div>

                    <div class="blood-type-card blood-type-ABn">
                        <div class="blood-type">AB-</div>
                        <div class="donor-count">Available: 5 units</div>
                        <div class="availability-bar">
                            <div class="availability-fill low" style="width: 15%;"></div>
                        </div>
                        <div class="availability-text">15% of donors</div>
                    </div>
                </div>
            </div>

            <div class="activity-section">
                <div class="activity-header">
                    <h2 class="section-title">Recent Activity</h2>
                    <a href="#" class="view-all-btn">View All</a>
                </div>

                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon donation">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">New Blood Donation</div>
                            <div class="activity-subtitle">John Smith donated O+ blood</div>
                        </div>
                        <div class="activity-time">2 hours ago</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon request">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Blood Request</div>
                            <div class="activity-subtitle">Hospital A requested 3 units of A-</div>
                        </div>
                        <div class="activity-time">4 hours ago</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon test">
                            <i class="fas fa-vial"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Test Results</div>
                            <div class="activity-subtitle">Blood screening completed for 5 units</div>
                        </div>
                        <div class="activity-time">6 hours ago</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon alert">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Low Inventory Alert</div>
                            <div class="activity-subtitle">AB- blood type running low</div>
                        </div>
                        <div class="activity-time">8 hours ago</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon donation">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Blood Drive Event</div>
                            <div class="activity-subtitle">Community center drive collected 15 units</div>
                        </div>
                        <div class="activity-time">1 day ago</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon request">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Emergency Request</div>
                            <div class="activity-subtitle">Urgent need for O- blood type</div>
                        </div>
                        <div class="activity-time">1 day ago</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon test">
                            <i class="fas fa-vial"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Quality Check</div>
                            <div class="activity-subtitle">Monthly inventory audit completed</div>
                        </div>
                        <div class="activity-time">2 days ago</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('views/javascript/dashboard.js') }}"></script>
</body>
</html>