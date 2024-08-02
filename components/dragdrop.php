<pre><code><span class="code-comment">// OCEAN ELEMENTS</span>
<span class="code-comment">// DRAGGABLE FISH</span>

<span class="code-comment">// runs code when all the content is loaded</span>
<span class="code-blue">document</span><span class="code-light">.</span><span class="light-pink-code">addEventListener</span><span class="code-light">(</span><span class="code-pink">"DOMContentLoaded"</span><span class="code-light">, </span><span class="code-light">function()</span><span class="code-light">{</span>
    <span class="code-comment">// Function to add initial random positions to fish elements</span>
    <span class="code-light">function </span><span class="code-blue">addInitialRandomPositions</span><span class="code-light">() {</span>
        <span class="code-comment">// Select all fish elements</span>
        <span class="code-light">const </span><span class="code-blue">fishElements </span><span class="code-light">= </span><span class="code-blue">document</span><span class="code-light">.</span><span class="light-pink-code">querySelectorAll</span><span class="code-light">(</span><span class="code-pink">".drag-item"</span><span class="code-light">);</span>

        <span class="code-comment">// Loop through each fish element and set initial random positions</span>
        <span class="code-blue">fishElements</span><span class="code-light">.</span><span class="light-pink-code">forEach</span><span class="code-light">(</span><span class="code-light">function (<span class="code-pink">fish</span>) {</span>
            <span class="code-blue">fish</span><span class="code-light">.</span><span class="code-blue">style</span><span class="lightpink-code">.</span><span class="light-pink-code">left </span><span class="code-light">= </span><span class="code-blue">Math</span><span class="code-light">.</span><span class="code-blue">random</span><span class="code-light">() * (</span><span class="code-blue">window</span><span class="code-light">.</span><span class="code-blue">innerWidth</span><span class="code-light"> - </span><span class="code-pink">fish</span><span class="code-light">.</span><span class="code-blue">clientWidth</span><span class="code-light">) + </span><span class="code-pink">"px"</span><span class="code-light">;</span>
            <span class="code-blue">fish</span><span class="code-light">.</span><span class="code-blue">style</span><span class="code-light">.</span><span class="light-pink-code">top </span><span class="code-light">= </span><span class="code-blue">Math</span><span class="code-light">.</span><span class="code-blue">random</span><span class="code-light">() * (</span><span class="code-blue">window</span><span class="code-light">.</span><span class="code-blue">innerHeight</span><span class="code-light"> - </span><span class="code-pink">fish</span><span class="code-light">.</span><span class="code-blue">clientHeight</span><span class="code-light">) + </span><span class="code-pink">"px"</span><span class="code-light">;</span>
        <span class="code-light">});</span>
    <span class="code-light">}</span>

    <span class="code-comment">// Call the function to add initial random positions to fish elements</span>
    <span class="code-blue">addInitialRandomPositions</span><span class="code-light">();</span>
<span class="code-light">});</span>

<span class="code-comment">// DRAG AND DROP</span>
<span class="code-comment">// register the plugin</span>
<span class="light-pink-code">gsap</span><span class="code-light">.</span><span class="code-blue">registerPlugin</span><span class="code-light">(</span><span class="code-blue">Draggable</span><span class="code-light">);</span>

<span class="code-comment">// use this plugin on elements with class .drag-item</span>
<span class="code-blue">Draggable</span><span class="code-light">.</span><span class="code-blue">create</span><span class="code-light">(</span><span class="code-pink">".drag-item"</span><span class="code-light">, {</span>
    <span class="code-comment">// you can drag elements outside of #ocean div</span>
    <span class="code-blue">bounds</span><span class="code-light">: </span><span class="code-pink">"#ocean"</span>
<span class="code-light">});</span>
</code></pre>