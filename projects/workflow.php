<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">  

    <!-- Include Highlight.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <!-- Tippy -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    
    <!-- Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Metadata -->
    <meta name="description" content="Workflow: A promotional landing page for a fictional SaaS app. This project showcases a clean, modern design utilizing HTML, SCSS, and JavaScript. Features include personalized styling with light and dark modes, Local Storage, and dynamic UI interactions like dropdowns and animations.">
    <meta name="keywords" content="Workflow, SaaS app, Maria Supikhanova, Web Developer, Front-end Developer, UI Design, JavaScript, SCSS, HTML, Vancouver">
    <meta property="og:url" content="https://mariasupix.com/projects/workflow" />
    <meta property="og:title" content="mariasupix - workflow promotional landing" />
    <meta property="og:description" content="A modern SaaS app promotional website with dynamic styling and user interaction features, designed by Masha Supikhanova." />
    <meta property="og:image" content="https://mariasupix.com/assets/img/posters/workflow-poster.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mariasupix.com/projects/workflow">


    <title>mariasupix - workflow</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.svg">
    <link rel="apple-touch-icon" href="../assets/img/logo.svg" />
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
                <img src="../assets/img/workflow/workflow-banner.png" alt="Project Banner">
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
                        <a class="button live" href="https://workflow.mariasupix.com/" target="_blank">VIEW LIVE</a>
                        <a class="button code" href="https://github.com/ssupix/term-project-workflow" target="_blank">VIEW CODE</a>
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
                        <p>The hero section and some other elements use a <span class="context" data-tippy-content="More about this style"><a href="https://bentogrids.com/" target="_blank">bento-box</a></span> style layout, which organizes information in a way that feels intuitive, similar to what you'd expect from a dashboard in an app like Workflow.</p>
                    </div>
                    <div class="visual col-12 col-8-lg ">
                        <p>This project is based on one of my term projects from <span class="context" data-tippy-content="Part of my Diploma">Web Interactions</span> course at <span class="context" data-tippy-content="More about my Diploma"><a href="https://www.bcit.ca/programs/new-media-design-and-web-development-diploma-full-time-6525dipma/" target="_blank">BCIT</a></span>. The primary objective was to design and develop a comprehensive marketing page for a fictional SaaS app called Workflow, a project management tool tailored for remote teams.</p>
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/imac-workflow-poster.png" title="Workflow Website Showcase">
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
                            <p>Before development, I created simple mockups for both light and dark modes using <span class="context" data-tippy-content="My design software of choice">Figma</span>, following a <span class="context" data-tippy-content="Responsive and premade">12-column grid</span> layout. Though not interactive, these designs provided a clear visual guide for quick and efficient development.</p>
                            <p> Visualization is crucial for me, as it helps ensure I know exactly what I'm working towards. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-7-lg sp"> 
                        <h2>using scss.</h2>
                        <p>To style the entire website, I utilized <span class="context" data-tippy-content="Like CSS but better"><a href="https://sass-lang.com/" target="_blank">SCSS</a></span>, taking advantage of features like file <span class="context" data-tippy-content="See in a snippet">nesting</span>, <span class="context" data-tippy-content="See in a snippet">variables</span>, and <span class="context" data-tippy-content="See in a snippet">functions</span> to create an easy to maintain codebase. SCSS allows for more organized styling, which significantly improved the efficiency of my workflow(haha).</p>
                        <p><span class="context" data-tippy-content="Fun to me">Fun fact:</span> before I discovered SCSS, I used to manually attempt nesting and breaking down regular CSS files because I looked for a structured approach. Now, with SCSS, it feels even better as the nesting and variables fit my work process, making the styles more modular and scalable. </p>
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
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
                        <p>I created a classic dropdown accordion with smooth max-height transition <span class="context" data-tippy-content="See in a snippet">animation</span>. This specific design allows users to expand only the options they are interested in, automatically closing any previously opened sections. This keeps the interface <span class="context" data-tippy-content="Not overwhelming">clean</span> and <span class="context" data-tippy-content="Easy to get around">organized</span>, minimizing clutter.</p>
                    </div>
                    <div class="col-12 col-6-lg sp">
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/dropdowns-workflow-poster.png" title="The Blue Website Showcase">
                            <source src="../assets/video/dropdowns-workflow.mp4" type="video/mp4">
                        </video> 
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
                        <div class="code-show">                           
                            <div  class="select">
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
                        <p>One of the key features I implemented was the ability to switch between light and dark modes. I created two unique <span class="context" data-tippy-content="#light and #dark">IDs</span> that <span class="context" data-tippy-content="See in a snippet">toggle</span> on and off the body element, each containing corresponding styling colors in the separate <span class="context" data-tippy-content="_colors.scss">SCSS file</span>.</p>
                        <p>Chosen in the current session theme is saved in <span class="context" data-tippy-content="See in a snippet">Local Storage</span>, allowing the website to remember the user's preference even after closing the browser. This provides a consistent styling experience that enhances <span class="context" data-tippy-content="Customized preferences">usability</span> and <span class="context" data-tippy-content="Good for loyalty">personalization</span>.</p>
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
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
                        <p>This project showcases my growing skills in <span class="context" data-tippy-content="Website structure">HTML</span> and <span class="context" data-tippy-content="Foundation of JS">Vanilla JavaScript</span>, along with improved <span class="context" data-tippy-content="like CSS but better">SCSS</span> techniques.  It represents a significant improvement in structure compared to my first website, <span class="context" data-tippy-content="View the project"><a href="./theblue">TheBlue</a></span> website, and has sparked my curiosity about component-based coding with better structure, that is easier to maintain. </p>
                    </div>
                    <div class="visual col-12 col-8-lg">
                        <img src="../assets/img/workflow/process.jpg" alt="WorkFlow BTS">
                    </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="col-12 button-wrap">
                        <a class="button live" href="https://workflow.mariasupix.com/" target="_blank">VIEW LIVE</a>
                        <a class="button code" href="https://github.com/ssupix/term-project-workflow" target="_blank">VIEW CODE</a>
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
                                    <video src="../assets/video/theblue.mp4" loop muted autoplay playsinline loading="lazy"></video>
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
                                    <video src="../assets/video/ezt.mp4" loop muted autoplay playsinline loading="lazy"></video>
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
                                    <video src="../assets/video/theblue.mp4" loop muted autoplay playsinline loading="lazy"></video>
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
                                    <video src="../assets/video/ezt.mp4" loop muted autoplay playsinline loading="lazy"></video>
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

    <script src="../dist/vendors.js"></script>
    <script src="../dist/global.js"></script>
    <script src="../dist/project.js"></script>

</body>
</html>