<pre><code class="language-javascript">
    const handleLoadMore = () => {
        fetch('https://api.nasa.gov/planetary/apod?api_key=dpIeEdEggyeVboW2OfzoT0gZECCTRjFLauVYOSUM&count=3')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                setImageData(prevData => [...prevData, ...data]);
            })
            .catch(error => {
                setError(error.message);
            });
    };

</code></pre>