const words = ["A Web-Developer.", "An UX/UI Designer."];

let cursor = gsap.to('.cursor', { opacity: 0, ease: "power2.inOut", repeat: -1 });

let masterTl = gsap.timeline({ repeat: -1 });

words.forEach(word => {
    let tl = gsap.timeline({ repeat: 1, yoyo: true });
    tl.to('.text', { duration: 1, text: word });
    masterTl.add(tl);
});

//animation script for elements with the 'reveal-type' class
(function() {
    gsap.registerPlugin(ScrollTrigger);

    const revealElements = document.querySelectorAll('.reveal-type');

    revealElements.forEach(element => {
        //timeline for each element
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: element,
                start: 'top 80%', 
                end: 'bottom 20%',
                toggleActions: 'play none none none'
            }
        });

        //the animation properties for left-to-right reveal
        tl.from(element, {
            duration: 1,
            autoAlpha: 0,
            x: -100,
            ease: 'power1.out'
        });
    });
})();

(function() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navigation = document.querySelector('nav');

    const toggleMenu = () => {
        hamburgerMenu.classList.toggle('opened');
        navigation.classList.toggle('active');
    };

    hamburgerMenu.addEventListener('click', toggleMenu);


    const images = document.querySelectorAll('.small-images .image');
    images.forEach(item => {
        item.addEventListener('click', function(event) {
            images.forEach(img => img.classList.remove('selected')); 
            event.target.classList.add('selected'); 

            const mainImage = document.querySelector('.main-image .current-image');
            if (mainImage) {
                mainImage.src = event.target.src;
            }
        });
    });
})();

//gsap color animation
(function() {
    gsap.to(".random-circle", {
        duration: 8,
        backgroundColor: "#F7931E",
    });
    gsap.registerPlugin(ScrollToPlugin);
    const portfolioLink = document.querySelector(".portfolio-btn");

    portfolioLink.addEventListener("click", (e) => {
        e.preventDefault();
        gsap.to(window, {
            scrollTo: "#projects", // Simplified for testing
            duration: 2
        });
    });
})();



//video-player
const player = new Plyr('#player');

