<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_sass/style.css">

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
    <meta name="description" content=" Project: The Blue - Water Website. Masha Supikhanova. Front-end developer & product designer, based in Vancouver, BC. Creating meaningful experiences online. As a developer with design skills I specialize in animated, responsive, and interactive content. By understanding nuances of both sides, I’m able to create most effective and best suitable solutions." ">
    <meta name="keywords" content="Masha Supikhanova, Web Developer, Portfolio, Front-end Developer, Product Designer, Vancouver>
    <meta property="og:url" content="https://mashasupix.com/projects/theblue" />
    <meta property="og:title" content="Masha Supikhanova | Work Projects" />
    <meta property="og:description" content="Creating meaningful experiences online. Front-end developer & product designer." />
    <meta property="og:image" content="https://mashasupix.com/assets/img/card.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mashasupix.com/projects/kabinets">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <title>Masha Supikhanova | Project: EZT online tea store</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <link rel="apple-touch-icon" href="../assets/img/logo.svg" />
</head>
<body>
    
    <?php include '../components/nav-project.php'; ?>

    <main class="ezt">
        <section class="title">
            <div class="grid">
                <div class="col-12">
                    <h2>kabinet nail salon</h2>
                </div>
                <div class="col-12">
                    <h4>High Fidelity Figma Prototype UX Research, implementing Brand Identity and User Testing Report for fictional company, EZT - Tea Cafe, bar and shop.</h4>
                </div>
            </div>
        </section>
        <section class="project-container">
            <div class="project-banner">
                <video src="../assets/img/kabinet-mockup.jpg" autoplay muted looped></video>
            <div>
        </section>

        <section class="more-projects">
            <h2>more work.</h2>
                <div class="project-scroll">
                    <ul>
                        <li>
                            <div class="card" data-category="2">
                                <div class="cover">
                                    <video src="../assets/video/ezt-mockup.mp4" autoplay muted loop></video>
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
                            <div class="card" data-category="3">
                                <div class="cover">
                                    <img src="../assets/img/meowdy-mockup.jpg" alt="">
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
                            <div class="card" data-category="3">
                                <div class="cover">
                                    <img src="../assets/img/kabinet-mockup.jpg" alt="">
                                </div>
                                <h4>kabinet nails</h4>
                                <div class="tags">
                                    <div class="pill-pink">Branding</div>
                                    <div class="pill-pink">Illustrator</div>
                                    <div class="pill-pink">Blender</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card" data-category="2">
                                <div class="cover">
                                    <video src="../assets/video/ezt-mockup.mp4" autoplay muted loop></video>
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
                            <div class="card" data-category="3">
                                <div class="cover">
                                    <img src="../assets/img/meowdy-mockup.jpg" alt="">
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
                            <div class="card" data-category="3">
                                <div class="cover">
                                    <img src="../assets/img/kabinet-mockup.jpg" alt="">
                                </div>
                                <h4>kabinet nails</h4>
                                <div class="tags">
                                    <div class="pill-pink">Branding</div>
                                    <div class="pill-pink">Illustrator</div>
                                    <div class="pill-pink">Blender</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>
    </main>

    <?php include '../components/footer-project.php'; ?>

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

</body>
</html>