document.addEventListener('DOMContentLoaded', function() {
    // Typing animation
    const typingTexts = [
        "Building Innovative Digital Solutions",
        "Expert Web Development Services",
        "Custom Software Development",
        "Mobile App Development",
        "24/7 Technical Support"
    ];

    const typingDelay = 100;
    const erasingDelay = 50;
    const newTextDelay = 2000;
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    const typingElement = document.querySelector('.typing-text');

    function type() {
        const currentText = typingTexts[textIndex];
        
        if (isDeleting) {
            typingElement.textContent = currentText.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingElement.textContent = currentText.substring(0, charIndex + 1);
            charIndex++;
        }

        if (!isDeleting && charIndex === currentText.length) {
            isDeleting = true;
            setTimeout(type, newTextDelay);
            return;
        }

        if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % typingTexts.length;
        }

        setTimeout(type, isDeleting ? erasingDelay : typingDelay);
    }

    // Background slideshow
    const images = [
        './assets/hero1.jpg',  // Local path to my images
        './assets/hero2.jpg',
        './assets/hero3.jpg',
        './assets/hero4.jpg'
    ];

    let currentImageIndex = 0;
    const heroSlide = document.querySelector('.hero-slide');
    
    // Preload images for smooth transitions
    images.forEach(src => {
        const img = new Image();
        img.src = src;
    });

    function changeBackground() {
        heroSlide.style.opacity = '0.8';
        
        setTimeout(() => {
            heroSlide.style.backgroundImage = `url(${images[currentImageIndex]})`;
            heroSlide.style.opacity = '1';
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }, 1000);

        setTimeout(changeBackground, 6000);
    }

    // Start animations
    type();
    changeBackground();
});
