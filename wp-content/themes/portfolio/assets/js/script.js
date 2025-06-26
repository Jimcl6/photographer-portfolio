// Mobile Navigation
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
}

// Gallery Filter Functionality
const filterButtons = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');

if (filterButtons.length > 0 && galleryItems.length > 0) {
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filterValue === 'all') {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    const itemCategory = item.getAttribute('data-category');
                    if (itemCategory === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
}

// Lightbox Functionality
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxClose = document.querySelector('.lightbox-close');
const lightboxPrev = document.getElementById('lightbox-prev');
const lightboxNext = document.getElementById('lightbox-next');

let currentImageIndex = 0;
let visibleImages = [];

function updateVisibleImages() {
    visibleImages = Array.from(galleryItems)
        .filter(item => item.style.display !== 'none')
        .map(item => item.querySelector('img'));
}

if (galleryItems.length > 0) {
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            updateVisibleImages();
            const img = item.querySelector('img');
            currentImageIndex = visibleImages.indexOf(img);
            
            lightboxImg.src = img.src;
            lightboxImg.alt = img.alt;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });
}

if (lightboxClose) {
    lightboxClose.addEventListener('click', closeLightbox);
}

if (lightbox) {
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
}

function closeLightbox() {
    if (lightbox) {
        lightbox.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

if (lightboxPrev) {
    lightboxPrev.addEventListener('click', () => {
        if (visibleImages.length > 0) {
            currentImageIndex = (currentImageIndex - 1 + visibleImages.length) % visibleImages.length;
            const img = visibleImages[currentImageIndex];
            lightboxImg.src = img.src;
            lightboxImg.alt = img.alt;
        }
    });
}

if (lightboxNext) {
    lightboxNext.addEventListener('click', () => {
        if (visibleImages.length > 0) {
            currentImageIndex = (currentImageIndex + 1) % visibleImages.length;
            const img = visibleImages[currentImageIndex];
            lightboxImg.src = img.src;
            lightboxImg.alt = img.alt;
        }
    });
}

// Keyboard navigation for lightbox
document.addEventListener('keydown', (e) => {
    if (lightbox && lightbox.style.display === 'flex') {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            lightboxPrev && lightboxPrev.click();
        } else if (e.key === 'ArrowRight') {
            lightboxNext && lightboxNext.click();
        }
    }
});

// Contact Form Handling
const contactForm = document.getElementById('contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        // Basic validation
        if (!data.name || !data.email || !data.message) {
            alert('Please fill in all required fields.');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(data.email)) {
            alert('Please enter a valid email address.');
            return;
        }
        
        // Simulate form submission
        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.textContent = 'Sending...';
        submitButton.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            alert('Thank you for your message! I will get back to you within 24 hours.');
            contactForm.reset();
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        }, 2000);
    });
}

// Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Header Background on Scroll
const header = document.querySelector('.header');
if (header) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
        } else {
            header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
        }
    });
}

// Intersection Observer for Animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Animate elements on scroll
const animateElements = document.querySelectorAll('.service-card, .skill-item, .featured-item, .stat-item, .award-item, .faq-item');
animateElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    // Update visible images for lightbox
    if (galleryItems.length > 0) {
        updateVisibleImages();
    }
    
    // Set current year in footer
    const currentYear = new Date().getFullYear();
    const yearElements = document.querySelectorAll('.current-year');
    yearElements.forEach(el => {
        el.textContent = currentYear;
    });
});

// Preload images for better performance
function preloadImages() {
    const images = document.querySelectorAll('img[data-src]');
    images.forEach(img => {
        const imageUrl = img.getAttribute('data-src');
        const imageElement = new Image();
        imageElement.src = imageUrl;
        imageElement.onload = () => {
            img.src = imageUrl;
            img.removeAttribute('data-src');
        };
    });
}

// Call preload function
preloadImages();

// Performance optimization: Lazy loading for images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    const lazyImages = document.querySelectorAll('img[data-src]');
    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });
}

// Add loading states to buttons
document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', function(e) {
        if (this.type === 'submit' || this.classList.contains('loading-btn')) {
            const originalText = this.textContent;
            this.textContent = 'Loading...';
            this.disabled = true;
            
            setTimeout(() => {
                this.textContent = originalText;
                this.disabled = false;
            }, 2000);
        }
    });
});