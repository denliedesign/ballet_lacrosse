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
    gsap.set('.animate-recital-2', {scrollTrigger: {
            trigger: '.animate-recital-2',
            start: 'top center+=50%',
            end: 'bottom center-=20%',
            toggleClass: 'recital-go',
            // markers: true
        }});
    gsap.set('.animate-recital-text-2', {scrollTrigger: {
            trigger: '.animate-recital-text-2',
            start: 'top center+=40%',
            end: 'bottom center-=20%',
            toggleClass: 'recital-text-go'
        }});
}

window.addEventListener('load', function(){
    animate();
})

// $( "#hamburger" ).click(function() {
//     $( "#sidebar" ).toggleClass( "sidebar-show" );
//     $( "#main" ).toggleClass( "main-shift" );
// });

// Timeline created and paused
var tl = gsap.timeline({ paused: true });

function openNav() {
    var hamburger = document.getElementById("hamburger");
    animateOpenNav();
    hamburger.onclick = function (e) {
        // Toggle reversed to it's opposite value
        tl.reversed(!tl.reversed());
        // Use the toggle method in the classList API
        // main.classList.toggle("main-shift");
        // sidebar.classList.toggle("sidebar-show");
    };
}

function animateOpenNav() {
    var sidebarNav = document.getElementById("sidebar");
    tl.to(sidebarNav, {
        duration: 0.8,
        ease: "power2.inOut",
        y: 0,
        x: 0
    }).to(".side-item", {
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: {
            // wrap advanced options in an object
            each: 0.2,
            // ease: "power2.inOut"
        }
    })
        .reverse(); // Finally reverse the timeline. reversed() is true
}

// init
openNav();
