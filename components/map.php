<pre><code class="language-jsx">
    {imageData.length === 0 ? (
        &lt;p className="col-span-3 place-self-center text-white tablet:col-span-2 mobile:col-span-1"&gt;Loading...&lt;/p&gt;
    ) : (
        imageData.map((item, index) =&gt; (
            &lt;Card
                key={index}
                title={item.title || "Untitled"}
                date={item.date || "Redacted"}
                copyright={item.copyright || "Unknown"}
                media_type={item.media_type || "Undefined"}
                explanation={item.explanation || 'No description available.'}
                url={item.url || ""}
                hdurl={item.hdurl || ""}
            /&gt;
        ))
    )}
    
</code></pre>