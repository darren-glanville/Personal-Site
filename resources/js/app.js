import "./bootstrap";
import { gsap } from "gsap";
import { Observer } from "tailwindcss-intersect";

function drop(el) {
    // get width of the viewport
    const vw = Math.max(
        document.documentElement.clientWidth || 0,
        window.innerWidth || 0
    );

    // set opacity to 30%
    gsap.set(el, { opacity: 0.3 });

    gsap.set(el, { x: "random(10, " + vw / 2 + ")", y: -50, opacity: 0 });
    gsap.fromTo(
        el,
        { y: -200, opacity: 0 },
        {
            duration: 4,
            y: "100vh",
            opacity: 0.5,
            onComplete: () => {
                //the third parameter is an array of parameters to pass to the drop function
                gsap.delayedCall(Math.random() * 4, drop, [el]);
            },
        }
    );
}

// wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", () => {
    // Get all icons
    const icons = document.querySelectorAll(".background-icon");

    icons.forEach((icon) => {
        // delay the drop of each icon
        gsap.delayedCall(Math.random() * 4, drop, [icon]);
    });
});

// Run the observer
Observer.start();
