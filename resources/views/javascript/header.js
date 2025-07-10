// resources/views/javascript/nav.js
document.addEventListener('DOMContentLoaded', function() {
    // Highlight current page on load
    const currentPath = window.location.hash || '#home';
    document.querySelectorAll(`.nav-link[href="${currentPath}"]`).forEach(link => {
        link.classList.add('active');
    });

    // Smooth scrolling and link highlighting
    document.querySelectorAll('.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            
            this.classList.add('active');
            
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                history.pushState(null, null, targetId);
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Dynamic highlighting on scroll
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY + 100;
        
        document.querySelectorAll('section[id]').forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = '#' + section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === sectionId) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
});