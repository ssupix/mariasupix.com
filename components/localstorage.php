<pre><code class="language-javascript">
    // THEME SWITCH

    // When the document has finished loading, run the following code
    document.addEventListener('DOMContentLoaded', () => {
        // Get references to the theme toggle button and its child icons
        const themeToggle = document.getElementById('theme-toggle');
        const lightIcon = document.getElementById('light-icon');
        const darkIcon = document.getElementById('dark-icon');
        // Get a reference to the body element
        const body = document.body;

        // Check if a theme has been saved in localStorage
        const savedTheme = localStorage.getItem('theme');
        // If a theme has been saved, apply it to the body element
        if (savedTheme) {
            body.id = savedTheme;
            // Toggle the display of the icons based on the saved theme
            if (savedTheme === 'dark') {
                lightIcon.style.display = 'none';
                darkIcon.style.display = 'block';
            } else {
                darkIcon.style.display = 'none';
                lightIcon.style.display = 'block';
            }
        }

        // Add an event listener to the theme toggle button
        // When it is clicked, toggle the theme and update the icons
        themeToggle.addEventListener('click', () => {
            // If the current theme is light, switch to dark
            if (body.id === 'light') {
                body.id = 'dark';
                lightIcon.style.display = 'none';
                darkIcon.style.display = 'block';
                // Save the new theme in localStorage
                localStorage.setItem('theme', 'dark');
            }
            // If the current theme is dark, switch to light
            else if (body.id === 'dark') {
                body.id = 'light';
                darkIcon.style.display = 'none';
                lightIcon.style.display = 'block';
                // Save the new theme in localStorage
                localStorage.setItem('theme', 'light');
            }
        });

        // Update ionicons (this line replaces feather.replace())
        ionicons.ionicon();
    });
    
</code></pre>