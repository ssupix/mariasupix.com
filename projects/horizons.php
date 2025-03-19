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
    <meta property="og:image" content="https://mariasupix.com/assets/img/horizons/horizons-banner.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mariasupix.com/projects/horizons">


    <title>mariasupix - horizons nasa api</title>
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
                    <h2>horizons - nasa api</h2>
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
                        <p>9 hrs</p>
                    </div>
                    <div class="col-12 col-6-md detail">
                        <h3>Tools</h3>
                        <p>Development - React.js, Tailwind CSS, NASA API <br> Design - Figma</p>
                        <h3>Team</h3>
                        <p>Paul Aries - Front-end developer <br> Nicole Espiritu - Product Designer</p>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-6-lg sp"> 
                        <h2>nasa api.</h2>
                        <p>NASA’s APOD API was integrated using fetch inside useEffect, ensuring images load on mount. The API request retrieves data like titles, dates, and URLs, which are mapped into individual cards. For pagination, a Load More button triggers an additional request, appending new entries to the existing list, allowing users to explore more images dynamically without refreshing.</p>
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
                                <?php include '../components/fetch.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">                           
                            <div  class="select">
                                <span>pagination</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/loadmore.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-7-lg sp"> 
                        <h2>using props.</h2>
                        <p>The Card component was designed to be highly reusable by leveraging props to dynamically display content. Each card receives properties like the title, date, copyright, media type, image URL, and explanation, ensuring flexibility in rendering different types of data. By passing these values as props, the parent Gallery component maintains control over the data while keeping the Card component focused solely on presentation. This structure allows for clean, modular code, making it easy to manage and update the UI without modifying individual cards.</p>
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
                        <div class="code-show">
                            <div class="select">
                                <span>card component</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/component.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span>map</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/map.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="getting-started">
                <div class="grid showcase">
                    <div class="col-12 col-8-lg">
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="450" src="https://embed.figma.com/design/evppmAL4SeM4aVgHyIyjdH/NASA---APOD---V2-Working-File?node-id=205-119&embed-host=share" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-7-md col-4-lg co sp">
                        <div class="text-wrap">
                            <p>Together, we created a brainstorming moodboard, which was shared with the designer to help them craft the mockup. As developers, we had the opportunity to give feedback and contribute to the design iterations. This back-and-forth process really reinforced how valuable it is to have a multidisciplinary team working together—each person focusing on their area of expertise but still contributing to a shared goal. It allowed us to stay engaged with the design while maintaining our focus on the technical aspects.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg ">
                        <q>collaboration is the key to turning ideas into impactful, well-rounded solutions.</q>
                        <p>With constant feedback loops and shared efforts, we were able to refine and improve the project, making it stronger on a short timeline, without feeling like we were working overtime. This project reinforced my passion for development and working with a team to solve real-world problems.</p>
                    </div>
                    <div class="visual col-12 col-8-lg ">
                        <p>On the development side, using React allowed us to break down the application into reusable components, making it easier to maintain. This project solidified my technical skills in React, especially when it came to handling dynamic data from APIs and structuring components with props.</p>
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/horizons-imac-poster.png" title="Horizons Website Showcase">
                            <source src="../assets/video/horizons-imac.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
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