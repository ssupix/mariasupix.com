<pre><code class="language-javascript">
// waits for all the content to be loaded before running the function
document.addEventListener("DOMContentLoaded", function(){
    // register the scroll trigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // RIVER ELEMENTS
    // SIDE SCROLLING
    // convert all elements with the class "content" inside the element with id "river" into an array
    const contents = gsap.utils.toArray("#river .content");

    // create an animation to move the contents horizontally
    gsap.to(contents, {
        // move the contents horizontally by the width of a single content multiplied by the number of contents minus 1
        // this effectively aligns all contents horizontally
        xPercent: -100 * (contents.length - 1),
        // define the plugin options
        scrollTrigger: {
            // set the trigger element
            trigger: "#river",
            // pin the trigger element during the animation
            pin: true,
            // set the scrubbing speed
            scrub: 0.5
        }
    });

    // ARROW
    // assign animation to .path
    gsap.to("path", {
        // animation is triggered when ".arrow-container" enters the viewport
        scrollTrigger: {
            // animation is triggered when ".arrow-container" enters the viewport
            trigger: ".arrow-container",
            // start the animation when the top of the trigger element is 70% from the top of the viewport
            start: "top 70%",
            // end the animation when the top of the trigger element is at the top of the viewport
            end: "top 0",
            // smooth animation
            scrub: true
        },
        // set the stroke dash offset to 0
        strokeDashoffset: 0
    });
});
</code></pre>