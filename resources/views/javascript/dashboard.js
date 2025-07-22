// Dashboard JavaScript Functions

// Simulate real-time updates
function updateStats() {
    const statValues = document.querySelectorAll('.stat-value');
    statValues.forEach(stat => {
        const currentValue = parseInt(stat.textContent);
        const change = Math.floor(Math.random() * 5) - 2; // Random change between -2 and 2
        const newValue = Math.max(0, currentValue + change);
        stat.textContent = newValue;
        
        // Update the change indicator
        const changeElement = stat.nextElementSibling;
        if (change > 0) {
            changeElement.className = 'stat-change positive';
            changeElement.innerHTML = `<i class="fas fa-arrow-up"></i> ${Math.abs(change)}% from last month`;
        } else if (change < 0) {
            changeElement.className = 'stat-change negative';
            changeElement.innerHTML = `<i class="fas fa-arrow-down"></i> ${Math.abs(change)}% from last month`;
        } else {
            changeElement.className = 'stat-change';
            changeElement.innerHTML = `<i class="fas fa-equals"></i> 0% change`;
        }
    });
}

// Update availability bars with animation
function updateInventoryBars() {
    const bars = document.querySelectorAll('.availability-fill');
    bars.forEach(bar => {
        const currentWidth = parseInt(bar.style.width);
        const change = Math.floor(Math.random() * 10) - 5; // Random change between -5 and 5
        const newWidth = Math.max(10, Math.min(100, currentWidth + change));
        bar.style.width = newWidth + '%';
        
        // Update text
        const textElement = bar.closest('.blood-type-card').querySelector('.availability-text');
        textElement.textContent = `${newWidth}% of donors`;
        
        // Update color class based on availability level
        bar.className = 'availability-fill ' + 
            (newWidth > 60 ? 'high' : newWidth > 30 ? 'medium' : 'low');
        
        // Update unit count text
        const donorCountElement = bar.closest('.blood-type-card').querySelector('.donor-count');
        const currentUnits = parseInt(donorCountElement.textContent.match(/\d+/)[0]);
        const unitChange = Math.floor(change / 5); // Smaller change for units
        const newUnits = Math.max(0, currentUnits + unitChange);
        donorCountElement.textContent = `Available: ${newUnits} units`;
    });
}

// Add hover effects to cards
function initializeCardHoverEffects() {
    document.querySelectorAll('.blood-type-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });
}

// Dropdown functionality
function initializeFilterDropdown() {
    const dropdown = document.querySelector('.filter-dropdown');
    if (dropdown) {
        dropdown.addEventListener('change', function() {
            console.log('Filter changed to:', this.value);
            // Here you would typically fetch new data based on the selected filter
            updateInventoryBars();
        });
    }
}

// Add click handlers for activity items
function initializeActivityItems() {
    document.querySelectorAll('.activity-item').forEach(item => {
        item.addEventListener('click', function() {
            console.log('Activity item clicked:', this.querySelector('.activity-title').textContent);
            // Here you would typically navigate to a detailed view
        });
    });
}

// Initialize all dashboard functionality
function initializeDashboard() {
    initializeCardHoverEffects();
    initializeFilterDropdown();
    initializeActivityItems();
    
    // Set initial colors for availability bars based on their width
    document.querySelectorAll('.availability-fill').forEach(bar => {
        const width = parseInt(bar.style.width);
        bar.className = 'availability-fill ' + 
            (width > 60 ? 'high' : width > 30 ? 'medium' : 'low');
    });
    
    // Simulate periodic updates (every 30 seconds)
    setInterval(() => {
        updateStats();
        updateInventoryBars();
    }, 30000);
    
    console.log('Dashboard loaded successfully');
}

// Wait for DOM content to load
document.addEventListener('DOMContentLoaded', function() {
    initializeDashboard();
});

// Export functions for external use (if needed)
window.dashboardFunctions = {
    updateStats,
    updateInventoryBars,
    initializeDashboard
};