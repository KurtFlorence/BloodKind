document.addEventListener('DOMContentLoaded', function() {
    const indicators = document.querySelectorAll('.core-slider-indicators .indicator'); // Updated from dots
    const featureCards = document.querySelectorAll('.core-feature-card'); // Updated from cards
    let currentIndex = 0;

    // Initialize the slider
    function initSlider() {
        updateSlider();
    }

    // Update the active indicator and highlight the corresponding card
    function updateSlider() {
        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentIndex);
        });

        // Add highlight effect to current card (optional visual enhancement)
        featureCards.forEach((card, index) => {
            if (index === currentIndex) {
                card.style.transform = 'translateY(-5px)';
                card.style.boxShadow = '0 10px 30px rgba(244, 66, 110, 0.2)';
            } else {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            }
        });
    }

    // Go to specific slide
    function goToSlide(slideIndex) {
        currentIndex = slideIndex;
        updateSlider();
    }

    // Add click event listeners to indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Add hover effects to cards - moves dot based on hovered card
    featureCards.forEach((card, index) => {
        card.addEventListener('mouseenter', () => {
            goToSlide(index);
        });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            currentIndex = (currentIndex - 1 + indicators.length) % indicators.length;
            updateSlider();
        } else if (e.key === 'ArrowRight') {
            currentIndex = (currentIndex + 1) % indicators.length;
            updateSlider();
        }
    });

    // Handle window resize
    window.addEventListener('resize', () => {
        updateSlider();
    });

    // Initialize the slider
    initSlider();

    // Optional: Add smooth scrolling animation for mobile
    function addMobileSwipeSupport() {
        let startX = 0;
        let startY = 0;
        let endX = 0;
        let endY = 0;

        const sliderContainer = document.querySelector('.core-features-container');
        
        sliderContainer.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        });

        sliderContainer.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            endY = e.changedTouches[0].clientY;
            
            const deltaX = endX - startX;
            const deltaY = endY - startY;
            
            // Check if horizontal swipe is more significant than vertical
            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 50) {
                if (deltaX > 0) {
                    // Swipe right - go to previous slide
                    currentIndex = (currentIndex - 1 + indicators.length) % indicators.length;
                } else {
                    // Swipe left - go to next slide
                    currentIndex = (currentIndex + 1) % indicators.length;
                }
                updateSlider();
            }
        });
    }

    // Add mobile swipe support
    addMobileSwipeSupport();
});