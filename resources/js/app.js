document.addEventListener('DOMContentLoaded', function() {
    // Typed.js initialization
    if (document.querySelector(".text")) {
        var typed = new Typed(".text", {
            strings: ["Front-End Developer", "Web Developer", "WordPress Developer", "Business Lawyer"],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true
        });
    }

    // Profile container animation
    const profileContainer = document.querySelector('.profile-container');
    const circleAnimation = document.querySelector('.circle-animation');
    if (profileContainer && circleAnimation) {
        profileContainer.addEventListener('mousemove', (e) => {
            const rect = e.target.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const angle = Math.atan2(y - centerY, x - centerX) * 180 / Math.PI;
            circleAnimation.style.animation = 'none';
            circleAnimation.style.transform = `rotate(${angle + 90}deg)`;
        });

        profileContainer.addEventListener('mouseleave', () => {
            circleAnimation.style.animation = 'rotate 15s linear infinite';
            circleAnimation.style.transform = 'rotate(0deg)';
        });
    }

    // CV view button logic
    const cvButton = document.getElementById('download-cv');
    const cvOptions = document.getElementById('cv-options');
    const cvContainer = document.querySelector('.cv-container');

    if (cvButton && cvOptions && cvContainer) {
        cvButton.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent this click from immediately closing the options
            cvOptions.style.display = (cvOptions.style.display === 'block') ? 'none' : 'block';
        });

        // Hide options if clicking anywhere else on the page
        document.addEventListener('click', function(event) {
            if (!cvContainer.contains(event.target)) {
                cvOptions.style.display = 'none';
            }
        });
    }

    // Hamburger Menu Logic
    const menuIcon = document.getElementById('menu-icon');
    const navbar = document.querySelector('.navbar');
    const body = document.body;

    if (menuIcon && navbar) {
        function toggleMenu() {
            navbar.classList.toggle('active');
            menuIcon.classList.toggle('bx-menu');
            menuIcon.classList.toggle('bx-x');

            if (navbar.classList.contains('active')) {
                body.style.overflow = 'hidden';
            } else {
                body.style.overflow = 'auto';
            }
        }

        menuIcon.addEventListener('click', toggleMenu);

        document.querySelectorAll('.navbar a').forEach(link => {
            link.addEventListener('click', () => {
                if (navbar.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });

        document.addEventListener('click', function(event) {
            if (navbar.classList.contains('active') && !navbar.contains(event.target) && !menuIcon.contains(event.target)) {
                toggleMenu();
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && navbar.classList.contains('active')) {
                toggleMenu();
            }
        });
    } else {
        console.error("Hamburger menu icon (#menu-icon) or navbar (.navbar) not found.");
    }
});