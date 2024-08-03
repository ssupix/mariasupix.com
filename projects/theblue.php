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
    <link rel="canonical" href="https://mashasupix.com/projects/theblue">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <title>Masha Supikhanova | Project: The Blue - Water Website</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <link rel="apple-touch-icon" href="./assets/img/logo.svg" />
</head>
<body>
    
    <?php include '../components/nav-project.php'; ?>

    <main>
        <section class="title">
            <div class="grid">
                <div class="col-12">
                    <h2>the blue - water website</h2>
                </div>
                <div class="col-12">
                    <p>an interactive visual experience designed to raise awareness around water pollution, created as an experiment to explore how far I can take your experience on my websites.</p>
                </div>
            </div>
        </section>
        <div class="project-container">
            <section class="project-banner">
                <video src="../assets/video/dddd.mp4" autoplay muted looped></video>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="s-3 button-wrap">
                        <button class="live">VIEW LIVE</button>
                        <button class="code">VIEW CODE</button>
                    </div>
                </div>
            </section>
            <section class="details">
                <div class="grid">
                    <div class="col-12 col-6-md detail border">
                        <h3>Input</h3>
                        <p>Masha Supikhanova – Creative developer</p>
                        <h3>Contributors</h3>
                        <p>Airrick Dunfield  –  Mentor, front-end developer <br> Jayden Inniss  –  Photographer</p>
                        <h3>Timeframe</h3>
                        <p>Start Date  –  March 27th, 2024 <br> End Date  –  May 17th, 2024</p>
                    </div>
                    <div class="col-12 col-6-md detail">
                        <h3>Total Hours</h3>
                        <p>36</p>
                        <h3>Design Tools</h3>
                        <p>Photoshop, <br> Figma</p>
                        <h3>Developer Stack</h3>
                        <p>HTML, CSS, <br> JavaScript, jquery</p>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-md ">
                        <q>My very personal thoughts and concerns, interpreted for a good cause, though art online.</q>
                        <p>I want to inspire hope and motivate action to combat the issue, by showcasing the beauty of water through interactive elements.</p>
                    </div>
                    <div class="visual col-12 col-8-md ">
                        <p>This site was made as a term project for BCIT’s Web Scripting 1 course, as a part of the New Media Design & Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                        <video src="../assets/video/sss.mp4" autoplay muted loop></video>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-7-lg sp"> 
                        <h2>using gsap.</h2>
                        <p>This website has interesting interactions and animation, that were made using GSAP.</p>
                        <p>I found out that GSAP is great at handling wide variety or animation with minimum code. By adding CDN link and a couple of additional HTML classes you get all control you need for quick and easy animating.</p>
                    </div>
                    <div class="col-12">
                        <div class="code-show">
                            <h4>code snipets:</h4>
                            <div class="select">
                                <span class="selected">drag and drop</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/dragdrop.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span class="selected">scroll trigger</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/scrolltrigger.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span class="selected">running line</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/scrolltrigger.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-6-lg si">
                        <img src="../assets/img/npminstall.png" alt="Installing Plugins with NPM">
                    </div>
                    <div class="col-12 col-6-lg sp"> 
                        <h2>npm install.</h2>
                        <p>Other than GSAP I explored other possibilities with Node Package Manager, used through VS Code Terminal.</p>
                        <p>To begin, I initialized my project with npm, creating a package.json file to manage project dependencies and scripts. I installed these packages using the following command: npm install “library”. </p>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-6-lg sp"> 
                        <h2>scroll reveal.</h2>
                        <p>One noteworthy find was the AOS (Animate On Scroll) library, which provides a minimalist approach to animating sections upon scroll. This library stood out due to its ease of use and minimal code requirements, making it an excellent choice for enhancing the user experience in my project.</p>
                    </div>
                    <div class="col-12 col-6-lg sp">
                        <video src="../assets/video/scroll.mp4" autoplay muted loop></video>
                    </div>
                    <div class="col-12">
                        <h4>code snipets:</h4>
                        <div class="code-show">
                            <div class="select">
                                <span class="selected">scroll reveal</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/scrollreveal.php'; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-7-sm">
                        <p>During development I turned my “I don’t know how to make it” into “Let me see if can make it” in a span of two weeks. I explored a lot of YouTube tutorials, Code Pen demos, even opened a paper book
                            and read through a lot of documentation. It really got me thinking how sharing and caring dev community is, because the amount of free
                            knowledge I received is borderline illegal.</p>
                    </div>
                </div>
                <div class="grid showcase">
                    <div class="col-12 col-8-lg">
                        <img src="../assets/img/3js.png" alt="3js demo">
                    </div>
                    <div class="col-12 col-7-md col-4-lg co sp">
                        <div class="text-wrap">
                            <p>One of the biggest challenges I took on was implementing 3D scene, using Three.js Library. </p>
                            <p>But with help of caring dev community online I was able to add this simple, but such effective water model.</p>
                        </div>
                        <p>Accompanied by SoundCloud API widget, with custom water songs playlist.</p>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-md">
                        <q>It turned out to be concrete evidence of my ability to think and learn on my feet</q>
                        <p>I dedicate a lot of time to understanding the project's purpose and secondary goals. I prefer working on something intriguing that I truly care about. I didn't want to create anything commercial; instead, I wanted to show my unique style.</p>
                    </div>
                    <div class="visual col-12 col-8-md">
                        <p>TheBlue showed me how far I’ve come in my web development journey and how
                            much more is out there to know, experience and learn. It also taught me about the importance of tidy and neat code structure, which is vital when you mix and extend functionality of your site in such ways, implementing different libraries, making it unique and memorable.</p>
                        <img src="../assets/img/water.png" alt="Water">
                    </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="s-3 button-wrap">
                        <button class="live">VIEW LIVE</button>
                        <button class="code">VIEW CODE</button>
                    </div>
                </div>
            </section>
        </div>

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