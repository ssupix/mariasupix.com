import { gsap } from "gsap";

// RUNNING CARDS LINE
// animates elements with the class .running ul li
gsap.to(".project-scroll ul li", {
    // set the animation duration to 6 seconds
    duration: 15,
    // moves the elements horizontally by -102%
    x: "-100%",
    // linear easing
    ease: "linear",
    // makes the animation repeat infinitely
    repeat: -1
});
