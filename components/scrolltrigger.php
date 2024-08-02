<pre><code><span class="code-comment">// waits for all the content to be loaded before running the function</span>
<span class="code-blue">document</span><span class="code-light">.</span><span class="light-pink-code">addEventListener</span><span class="code-light">(</span><span class="code-pink">"DOMContentLoaded"</span><span class="code-light">, </span><span class="code-light">function()</span><span class="code-light">{</span>
    <span class="code-comment">// register the scroll trigger plugin</span>
    <span class="light-pink-code">gsap</span><span class="code-light">.</span><span class="code-blue">registerPlugin</span><span class="code-light">(</span><span class="code-blue">ScrollTrigger</span><span class="code-light">);</span>

    <span class="code-comment">// RIVER ELEMENTS</span>
    <span class="code-comment">// SIDE SCROLLING</span>
    <span class="code-comment">// convert all elements with the class "content" inside the element with id "river" into an array</span>
    <span class="code-light">const </span><span class="code-blue">contents</span><span class="code-light"> = </span><span class="light-pink-code">gsap</span><span class="code-light">.</span><span class="code-blue">utils</span><span class="code-light">.</span><span class="light-pink-code">toArray</span><span class="code-light">(</span><span class="code-pink">"#river .content"</span><span class="code-light">);</span>

    <span class="code-comment">// create an animation to move the contents horizontally</span>
    <span class="light-pink-code">gsap</span><span class="code-light">.</span><span class="code-blue">to</span><span class="code-light">(</span><span class="code-blue">contents</span><span class="code-light">, {</span>
        <span class="code-comment">// move the contents horizontally by the width of a single content multiplied by the number of contents minus 1</span>
        <span class="code-comment">// this effectively aligns all contents horizontally</span>
        <span class="code-blue">xPercent</span><span class="code-light">: </span><span class="code-blue">-100</span><span class="code-light"> * (</span><span class="code-blue">contents</span><span class="code-light">.</span><span class="light-pink-code">length</span><span class="code-light"> - </span><span class="code-blue">1</span><span class="code-light">),</span>
        <span class="code-comment">// define the plugin options</span>
        <span class="code-blue">scrollTrigger</span><span class="code-light">: {</span>
            <span class="code-comment">// set the trigger element</span>
            <span class="code-blue">trigger</span><span class="code-light">: </span><span class="code-pink">"#river"</span><span class="code-light">,</span>
            <span class="code-comment">// pin the trigger element during the animation</span>
            <span class="code-blue">pin</span><span class="code-light">: </span><span class="code-pink">true</span><span class="code-light">,</span>
            <span class="code-comment">// set the scrubbing speed</span>
            <span class="code-blue">scrub</span><span class="code-light">: </span><span class="code-pink">0.5</span>
        <span class="code-light">}</span>
    <span class="code-light">});</span>

    <span class="code-comment">// ARROW</span>
    <span class="code-comment">// assign animation to .path</span>
    <span class="light-pink-code">gsap</span><span class="code-light">.</span><span class="code-blue">to</span><span class="code-light">(</span><span class="code-pink">"path"</span><span class="code-light">, {</span>
        <span class="code-comment">// animation is triggered when ".arrow-container" enters the viewport</span>
        <span class="code-blue">scrollTrigger</span><span class="code-light">: {</span>
            <span class="code-comment">// animation is triggered when ".arrow-container" enters the viewport</span>
            <span class="code-blue">trigger</span><span class="code-light">: </span><span class="code-pink">".arrow-container"</span><span class="code-light">,</span>
            <span class="code-comment">// start the animation when the top of the trigger element is 70% from the top of the viewport</span>
            <span class="code-blue">start</span><span class="code-light">: </span><span class="code-pink">"top 70%"</span><span class="code-light">,</span>
            <span class="code-comment">// end the animation when the top of the trigger element is at the top of the viewport</span>
            <span class="code-blue">end</span><span class="code-light">: </span><span class="code-pink">"top 0"</span><span class="code-light">,</span>
            <span class="code-comment">// smooth animation</span>
            <span class="code-blue">scrub</span><span class="code-light">: </span><span class="code-pink">true</span>
        <span class="code-light">},</span>
        <span class="code-comment">// set the stroke dash offset to 0</span>
        <span class="code-blue">strokeDashoffset</span><span class="code-light">: </span><span class="code-blue">0</span>
    <span class="code-light">});</span>

<span class="code-light">});</span>
</code></pre>