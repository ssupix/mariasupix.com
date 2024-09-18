<pre><code class="language-javascript">
// RUNNING TEXT LINE
// animates elements with the class .running ul li
gsap.to(".running ul li", {
    // set the animation duration to 6 seconds
    duration: 6,
    // moves the elements horizontally by -102%
    x: "-102%",
    // linear easing
    ease: "linear",
    // makes the animation repeat infinitely
    repeat: -1
});
</code></pre>