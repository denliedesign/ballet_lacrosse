function animate (){
    gsap.to(".main-scroll-up", { // selector text, Array, or object
        y: 0, // any properties (not limited to CSS)
        duration: 1, // seconds
        delay: 0.5,
        ease: "power2.inOut",
    });
    gsap.set('.animate-recital', {scrollTrigger: {
            trigger: '.animate-recital',
            start: 'top center+=50%',
            end: 'bottom center-=20%',
            toggleClass: 'recital-go',
            // markers: true
        }});
    gsap.set('.animate-recital-text', {scrollTrigger: {
            trigger: '.animate-recital-text',
            start: 'top center+=40%',
            end: 'bottom center-=20%',
            toggleClass: 'recital-text-go'
        }});
}

window.addEventListener('load', function(){
    animate();
})
