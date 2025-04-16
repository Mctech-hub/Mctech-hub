document.addEventListener('DOMContentLoaded', function() {
    // Loading animation
    window.addEventListener('load', function() {
        document.getElementById('loader-wrapper').style.display = 'none';
    });

    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('.nav-list');
    
    menuToggle.addEventListener('click', () => {
        navList.classList.toggle('active');
    });

    // Hero slider
    const slides = document.querySelectorAll('.hero-slide');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    showSlide(0);
    setInterval(nextSlide, 5000);

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add animation on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate__animated');
        elements.forEach(element => {
            const position = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            if (position < screenPosition) {
                element.classList.add('animate__fadeInUp');
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll();

    // Form submission handling
    const contactForm = document.getElementById('contact-form');
    const submitButton = contactForm.querySelector('button[type="submit"]');
    const buttonText = submitButton.querySelector('.button-text');
    const spinner = submitButton.querySelector('.spinner');
    const formMessages = document.getElementById('form-messages');

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        buttonText.style.display = 'none';
        spinner.style.display = 'inline-block';
        submitButton.disabled = true;
        
        // Create FormData object
        const formData = new FormData(contactForm);

        // Send AJAX request
        fetch(contactForm.getAttribute('action') || window.location.href, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            formMessages.innerHTML = `<div class="${data.success ? 'success' : 'error'}-message">
                ${data.message}
            </div>`;
            
            if (data.success) {
                contactForm.reset();
            }
        })
        .catch(error => {
            formMessages.innerHTML = `<div class="error-message">
                An error occurred. Please try again later.
            </div>`;
        })
        .finally(() => {
            // Reset button state
            buttonText.style.display = 'inline-block';
            spinner.style.display = 'none';
            submitButton.disabled = false;
        });
    });
});

AOS.init({
    duration: 800,
    offset: 100,
    once: true
});

document.querySelector('.menu-toggle').addEventListener('click', () => {
    document.querySelector('.nav-links').classList.toggle('active');
});

window.addEventListener('scroll', () => {
    const header = document.querySelector('.sticky-header');
    header.classList.toggle('scrolled', window.scrollY > 50);
});

// Responsive Navigation
const menuToggle = document.querySelector('.menu-toggle');
const navList = document.querySelector('.nav-list');

menuToggle.addEventListener('click', () => {
    navList.classList.toggle('active');
});

// Close menu on link click
document.querySelectorAll('.nav-list a').forEach(link => {
    link.addEventListener('click', () => {
        navList.classList.remove('active');
    });
});

// Responsive Images Loading
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('img[data-src]');
    const imageOptions = {
        threshold: 0,
        rootMargin: '0px 0px 50px 0px'
    };

    const loadImage = (entry) => {
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
    };

    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    loadImage(entry);
                    imageObserver.unobserve(entry.target);
                }
            });
        }, imageOptions);

        images.forEach(img => imageObserver.observe(img));
    }
});

// Floating Buttons Animation
document.addEventListener('DOMContentLoaded', () => {
    const floatingButtons = document.querySelectorAll('.floating-button');
    floatingButtons.forEach((button, index) => {
        button.style.animationDelay = `${index * 0.5}s`;
    });
});

function toggleFaq(element) {
    element.classList.toggle('active');
}