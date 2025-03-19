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
    <meta name="description" content="">
    <meta name="keywords" content="Horizons, API Project, Nasa, Maria Supikhanova, Web Developer, Front-end Developer, UI Design, JavaScript, SCSS, HTML, React, Tailwind, PHP, WordPress, Vancouver">
    <meta property="og:url" content="https://mariasupix.com/projects/horizons" />
    <meta property="og:title" content="mariasupix - horizons nasa api" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="https://mariasupix.com/assets/img/workflow/horizons-banner.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mariasupix.com/projects/horizons">


    <title>mariasupix - horizonsS</title>
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
                    <h2>horizons - api project</h2>
                </div>
                <div class="col-12">
                    <div class="tags">
                        <div class="pill-blue">react.js</div>
                        <div class="pill-blue">tailwind</div>
                        <div class="pill-blue">api integration</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="project-container">
            <section class="project-banner">
                <img src="../assets/img/horizons/horizons-banner.png" alt="Project Banner">
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
                        <a class="button live" href="https://horizons.mariasupix.com/" target="_blank">VIEW LIVE</a>
                        <a class="button code" href="https://github.com/ssupix/horizons-api" target="_blank">VIEW CODE</a>
                    </div>
                </div>
            </section>
            <section class="details">
                <div class="grid">
                    <div class="col-12 col-6-md detail border">
                        <h3>Input</h3>
                        <p>Masha Supikhanova – Front-end developer</p>
                        <h3>Total Hours</h3>
                        <p>6 hrs</p>
                    </div>
                    <div class="col-12 col-6-md detail">
                        <h3>Design Tools</h3>
                        <p>Figma</p>
                        <h3>Developer Stack</h3>
                        <p>React.js, Tailwind CSS, <br> NASA API</p>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-6-lg sp"> 
                        <h2>nasa api.</h2>
                        <p>I created a classic dropdown accordion with smooth max-height transition <span class="context" data-tippy-content="See in a snippet">animation</span>. This specific design allows users to expand only the options they are interested in, automatically closing any previously opened sections. This keeps the interface <span class="context" data-tippy-content="Not overwhelming">clean</span> and <span class="context" data-tippy-content="Easy to get around">organized</span>, minimizing clutter.</p>
                    </div>
                    <div class="col-12 col-6-lg sp">
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/imac-horizons-poster.png" title="Horizons Website Showcase">
                            <source src="../assets/video/imac-horizons.mp4" type="video/mp4">
                        </video> 
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
                        <div class="code-show">                           
                            <div  class="select">
                                <span>fetch</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/dropdowns.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">                           
                            <div  class="select">
                                <span>pagination</span>
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
                        <h2>using props.</h2>
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
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg ">
                        <q>The goal was to create a clean, modern website that effectively promotes the app's features and benefits.</q>
                        <p>The hero section and some other elements use a <span class="context" data-tippy-content="More about this style"><a href="https://bentogrids.com/" target="_blank">bento-box</a></span> style layout, which organizes information in a way that feels intuitive, similar to what you'd expect from a dashboard in an app like Workflow.</p>
                    </div>
                    <div class="visual col-12 col-8-lg ">
                        <p>This project is based on one of my term projects from <span class="context" data-tippy-content="Part of my Diploma">Web Interactions</span> course at <span class="context" data-tippy-content="More about my Diploma"><a href="https://www.bcit.ca/programs/new-media-design-and-web-development-diploma-full-time-6525dipma/" target="_blank">BCIT</a></span>. The primary objective was to design and develop a comprehensive marketing page for a fictional SaaS app called Workflow, a project management tool tailored for remote teams.</p>
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/imac-horizons-poster.png" title="Horizons Website Showcase">
                            <source src="../assets/video/imac-horizons.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
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