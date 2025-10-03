console.log("App Js loadead!");

// Registrar el plugin
gsap.registerPlugin(ScrollTrigger);

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener('click', function(e) {

        const target = document.querySelector(this.getAttribute('href'));

        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

    });

});

// Efecto Slide Right
document.querySelectorAll('.slide-right-anim').forEach(function(element) {

    gsap.from(element, {
        scrollTrigger: {
            trigger: element,
            start: "top 80%",
            toggleActions: "play none none none"
        },
        x: -100,
        opacity: 0,
        duration: 1.5,
        ease: "power2.out"
    });

});

document.querySelectorAll('.slide-left-anim').forEach(function(element) {

    gsap.from(element, {
        scrollTrigger: {
            trigger: element,
            start: "top 80%",
            toggleActions: "play none none none"
        },
        x: 100,
        opacity: 0,
        duration: 1.5,
        ease: "power2.out"
    });

});

document.querySelectorAll('.slide-up-anim').forEach(function(element) {

    gsap.from(element, {
        scrollTrigger: {
            trigger: element,      // el elemento que activa el scroll
            start: "top 80%",   // cuando el top del elemento llega al 80% del viewport
            toggleActions: "play none none reverse"
        },
        y: 100,
        opacity: 0,
        duration: 1.5,
        ease: "power2.out"
    });

});

document.querySelectorAll('.slide-down-anim').forEach(function(element) {

    gsap.from(element, {
        scrollTrigger: {
            trigger: element,      // el elemento que activa el scroll
            start: "top 80%",   // cuando el top del elemento llega al 80% del viewport
            toggleActions: "play none none reverse"
        },
        y: -100,
        opacity: 0,
        duration: 3,
        ease: "power2.out"
    });
    
});

