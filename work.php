<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" class="lenis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">  

    <!-- Tippy -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    
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
    <section class="work-projects grid" id="project-container">
        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/theblue'" data-category="1" data-hover-text="View project">
            <p class="cta">→</p>
            <div class="cover">
                <video loop playsinline autoplay muted loading="lazy" poster="./assets/img/posters/theblue-poster.png">
                    <source src="./assets/video/theblue.mp4" type="video/mp4">
                </video>
            </div>
            <div class="description">
                <h4>Water Website - The Blue</h4>
                <p>This site was made as a term project for BCITs Web Scripting 1 course, as a part of the New Media Design &amp; Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                <div class="tags">
                    <div class="pill-blue">html</div>
                    <div class="pill-blue">css</div>
                    <div class="pill-blue">javascript</div>
                    <div class="pill-pink">ui design</div>
                </div>
            </div>
        </div>

        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/ezt'" data-category="2" data-hover-text="View project">
            <p class="cta">→</p>
            <div class="cover">
                <video loop playsinline autoplay muted loading="lazy" poster="./assets/img/posters/ezt-poster.png">
                    <source src="./assets/video/ezt.mp4" type="video/mp4">
                </video>
            </div>
            <div class="description">
                <h4>EZT - Online Tea Shop</h4>
                <p>This site was made as a term project for BCITs Web Scripting 1 course, as a part of the New Media Design &amp; Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                <div class="tags">
                    <div class="pill-blue">ux research</div>
                    <div class="pill-pink">ui design</div>
                    <div class="pill-pink">branding</div>
                    <div class="pill-pink">figma</div>
                </div>
            </div>
        </div>

        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/meowdy'" data-category="3" data-hover-text="View project">
            <p class="cta">→</p>
            <div class="cover">
                <img src="./assets/img/meowdy/meowdy-mockup.jpg" alt="Meowdy project preview">
            </div>
            <div class="description">
                <h4>Meowdy! Cat Surprise Boxes</h4>
                <p>A branding and packaging project for Meowdy, a concept for surprise boxes for cats, focusing on engaging visuals and product design.</p>
                <div class="tags">
                    <div class="pill-pink">branding</div>
                    <div class="pill-pink">photoshop</div>
                    <div class="pill-pink">packaging</div>
                </div>
            </div>
        </div>

        <div class="card col-12 col-6-md hover-content" onclick="window.location.href='./projects/workflow'" data-category="1" data-hover-text="View project">
            <p class="cta">→</p>
            <div class="cover">
                <video loop playsinline autoplay muted loading="lazy" poster="./assets/img/posters/workflow-poster.png">
                    <source src="./assets/video/workflow.mp4" type="video/mp4">
                </video>
            </div>
            <div class="description">
                <h4>Workflow - Promotional Landing</h4>
                <p>This site was made as a term project for BCITs Web Scripting 1 course, as a part of the New Media Design &amp; Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                <div class="tags">
                    <div class="pill-blue">html</div>
                    <div class="pill-blue">scss</div>
                    <div class="pill-blue">javascript</div>
                    <div class="pill-blue">local storage</div>
                    <div class="pill-pink">ui design</div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="./dist/vendors.js"></script>
    <script src="./dist/global.js"></script>
    <script src="./dist/work.js"></script>
    
</body>
</html>