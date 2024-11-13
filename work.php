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
    <section class="work-projects grid" id="project-container"></section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="./dist/vendors.js"></script>
    <script src="./dist/global.js"></script>
    <script src="./dist/work.js"></script>
    <script src="./js/viewtoggle.js"></script>
    <script src="./js/projects.js"></script>
    
</body>
</html>