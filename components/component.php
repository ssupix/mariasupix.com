<pre><code class="language-jsx">
    const Card = ({ title, date, copyright, media_type, url, hdurl, explanation }) => {
        return (
            &lt;div style={{ backgroundImage: `url(${url})` }}&gt;
                &lt;div&gt;
                    &lt;h3&gt;{title}&lt;/h3&gt;
                    &lt;h4&gt;{date}&lt;/h4&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;p&gt;{explanation}&lt;/p&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;span&gt;{copyright}&lt;/span&gt;
                    &lt;span&gt;{media_type}&lt;/span&gt;
                    &lt;a href={hdurl} target="_blank"&gt;Link&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        );
    };
    
</code></pre>