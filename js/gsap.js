// LOGO SPINNER

gsap.registerPlugin(ScrollTrigger);
  
// GSAP timeline for spinning to the right
gsap.to(".logo-spinner", {
    rotation: 360,
    duration: 20,
    repeat: -1,
    ease: "linear"
});

// Function to reverse the spinning direction
function reverseSpin() {
    gsap.to(".logo-spinner", {
        rotation: -360,
        duration: 20,
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
                duration: 20,
                repeat: -1,
                ease: "linear"
            });
        }
    }
});

// RUNNING TEXT LINE
// animates elements with the class .running ul li
gsap.to(".running-line ul li", {
    // set the animation duration to 6 seconds
    duration: 4,
    // moves the elements horizontally by -102%
    x: "-105%",
    // linear easing
    ease: "linear",
    // makes the animation repeat infinitely
    repeat: -1
});

  