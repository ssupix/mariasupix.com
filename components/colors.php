<pre><code class="language-javascript">
    // State variables for selected bowl and color scheme
    const [selectedBowl, setSelectedBowl] = useState(0);
    const bowls = [bowlPink, bowlYellow, bowlGreen, bowlBlue];
    
    // Color schemes for different bowls
    const colorSchemes = [
        { primary: 'bg-pink-500', secondary: 'fill-pink-100', text: 'text-pink-900', circle: 'fill-pink-500' },
        { primary: 'bg-yellow-500', secondary: 'fill-yellow-100', text: 'text-yellow-900', circle: 'fill-yellow-500' },
        { primary: 'bg-green-500', secondary: 'fill-green-100', text: 'text-green-900', circle: 'fill-green-500' },
        { primary: 'bg-blue-500', secondary: 'fill-blue-100', text: 'text-blue-900', circle: 'fill-blue-500' },
    ];

    const [colorScheme, setColorScheme] = useState(colorSchemes[0]);

    // Update the color scheme whenever the selected bowl changes
    useEffect(() => {
        setColorScheme(colorSchemes[selectedBowl]);
    }, [selectedBowl]);

</code></pre>