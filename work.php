<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_sass/style.css">

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">  
    
    <!-- Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <meta property="og:title" content="Masha Supikhanova | Projects" />
    <meta property="og:description" content="Showcasing projects including front-end development, UX & UI design, and branding." />
    <meta property="og:image" content="https://mashasupix.com/assets/img/card.png" />
    
    <title>Masha's Work</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
</head>
<body>
    
    <?php include 'components/nav.php'; ?>
    
    <main>
    <div class="work-header">
        <h2>WORK.</h2>
        <div class="grid">
            <div class="filter col-12 col-6-md">
                <div class="select">
                    <span class="selected">All Projects</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li id="1">front-end development</li>
                    <li id="2">UX & UI Design</li>
                    <li id="3">Branding</li>
                    <li class="active" id="all">All Projects</li>
                </ul>
            </div>
            <div class="view-switch col-6">
                <span class="grid-switch active-switch">GRID</span>/<span class="list-switch list">LIST</span>
            </div>
        </div>
    </div>
    <div class="work-projects grid">
        <div class="card col-12 col-6-md" onclick="window.location.href='./projects/theblue';" data-category="1">
                <div class="cover">
                    <video src="./assets/video/dddd.mp4" autoplay muted loop></video>
                </div>
            <a href="./projects/theblue.html"><h4>water website - the blue</h4></a>
            <div class="tags">
                <div class="pill-blue">ux research</div>
                <div class="pill-pink">ui design</div>
                <div class="pill-pink">branding</div>
                <div class="pill-pink">Figma</div>
            </div>
        </div>
        <div class="card col-12 col-6-md data-category="2">
            <div class="cover">
                <video src="./assets/video/ezt-mockup.mp4" autoplay muted loop></video>
            </div>
            <h4>ezt - online tea shop</h4>
            <div class="tags">
                <div class="pill-blue">ux research</div>
                <div class="pill-pink">ui design</div>
                <div class="pill-pink">branding</div>
                <div class="pill-pink">Figma</div>
            </div>
        </div>
        <div class="card col-12 col-6-md" data-category="3">
            <div class="cover">
                <img src="./assets/img/meowdy-mockup.jpg" alt="">
            </div>
            <h4>meowdy! Cat surprise boxes</h4>
            <div class="tags">
                <div class="pill-pink">branding</div>
                <div class="pill-pink">Photoshop</div>
                <div class="pill-pink">Packaging</div>
            </div>
        </div>
        <div class="card col-12 col-6-md" data-category="3">
            <div class="cover">
                <img src="./assets/img/kabinet-mockup.jpg" alt="">
            </div>
            <h4>kabinet nails</h4>
            <div class="tags">
                <div class="pill-pink">Branding</div>
                <div class="pill-pink">Illustrator</div>
                <div class="pill-pink">Blender</div>
            </div>
        </div>
    </div>


        <div class="work-projects-list hidden grid">
            <div class="card-list col-12" data-category="1">
                <div class="cover">
                    <video src="./assets/video/dddd.mp4" autoplay muted loop></video>
                </div>
                <div class="description">
                    <h4>water website - the blue</h4>
                    <p>This site was made as a term project for BCITs Web Scripting 1 course, as a part of the New Media Design & Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                    <div class="tags">
                        <div class="pill-blue">ux research</div>
                        <div class="pill-pink">ui design</div>
                        <div class="pill-pink">branding</div>
                        <div class="pill-pink">Figma</div>
                    </div>
                </div>
            </div>
            <div class="card-list col-12" data-category="2">
                <div class="cover">
                    <video src="./assets/video/ezt-mockup.mp4" autoplay muted loop></video>
                </div>
                <div class="description">
                    <h4>ezt - online tea shop</h4>
                    <p>This site was made as a term project for BCITs Web Scripting 1 course, as a part of the New Media Design & Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                    <div class="tags">
                        <div class="pill-blue">ux research</div>
                        <div class="pill-pink">ui design</div>
                        <div class="pill-pink">branding</div>
                        <div class="pill-pink">Figma</div>
                    </div>
                </div>
            </div>
            <div class="card-list col-12" data-category="3">
                <div class="cover">
                    <img src="./assets/img/meowdy-mockup.jpg" alt="">
                </div>
                <div class="description">
                    <h4>ezt - online tea shop</h4>
                    <p>This site was made as a term project for BCIT’s Web Scripting 1 course, as a part of the New Media Design & Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                    <div class="tags">
                        <div class="pill-blue">ux research</div>
                        <div class="pill-pink">ui design</div>
                        <div class="pill-pink">branding</div>
                        <div class="pill-pink">Figma</div>
                    </div>
                </div>
            </div>
            <div class="card-list col-12" data-category="3">
                <div class="cover">
                    <img src="./assets/img/kabinet-mockup.jpg" alt="">
                </div>
                <div class="description">
                    <h4>ezt - online tea shop</h4>
                    <p>This site was made as a term project for BCIT’s Web Scripting 1 course, as a part of the New Media Design & Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                    <div class="tags">
                        <div class="pill-blue">ux research</div>
                        <div class="pill-pink">ui design</div>
                        <div class="pill-pink">branding</div>
                        <div class="pill-pink">Figma</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>

    <!-- GSAP ANIMATIONS -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="./js/gsap.js"></script>
    <script src="./js/nav.js"></script>

    <!-- <script src="./js/vendor/isotope.min.js"></script>
    <script src="./js/isotope.js"></script> -->

    <script src="./js/dropdown.js"></script>
    <script src="./js/viewtoggle.js"></script>
    <script src="./js/filter.js"></script>
    <script src="./js/scroll.js"></script>
    
</body>
</html>