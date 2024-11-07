<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" class="lenis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_sass/style.css">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">  
    
    <!-- Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Metadata -->
    <meta name="description" content=" Work Projects. Maria Supikhanova. Front-end developer & product designer, based in Vancouver, BC. Creating meaningful experiences online. As a developer with design skills I specialize in animated, responsive, and interactive content. By understanding nuances of both sides, I’m able to create most effective and best suitable solutions." ">
    <meta name="keywords" content="Maria Supikhanova, Web Developer, Portfolio, Front-end Developer, Product Designer, Vancouver>
    <meta property="og:url" content="https://mariasupix.com/about" />
    <meta property="og:title" content="mariasupix - project portfolio" />
    <meta property="og:description" content="Responsive, interactive, and animated solutions that seamlessly blend functionality with aesthetics." />
    <meta property="og:image" content="https://mariasupix.com/assets/img/metadata/work-img.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mariasupix.com/work">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <title>mariasupix - work</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <link rel="apple-touch-icon" href="./assets/img/logo.svg" />
</head>
<body>
    
    <?php include 'components/nav.php'; ?>

    <div id="cursor-follower">
        <span class="cursor-text"></span>
    </div>
    
    <main>
    <section class="work-header">
        <div class="grid">
            <h2 class="col-12">work.</h2>
            <p class="col-12 col-6-md">As a front-end developer with a design background, I create responsive, interactive, and animated content that seamlessly blends functionality with aesthetics. I like to deliver solutions that are efficient, adaptable, and easy to maintain.</p>
        </div>
        <div class="grid filter-grid">
            <div class="filter col-6-md col-12">
                <div class="select">
                    <span class="current">All Projects</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li id="1">front-end development</li>
                    <li id="2">UX & UI Design</li>
                    <li id="3">Branding</li>
                    <li class="selected" id="all">All Projects</li>
                </ul>
            </div>
            <div class="view-switch col-6">
                <span class="grid-switch active-switch">GRID</span>/<span class="list-switch list">LIST</span>
            </div>
        </div>
    </section>
    <section class="work-projects grid">
        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/theblue';" data-category="1" data-hover-text="View project">
                <div class="cover">
                    <video loop muted autoplay playsinline loading="lazy" poster="./assets/img/posters/theblue-poster.png">
                        <source src="./assets/video/theblue.mp4" type="video/mp4">
                    </video>
                </div>
            <h4>water website - the blue</h4>
            <div class="tags">
                <div class="pill-blue">html</div>
                <div class="pill-blue">css</div>
                <div class="pill-blue">javascript</div>
                <div class="pill-pink">ui design</div>
            </div>
        </div>
        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/ezt';" data-category="2" data-hover-text="View project">
            <div class="cover">
                <video loop muted autoplay playsinline loading="lazy" poster="./assets/img/posters/ezt-poster.png"  src="./assets/video/ezt.mp4" >
                    <source src="./assets/video/ezt.mp4" type="video/mp4"/>
                </video>
            </div>
            <h4>ezt - online tea shop</h4>
            <div class="tags">
                <div class="pill-blue">ux research</div>
                <div class="pill-pink">ui design</div>
                <div class="pill-pink">branding</div>
                <div class="pill-pink">Figma</div>
            </div>
        </div>
        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/meowdy';" data-category="3" data-hover-text="View project">
            <div class="cover">
                <img src="./assets/img/meowdy/meowdy-mockup.jpg" alt="Meowdy Project Mockup">
            </div>
            <h4>meowdy! Cat surprise boxes</h4>
            <div class="tags">
                <div class="pill-pink">branding</div>
                <div class="pill-pink">Photoshop</div>
                <div class="pill-pink">Packaging</div>
            </div>
        </div>
        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/workflow';" data-category="1" data-hover-text="View project">
            <div class="cover">
                <video loop muted autoplay playsinline loading="lazy" poster="./assets/img/posters/workflow-poster.png" alt="Workflow Landing Mockup">
                    <source src="./assets/video/workflow.mp4" type="video/mp4">
                </video>
            </div>
            <h4>workflow - promotional landing</h4>
            <div class="tags">
                <div class="pill-blue">HTML</div>
                <div class="pill-blue">SCSS</div>
                <div class="pill-blue">JavaScript</div>
                <div class="pill-blue">Local Storage</div>
                <div class="pill-pink">UI Design</div>
            </div>
        </div>
    </section>
    <section class="work-projects-list hidden grid">
        <div class="card-list col-12" onclick="window.location.href='./projects/theblue';" data-category="1">
            <div class="cover">
                <video loop muted autoplay playsinline loading="lazy" poster="./assets/img/posters/theblue-poster.png" title="The Blue Website Mockup">
                    <source src="./assets/video/theblue.mp4" type="video/mp4">
                </video>
            </div>
            <div class="description">
                <h4>water website - the blue</h4>
                <p>This site was made as a term project for BCITs Web Scripting 1 course, as a part of the New Media Design & Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                <div class="tags">
                    <div class="pill-blue">html</div>
                    <div class="pill-blue">css</div>
                    <div class="pill-blue">javascript</div>
                    <div class="pill-pink">ui design</div>
                </div>
            </div>
            <p class="cta">→</p>
        </div>
        <div class="card-list col-12" onclick="window.location.href='./projects/ezt';" data-category="2">
            <div class="cover">
                <video loop muted autoplay playsinline loading="lazy" poster="./assets/img/posters/ezt-poster.png" title="EZT Prototype Mockup">
                    <source src="./assets/video/ezt.mp4" type="video/mp4">
                </video>
            </div>
            <div class="description">
                <h4>ezt - online tea shop</h4>
                <p>UX Research, Brand Identity, UI Design and User Testing Report for fictional company, EZT - Online Tea Store. Main focus is creating high-fidelity Figma mockup for custom tea blend building and purchasing processes and exploration and implementation of various tools and basic functionality in Figma.</p>
                <div class="tags">
                    <div class="pill-blue">ux research</div>
                    <div class="pill-pink">ui design</div>
                    <div class="pill-pink">branding</div>
                    <div class="pill-pink">Figma</div>
                </div>
            </div>
            <p class="cta">→</p>
        </div>
        <div class="card-list col-12" data-category="3">
            <div class="cover">
                <img src="./assets/img/meowdy/meowdy-mockup.jpg" onclick="window.location.href='./projects/meowdy';" alt="Meowdy Box Mockup">
            </div>
            <div class="description">
                <h4>ezt - online tea shop</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et nisl malesuada, vulputate eros in, ultrices lectus. Nulla facilisi. Aenean non erat nibh. Nullam sed lectus et nunc eleifend malesuada. </p>
                <div class="tags">
                    <div class="pill-blue">ux research</div>
                    <div class="pill-pink">ui design</div>
                    <div class="pill-pink">branding</div>
                    <div class="pill-pink">Figma</div>
                </div>
            </div>
            <p class="cta">→</p>
        </div>
        <div class="card-list col-12" onclick="window.location.href='./projects/workflow';" data-category="1">
            <div class="cover">
                <video loop muted autoplay playsinline loading="lazy" title="Workflow Website Mockup" poster="./assets/img/posters/workflow-poster.png">
                    <source src="./assets/video/workflow.mp4" type="video/mp4">
                </video>
            </div>
            <div class="description">
                <h4>workflow - promotional landing</h4>
                    <p>This project is based on one of my term projects from Web Interactions course at BCIT. A real world example of Saas app bussiness promotional website, utilizing Local Storage memory personalized styling light and dark modes and scss to improve code structure.</p>
                <div class="tags">
                    <div class="pill-blue">HTML</div>
                    <div class="pill-blue">SCSS</div>
                    <div class="pill-blue">JAVASCRPT</div>
                    <div class="pill-blue">Local Storage</div>
                    <div class="pill-pink">Figma</div>
                </div>
            </div>
            <p class="cta">→</p>
        </div>
    </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <!-- scrolling -->
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script> 
    <script src="./js/smooth.js"></script>

    <!-- GSAP-->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <script src="./js/sayhi.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./js/dropdown.js"></script>
    <script src="./js/viewtoggle.js"></script>
    <!-- <script src="./js/filter.js"></script> -->
    <script src="./js/scroll.js"></script>
    <script src="./js/cursor.js"></script>
    
</body>
</html>