<pre><code class="scss">
    // SCSS function to create a flex container
    @function flexbox($justify: flex-start, $align: stretch, $direction: row) {
        @return (
            display: flex,
            justify-content: $justify,
            align-items: $align,
            flex-direction: $direction
        );
    }

    // Usage of the function in SCSS
    .container {
    @include flexbox(center, center, row);  // Centers content both horizontally and vertically

        .item {
            flex: 1;
            padding: 10px;
            background-color: #f1f1f1;
            margin: 5px;
        }
    }

</code></pre>