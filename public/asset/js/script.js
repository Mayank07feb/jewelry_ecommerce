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





// Select all tab buttons
const tabButtons = document.querySelectorAll('.tab-btn');

// Add click event listener to each button
tabButtons.forEach((button) => {
  button.addEventListener('click', function () {
    // Remove active styles from all buttons
    tabButtons.forEach((btn) => {
      btn.classList.remove('bg-white', 'text-[#601042]', 'active-tab', 'underline');
    });

    // Add active styles to the clicked button
    this.classList.add('bg-white', 'text-[#601042]', 'active-tab', 'underline');
  });
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

// card1------------VALUE
    document.addEventListener('DOMContentLoaded', () => {
        const readMoreBtn = document.getElementById('read-more');
        const readLessBtn = document.getElementById('read-less');
        const showMoreIcon = document.getElementById('show-more-icon');
        const showLessIcon = document.getElementById('show-less-icon');
        const coreValuesText = document.getElementById('core-values-text');
        
        // Initial hidden state
        const fullText = "Our story unfolds over eighteen decades – inspired by the values of trust, purity, and transparency. Generations of the Gadgil family have employed their experience and expertise to abide by being a global hallmark of traditional designs while bringing a fresh twist to contemporary designs. A journey adorned with the values of goodness, creativity, and evolution!";
        const shortText = fullText.slice(0, 150) + '...'; // Adjust the slice as needed

        coreValuesText.innerHTML = shortText;

        readMoreBtn.addEventListener('click', () => {
            coreValuesText.innerHTML = fullText;
            showMoreIcon.classList.add('hidden');
            readMoreBtn.classList.add('hidden');
            showLessIcon.classList.remove('hidden');
            readLessBtn.classList.remove('hidden');
        });

        readLessBtn.addEventListener('click', () => {
            coreValuesText.innerHTML = shortText;
            showMoreIcon.classList.remove('hidden');
            readMoreBtn.classList.remove('hidden');
            showLessIcon.classList.add('hidden');
            readLessBtn.classList.add('hidden');
        });
    });

// CARD2 --------VISION
document.addEventListener('DOMContentLoaded', () => {
    const readMoreBtn = document.getElementById('read-more-vission');
    const readLessBtn = document.getElementById('read-less-vission');
    const showMoreIcon = document.getElementById('show-more-icon-vission');
    const showLessIcon = document.getElementById('show-less-icon-vission');
    const coreValuesText = document.getElementById('core-values-text-vission');
    
    // Initial hidden state
    const fullText = "Our story unfolds over eighteen decades – inspired by the values of trust, purity, and transparency. Generations of the Gadgil family have employed their experience and expertise to abide by being a global hallmark of traditional designs while bringing a fresh twist to contemporary designs. A journey adorned with the values of goodness, creativity, and evolution!";
    const shortText = fullText.slice(0, 150) + '...'; // Adjust the slice as needed

    coreValuesText.innerHTML = shortText;

    readMoreBtn.addEventListener('click', () => {
        coreValuesText.innerHTML = fullText;
        showMoreIcon.classList.add('hidden');
        readMoreBtn.classList.add('hidden');
        showLessIcon.classList.remove('hidden');
        readLessBtn.classList.remove('hidden');
    });

    readLessBtn.addEventListener('click', () => {
        coreValuesText.innerHTML = shortText;
        showMoreIcon.classList.remove('hidden');
        readMoreBtn.classList.remove('hidden');
        showLessIcon.classList.add('hidden');
        readLessBtn.classList.add('hidden');
    });
});

// card3-------------MISSION
document.addEventListener('DOMContentLoaded', () => {
    const readMoreBtn = document.getElementById('read-more-Mission');
    const readLessBtn = document.getElementById('read-less-Mission');
    const showMoreIcon = document.getElementById('show-more-icon-Mission');
    const showLessIcon = document.getElementById('show-less-icon-Mission');
    const coreValuesText = document.getElementById('core-values-text-Mission');
    
    // Initial hidden state
    const fullText = "Our story unfolds over eighteen decades – inspired by the values of trust, purity, and transparency. Generations of the Gadgil family have employed their experience and expertise to abide by being a global hallmark of traditional designs while bringing a fresh twist to contemporary designs. A journey adorned with the values of goodness, creativity, and evolution!";
    const shortText = fullText.slice(0, 150) + '...'; // Adjust the slice as needed

    coreValuesText.innerHTML = shortText;

    readMoreBtn.addEventListener('click', () => {
        coreValuesText.innerHTML = fullText;
        showMoreIcon.classList.add('hidden');
        readMoreBtn.classList.add('hidden');
        showLessIcon.classList.remove('hidden');
        readLessBtn.classList.remove('hidden');
    });

    readLessBtn.addEventListener('click', () => {
        coreValuesText.innerHTML = shortText;
        showMoreIcon.classList.remove('hidden');
        readMoreBtn.classList.remove('hidden');
        showLessIcon.classList.add('hidden');
        readLessBtn.classList.add('hidden');
    });
});


    