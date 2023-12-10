const words = ["A Web-Developer.", "An UX/UI Designer.", "A Promise Young Boy."];

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
})();