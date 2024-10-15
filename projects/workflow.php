<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../_sass/style.css">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>


    <!-- Include Highlight.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">  
    
    <!-- Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Metadata -->
    <meta name="description" content=" Project: The Blue - Water Website.Visual experiences that showcases usage of Vanilla JavaScript, JS Plugins and Libraries for a good cause. Built with HTML, CSS, JavaScript." ">
    <meta name="keywords" content="Masha Supikhanova, Web Developer, Portfolio, Front-end Developer, Product Designer, Vancouver>
    <meta property="og:url" content="https://mashasupix.com/projects/theblue" />
    <meta property="og:title" content="mariasupix - workflow" />
    <meta property="og:description" content="Visual experiences that showcases usage of Vanilla JavaScript, JS Plugins and Libraries for a good cause" />
    <meta property="og:image" content="https://mashasupix.com/assets/img/posters/theblue-poster.png" />
    <meta property="og:type" content="website" />


    <title>mariasupix - the blue</title>
</head>
<body>
    <?php include '../components/nav-project.php'; ?>
    <div id="cursor-follower">
        <span class="cursor-text"></span>
    </div>
    <main class="ezt" >
        <section class="title">
            <div class="grid">
                <div class="col-12">
                    <h2>workflow - promotional landing</h2>
                </div>
                <div class="col-12">
                    <div class="tags">
                        <div class="pill-blue">html</div>
                        <div class="pill-blue">scss</div>
                        <div class="pill-blue">javascript</div>
                        <div class="pill-pink">ui design</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="project-container">
            <section class="project-banner">
                <video src="../assets/video/workflow.mp4" autoplay muted looped></video>
            </section>
            <section class="description">
                <div class="grid">
                <div class="col-12">
                    <h4>a real world example of Saas app bussiness promotional website, utilizing Local Storage memory personalized styling light and dark modes and scss to improve code structure.</h4>
                </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="col-12 button-wrap">
                        <a class="button live" href="https://water.mashasupix.com/index.html" target="_blank">VIEW LIVE</a>
                        <a class="button code" href="https://github.com/ssupix/water-website" target="_blank">VIEW CODE</a>
                    </div>
                </div>
            </section>
            <section class="details">
                <div class="grid">
                    <div class="col-12 col-6-md detail border">
                        <h3>Input</h3>
                        <p>Masha Supikhanova – Creative developer</p>
                        <h3>Total Hours</h3>
                        <p>15 hrs</p>
                    </div>
                    <div class="col-12 col-6-md detail">
                        <h3>Design Tools</h3>
                        <p>Figma</p>
                        <h3>Developer Stack</h3>
                        <p>HTML, SCSS, <br> JavaScript, GSAP</p>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg ">
                        <q>The goal was to create a clean, modern website that effectively promotes the app's features and benefits.</q>
                        <p>The hero section and some other elements use a bento-box style layout, which organizes information in a way that feels intuitive, similar to what you'd expect from a dashboard in an app like Workflow.</p>
                    </div>
                    <div class="visual col-12 col-8-lg ">
                        <p>This project is based on one of my term projects from Web Interactions course at BCIT. The primary objective was to design and develop a comprehensive marketing page for a fictional SaaS app called Workflow, a project management tool tailored for remote teams.</p>
                        <video loop muted autoplay title="The Blue Website Showcase">
                            <source src="../assets/video/imac-workflow.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </section>
            <section class="getting-started">
                <div class="grid showcase">
                    <div class="col-12 col-8-lg">
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="450" src="https://embed.figma.com/design/O5Lg5KBskufVIfNrs4E1TI/workflow?node-id=0-1&embed-host=share" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-7-md col-4-lg co sp">
                        <div class="text-wrap">
                            <p>Before development, I created simple mockups for both light and dark modes using Figma, following a 12-column grid layout. Though not interactive, these designs provided a clear visual guide for quick and efficient development.</p>
                            <p> Visualization is crucial for me, as it helps ensure I know exactly what I'm working towards. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-7-lg sp"> 
                        <h2>using scss.</h2>
                        <p>To style the entire website, I utilized SCSS, taking advantage of features like file nesting, variables, and functions to create an easy to maintain codebase. SCSS allows for more organized styling, which significantly improved the efficiency of my workflow(haha).</p>
                        <p>Fun fact: before I discovered SCSS, I used to manually attempt nesting and breaking down regular CSS files because I looked for a structured approach. Now, with SCSS, it feels even better as the nesting and variables fit my work process, making the styles more modular and scalable. </p>
                    </div>
                    <div class="col-12">
                        <div class="code-show">
                            <div class="select">
                                <span>variables</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/variables.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span>nesting</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/nesting.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span>functions</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/function.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-6-lg sp"> 
                        <h2>dropdowns.</h2>
                        <p>I created a classic dropdown accordion with smooth max-height transition animations. This specific design allows users to expand only the options they are interested in, automatically closing any previously opened sections. This keeps the interface clean and organized, minimizing clutter.</p>
                    </div>
                    <div class="col-12 col-6-lg sp">
                        <video loop muted autoplay title="The Blue Website Showcase">
                            <source src="../assets/video/dropdowns-workflow.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video> 
                    </div>
                    <div class="col-12">
                        <div class="code-show">
                            <div class="select">
                                <span>dropdowns</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/dropdowns.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-7-lg sp"> 
                        <h2>local storage.</h2>
                        <p>One of the key features I implemented was the ability to switch between light and dark modes. I created two unique IDs that toggle on and off the body element, each containing corresponding styling colors in the separate SCSS file.</p>
                        <p>Chosen in the current session theme is saved in Local Storage, allowing the website to remember the user's preference even after closing the browser. This provides a consistent styling experience that enhances usability and personalization.</p>
                    </div>
                    <div class="col-12">
                        <div class="code-show">
                            <div class="select">
                                <span>local storage theme switch</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/localstorage.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg">
                        <q>For next steps, I’m eager to learn and continue enhancing my development skills even further. </q>
                        <p>This project showcases my growing skills in HTML and vanilla JavaScript, along with improved SCSS techniques.  It represents a significant improvement in structure compared to my first website, the Water website, and has sparked my curiosity about component-based coding with better structure, that is easier to maintain. </p>
                    </div>
                    <div class="visual col-12 col-8-lg">
                        <img src="" alt="To be displayed">
                    </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="col-12 button-wrap">
                        <a class="button live" href="https://water.mashasupix.com/index.html" target="_blank">VIEW LIVE</a>
                        <a class="button code" href="https://github.com/ssupix/water-website" target="_blank">VIEW CODE</a>
                    </div>
                </div>
            </section>
        </div>

        <section class="more-projects">
            <h2>more work.</h2>
                <div class="project-scroll">
                    <ul>
                        <li>
                            <div class="card hover-content" data-category="2" data-hover-text="View project" onclick="window.location.href='./theblue';">
                                <div class="cover">
                                    <video src="../assets/video/theblue.mp4" autoplay muted loop></video>
                                </div>
                                <h4>the blue - water website</h4>
                                <div class="tags">
                                    <div class="pill-blue">html</div>
                                    <div class="pill-blue">scss</div>
                                    <div class="pill-blue">javascript</div>
                                    <div class="pill-pink">ui design</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./meowdy';">
                                <div class="cover">
                                    <img src="../assets/img/meowdy/meowdy-mockup.jpg" alt="">
                                </div>
                                <h4>meowdy! Cat surprise boxes</h4>
                                <div class="tags">
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Photoshop</div>
                                    <div class="pill-pink">Packaging</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./ezt';">
                                <div class="cover">
                                    <video src="../assets/video/ezt.mp4" autoplay muted loop></video>
                                </div>
                                <h4>ezt - online tea shop</h4>
                                <div class="tags">
                                    <div class="pill-blue">ux research</div>
                                    <div class="pill-pink">ui design</div>
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Figma</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="2" data-hover-text="View project" onclick="window.location.href='./theblue';">
                                <div class="cover">
                                    <video src="../assets/video/theblue.mp4" autoplay muted loop></video>
                                </div>
                                <h4>the blue - water website</h4>
                                <div class="tags">
                                    <div class="pill-blue">html</div>
                                    <div class="pill-blue">scss</div>
                                    <div class="pill-blue">javascript</div>
                                    <div class="pill-pink">ui design</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./meowdy';">
                                <div class="cover">
                                    <img src="../assets/img/meowdy/meowdy-mockup.jpg" alt="">
                                </div>
                                <h4>meowdy! Cat surprise boxes</h4>
                                <div class="tags">
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Photoshop</div>
                                    <div class="pill-pink">Packaging</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./ezt';">
                                <div class="cover">
                                    <video src="../assets/video/ezt.mp4" autoplay muted loop></video>
                                </div>
                                <h4>ezt - online tea shop</h4>
                                <div class="tags">
                                    <div class="pill-blue">ux research</div>
                                    <div class="pill-pink">ui design</div>
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Figma</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>        
    </main>

    <?php include '../components/footer-project.php'; ?>

    <!-- scrolling -->
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script> 
    <script src="../js/smooth.js"></script>

    <!-- GSAP ANIMATIONS -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="../js/gsap.js"></script>
    <script src="../js/nav.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>

    <script src="../js/scroll.js"></script>
    <script src="../js/scramble.js"></script>
    <script src="../js/dropdown.js"></script>
    <script src="../js/video.js"></script>

    <!-- Include Highlight.js JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="../js/cursor.js"></script>
</body>
</html>