document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });
    }
    
    const dropdowns = document.querySelectorAll('.dropdown, .mega-dropdown');
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        if (toggle) {
            toggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        }
    });

    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dots .dot');
    let currentSlide = 0;
    let heroInterval;

    function showSlide(index) {
        heroSlides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (heroDots[i]) heroDots[i].classList.remove('active');
        });
        
        if (heroSlides[index]) {
            heroSlides[index].classList.add('active');
        }
        if (heroDots[index]) {
            heroDots[index].classList.add('active');
        }
        currentSlide = index;
    }

    function nextSlide() {
        let next = currentSlide + 1;
        if (next >= heroSlides.length) next = 0;
        showSlide(next);
    }

    function prevSlide() {
        let prev = currentSlide - 1;
        if (prev < 0) prev = heroSlides.length - 1;
        showSlide(prev);
    }

    if (heroSlides.length > 0) {
        heroInterval = setInterval(nextSlide, 5000);
        
        const prevBtn = document.querySelector('.hero-nav.prev');
        const nextBtn = document.querySelector('.hero-nav.next');
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                clearInterval(heroInterval);
                prevSlide();
                heroInterval = setInterval(nextSlide, 5000);
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                clearInterval(heroInterval);
                nextSlide();
                heroInterval = setInterval(nextSlide, 5000);
            });
        }
        
        heroDots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                clearInterval(heroInterval);
                showSlide(i);
                heroInterval = setInterval(nextSlide, 5000);
            });
        });
    }

    const navbar = document.querySelector('.navbar');
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            navbar.style.background = 'rgba(0, 0, 0, 0.95)';
            navbar.style.padding = '8px 5%';
        } else {
            navbar.style.background = '#000';
            navbar.style.padding = '10px 5%';
        }
        
        lastScroll = currentScroll;
    });

    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.service-card, .choose-card, .gallery-item, .contact-info-card');
        
        elements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight - 100;
            
            if (isVisible) {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }
        });
    };

    const initAnimationElements = () => {
        const elements = document.querySelectorAll('.service-card, .choose-card, .gallery-item, .contact-info-card');
        elements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });
    };

    initAnimationElements();
    animateOnScroll();
    window.addEventListener('scroll', animateOnScroll);

    const videos = document.querySelectorAll('video[data-autoplay]');
    videos.forEach(video => {
        video.play().catch(e => console.log('Video autoplay prevented'));
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    const reelItems = document.querySelectorAll('.reel-item');
    reelItems.forEach(item => {
        const video = item.querySelector('video');
        if (video) {
            item.addEventListener('mouseenter', () => video.play());
            item.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0;
            });
        }
    });
});
