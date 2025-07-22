document.addEventListener('DOMContentLoaded', function() {
    const dots = document.querySelectorAll('.collab-dot');
    const cards = document.querySelectorAll('.collab-card');
    let currentSlide = 0;

    // Initialize the slider
    function initSlider() {
        updateSlider();
    }

    // Update the active dot and highlight the corresponding card
    function updateSlider() {
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });

        // Add highlight effect to current card (optional visual enhancement)
        cards.forEach((card, index) => {
            if (index === currentSlide) {
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
        currentSlide = slideIndex;
        updateSlider();
    }

    // Add click event listeners to dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Add hover effects to cards - dots move based on hovered card
    cards.forEach((card, index) => {
        card.addEventListener('mouseenter', () => {
            goToSlide(index);
        });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            currentSlide = (currentSlide - 1 + dots.length) % dots.length;
            updateSlider();
        } else if (e.key === 'ArrowRight') {
            currentSlide = (currentSlide + 1) % dots.length;
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

        const sliderContainer = document.querySelector('.collab-slider');
        
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
                    currentSlide = (currentSlide - 1 + dots.length) % dots.length;
                } else {
                    // Swipe left - go to next slide
                    currentSlide = (currentSlide + 1) % dots.length;
                }
                updateSlider();
            }
        });
    }

    // Add mobile swipe support
    addMobileSwipeSupport();
});