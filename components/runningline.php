<pre><code><span class="code-comment">// RUNNING TEXT LINE</span>
    <span class="code-comment">// animates elements with the class .running ul li</span>
    <span class="light-pink-code">gsap</span><span class="code-light">.</span><span class="code-blue">to</span><span class="code-light">(</span><span class="code-pink">".running ul li"</span><span class="code-light">, {</span>
        <span class="code-comment">// set the animation duration to 6 seconds</span>
        <span class="code-blue">duration</span><span class="code-light">: </span><span class="code-pink">6</span><span class="code-light">,</span>
        <span class="code-comment">// moves the elements horizontally by -102%</span>
        <span class="code-blue">x</span><span class="code-light">: </span><span class="code-pink">"-102%"</span><span class="code-light">,</span>
        <span class="code-comment">// linear easing</span>
        <span class="code-blue">ease</span><span class="code-light">: </span><span class="code-pink">"linear"</span><span class="code-light">,</span>
        <span class="code-comment">// makes the animation repeat infinitely</span>
        <span class="code-blue">repeat</span><span class="code-light">: </span><span class="code-pink">-1</span>
    <span class="code-light">});</span>
</code></pre>