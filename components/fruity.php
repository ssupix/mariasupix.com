<pre><code class="language-javascript">
    export const smoothieData = {
        steps: [
            {
                id: 'base',
                title: 'Choose Your Base',
                ingredients: [
                    { 
                        id: 'blueberry-base', 
                        name: 'Blueberry', 
                        image: BlueberryImage,
                        rgb: [75, 0, 130]
                    },
                    ...
                ],
            },
            {
                id: 'fruit',
                title: 'Add Your Fruits',
                ingredients: [
                    { 
                        id: 'banana-sliced', 
                        name: 'Banana Slices', 
                        image: BananaSlicedImage,
                        layoutImage: BananaSlicedLayoutImage
                    },
                    ...
                ],
            },
            {
                id: 'topping',
                title: 'Choose Your Toppings',
                ingredients: [
                    { 
                        id: 'cacao-nibs', 
                        name: 'Cacao Nibs', 
                        image: CacaoNibsImage
                    },
                    ...
                ],
            },
        ]
    };

</code></pre>