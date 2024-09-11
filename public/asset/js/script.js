// banner
document.addEventListener('DOMContentLoaded', function () {
    const sliderWrapper = document.getElementById('sliderWrapper');
    const dots = document.querySelectorAll('.pagination-dot');
    let currentIndex = 0;
    const totalSlides = dots.length;

    function showSlide(index) {
        const offset = -100 * index; // Adjust this if using different percentages
        sliderWrapper.style.transform = `translateX(${offset}%)`;
        dots.forEach(dot => dot.classList.remove('bg-[#601042]'));
        dots[index].classList.add('bg-[#601042]');
    }

    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            const index = parseInt(this.getAttribute('data-index'), 10);
            currentIndex = index;
            showSlide(index);
        });
    });

    // Auto-slide
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }, 4000); // Change slide every 5 seconds
});












// <!-- Swiper JS Initialization -->

var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    slidesPerView: 1, // Default to 1 slide per view for smaller screens
    breakpoints: {
        // When window width is >= 1024px (large screens)
        1024: {
            slidesPerView: 7, // 7 slides per view on large screens
        },
        // Optional: Set different slidesPerView for other screen sizes
        768: {
            slidesPerView: 3, // Example: 3 slides per view on tablets
        },
        480: {
            slidesPerView: 1, // Example: 1 slide per view on mobile
        },
    },
});

// button sliuder

document.addEventListener('DOMContentLoaded', function () {
    // Initialize Glide.js sliders
    var glide1 = new Glide('#glide1', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        breakpoints: {
            1200: { perView: 2 },
            800: { perView: 1 }
        }
    }).mount();

    var glide2 = new Glide('#glide2', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        breakpoints: {
            1200: { perView: 2 },
            800: { perView: 1 }
        }
    }).mount();

    // Tab functionality
    var tabs = document.querySelectorAll('.tab-buttons button');
    var tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            var target = this.getAttribute('data-tab');
            
            tabs.forEach(btn => btn.classList.remove('active'));
            tab.classList.add('active');

            tabContents.forEach(content => {
                if (content.id === target) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });

            // Reinitialize Glide.js after tab switch
            if (target === 'slider1') {
                glide1.update();
            } else if (target === 'slider2') {
                glide2.update();
            }
        });
    });

    // Optional: Auto-update Glide.js on window resize
    window.addEventListener('resize', function() {
        if (!document.querySelector('#slider1.hidden')) {
            glide1.update();
        } else if (!document.querySelector('#slider2.hidden')) {
            glide2.update();
        }
    });
});
