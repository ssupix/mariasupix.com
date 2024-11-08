// LOGO SPINNER
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

// GSAP timeline for spinning to the right
gsap.to(".logo-spinner", {
    rotation: 360,
    duration: 30,
    repeat: -1,
    ease: "linear"
});

// Function to reverse the spinning direction
function reverseSpin() {
    gsap.to(".logo-spinner", {
        rotation: -360,
        duration: 30,
        repeat: -1,
        ease: "linear"
    });
}

// ScrollTrigger to detect scrolling
ScrollTrigger.create({
    onUpdate: (self) => {
        if (self.direction === 1) { // scrolling down
        reverseSpin();
        } else if (self.direction === -1) { // scrolling up
            gsap.to(".logo-spinner", {
                rotation: 360,
                duration: 30,
                repeat: -1,
                ease: "linear"
            });
        }
    }
});
