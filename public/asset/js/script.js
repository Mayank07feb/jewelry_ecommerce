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
       
    });

    // // button slider
    // document.addEventListener('DOMContentLoaded', function() {
    //     const newTab = document.getElementById('newTab');
    //     const bestTab = document.getElementById('bestTab');
    //     const newSlider = document.getElementById('newSlider');
    //     const bestSlider = document.getElementById('bestSlider');
    //     const newSliderTrack = document.getElementById('newSliderTrack');
    //     const bestSliderTrack = document.getElementById('bestSliderTrack');
    //     const newNextBtn = document.getElementById('newNextBtn');
    //     const bestNextBtn = document.getElementById('bestNextBtn');

    //     function slideNext(sliderTrack) {
    //         const slideWidth = sliderTrack.children[0].offsetWidth;
    //         sliderTrack.style.transform = `translateX(-${slideWidth}px)`;
            
    //         setTimeout(() => {
    //             sliderTrack.style.transition = 'none';
    //             sliderTrack.style.transform = 'translateX(0)';
    //             sliderTrack.appendChild(sliderTrack.children[0]);
    //             setTimeout(() => {
    //                 sliderTrack.style.transition = 'transform 300ms ease-in-out';
    //             }, 50);
    //         }, 300);
    //     }

    //     function setActiveTab(activeTab, inactiveTab, activeSlider, inactiveSlider) {
    //         activeTab.classList.add('border-[#601042]');
    //         inactiveTab.classList.remove('border-[#601042]');
    //         activeSlider.classList.remove('hidden');
    //         inactiveSlider.classList.add('hidden');
    //     }

    //     newNextBtn.addEventListener('click', () => slideNext(newSliderTrack));
    //     bestNextBtn.addEventListener('click', () => slideNext(bestSliderTrack));

    //     newTab.addEventListener('click', function() {
    //         setActiveTab(newTab, bestTab, newSlider, bestSlider);
    //     });

    //     bestTab.addEventListener('click', function() {
    //         setActiveTab(bestTab, newTab, bestSlider, newSlider);
    //     });
    // });
// Initialize Swiper
// 
