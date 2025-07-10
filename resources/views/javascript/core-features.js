document.addEventListener('DOMContentLoaded', function() {
    const featureContainer = document.querySelector('.core-features-container'); // Updated class name
    const featureCards = document.querySelectorAll('.core-feature-card'); // Updated class name
    const indicators = document.querySelectorAll('.core-slider-indicators .indicator'); // Updated parent class name

    let currentIndex = 0; // The currently active card index

    // Function to update the active card and indicator
    function updateSlider() {
        // Remove 'active' class from all cards and indicators
        featureCards.forEach(card => card.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));

        // Add 'active' class to the current card and indicator
        featureCards[currentIndex].classList.add('active');
        indicators[currentIndex].classList.add('active');
    }

    // Add click listeners to indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateSlider();
        });
    });

    // Initialize the slider
    if (featureCards.length > 0) {
        updateSlider(); // Set initial active state
    }
});