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

    <!-- Image Slider -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- Metadata -->
    <meta name="description" content="About Masha Supikhanova. Front-end developer & product designer, based in Vancouver, BC. Creating meaningful experiences online. As a developer with design skills I specialize in animated, responsive, and interactive content. By understanding nuances of both sides, I’m able to create most effective and best suitable solutions." ">
    <meta name="keywords" content="Masha Supikhanova, Web Developer, Portfolio, Front-end Developer, Product Designer, Vancouver, UX, UI, Figma, HTML, CSS, JavaScript, php, sass>
    <meta property="og:url" content="https://mashasupix.com/about" />
    <meta property="og:title" content="Masha Supikhanova | About Me" />
    <meta property="og:description" content="Creating meaningful experiences online. Front-end developer & product designer." />
    <meta property="og:image" content="https://mashasupix.com/assets/img/card.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mashasupix.com/about">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <title>Masha Supikhanova | About Me</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <link rel="apple-touch-icon" href="./assets/img/logo.svg" />
</head>
<body>
    
    <?php include 'components/nav.php'; ?>
    
    <main>
        <section class="about-fold1">
            <h2>about me.</h2>
            <div class="grid">
                <div class="about-description col-12 col-7-lg">
                    <h4>Hi, my name is Masha - front-end developer and product designer!👩🏻‍💻</h4>
                    <p>As a developer with design skills I specialize in animated, responsive, and interactive content. By understanding nuances of both sides, I’m able to create most effective and best suitable solutions.</p>
                    <p>Proficient in front-end development UX/UI  and multimedia design and currently enrolled in BCIT's New Media Design & Web Development program to continue exploring new concepts.</p>
                    <div class="contact-info">
                        <ul class="social-links">
                            <li class="inst"><a href="https://www.instagram.com/whossupix/"></a></li>
                            <li class="git"><a href="https://github.com/ssupix"></a></li>
                            <li class="linkdn"><a href="https://www.linkedin.com/in/whossupi/"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="about-images col-12 col-5-lg">
                    <div class="carousel" data-flickity='{ "autoPlay": 5000, "wrapAround": true }'>
                        <div class="carousel-cell"><img src="./assets/img/about.png" alt="Masha Supikhanova"></div>
                        <div class="carousel-cell"><img src="./assets/img/about2.png" alt="Masha Supikhanova"></div>
                        <div class="carousel-cell"><img src="./assets/img/about3.png" alt="ssupix"></div>
                        <div class="carousel-cell"><img src="./assets/img/about4.png" alt="Masha Supikhanova"></div>
                        <div class="carousel-cell"><img src="./assets/img/about5.png" alt="Masha Supikhanova"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="skills">
            <div class="grid">
                <div class="cv col-12 col-7-md" data-custom-open="modal-1">
                    <img src="./assets/img/cv-inplastic.png" alt="Masha's CV Resume in plastic">
                </div>
                <div class="skills-description col-12 col-5-md">
                    <div class="skill-wrap ">
                        <div class="skill-col">
                            <h4 class="design">Design:</h4>
                            <ul>
                                <li><p>Figma</p></li>
                                <li><p>Photoshop</p></li>
                                <li><p>Illustrator</p></li>
                                <li><p>InDesign</p></li>
                                <li><p>AfterEffects</p></li>
                                <li><p>Blender</p></li>
                            </ul>
                        </div>
                        <div class="skill-col">
                            <h4 class="dev">Development:</h4>
                            <ul>
                                <li><p>HTML5</p></li>
                                <li><p>CSS</p></li>
                                <li><p>SASS</p></li>
                                <li><p>Tailwind</p></li>
                                <li><p>JavaScript</p></li>
                            </ul>
                        </div>
                    </div>
                    <a class="button live" onclick="window.location.href='./work'">VIEW WORK</a>
                </div>
            </div>
        </section>
        <section id="insight">
            <h2>insight.</h2>
            <div class="text">
                <h4>Drag and drop</h4>
                <p>One of the main reasons I am in this industry is that it never fails to satisfy my curiosity. I like environments that reward constant flow of ideas and encourage to learn.</p>
                <p>I believe I do my best when I have someone to challenge and question my ideas and expects it back. So, I’m always looking to collaborate and explore new concepts.</p>
                <p>I aspire to bring more meaningful experiences in web spaces, implementing interaction, exclusivity and cutting edge technology.</p>
            </div>
            <div class="drag-item"> <!-- add class .drag-item to make element draggable -->
                <img src="./assets/img/ssupix.png" alt="ssupix">
            </div>
            <div class="drag-item"> <!-- add class .drag-item to make element draggable -->
                <img src="./assets/img/miau.png" alt="Masha's cat">
            </div>
            <div class="drag-item"> <!-- add class .drag-item to make element draggable -->
                <img src="./assets/img/mxmaster.png" alt="Masha's MX Master Logitech">
            </div>
            <div class="drag-item"> <!-- add class .drag-item to make element draggable -->
                <img src="./assets/img/flower.png" alt="flower">
            </div>
            <div class="drag-item"> <!-- add class .drag-item to make element draggable -->
                <img src="./assets/img/teacup.png" alt="tea cup">
            </div>
            <div class="drag-item"> <!-- add class .drag-item to make element draggable -->
                <img src="./assets/img/donut.png" alt="donut render">
            </div>
            <div class="drag-item"> <!-- add class .drag-item to make element draggable -->
                <img src="./assets/img/headphones.png" alt="headphones">
            </div>
        </section>
    </main>

    <div class="cv-modal">
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close data-custom-close="modal-1">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <div class="download"><p href="./assets/mashasupix-cv.pdf">download</p></div>
                <div class="close" data-custom-close="modal-1"><p>close</p></div>
            </header>
            <main class="modal__content" id="modal-1-content">
                <img src="./assets/img/cv.jpg" alt="Masha's CV Resume">
            </main>
            </div>
        </div>
    </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="./js/scroll.js"></script>
    
    <!-- GSAP ANIMATIONS -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="./js/gsap.js"></script>
    <script src="./js/nav.js"></script>

    <script src="./js/vendor/micromodal/micromodal.min.js"></script>
    <script src="./js/modal.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/vendor/Tilt jQuery.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="./js/drag.js"></script>
    <script src="./js/flickity.js"></script>

</body>
</html>