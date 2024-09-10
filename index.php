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

    <!-- Metadata -->
    <meta name="description" content="Masha Supikhanova. Front-end developer & product designer, based in Vancouver, BC. Creating meaningful experiences online. As a developer with design skills I specialize in animated, responsive, and interactive content." ">
    <meta name="keywords" content="Masha Supikhanova, Web Developer, Portfolio, Front-end Developer, Product Designer, Vancouver, work, experience, branding">
    <meta property="og:url" content="https://mashasupix.com/" />
    <meta property="og:title" content="Masha Supikhanova | Digital Developer Portfolio" />
    <meta property="og:description" content="Creating meaningful experiences online. Front-end developer & product designer." />
    <meta property="og:image" content="https://mashasupix.com/assets/img/card.png" />
    <meta property="og:type" content="website" />

    <?php include 'components/schemametadata.php'; ?>

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mashasupix.com/">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <title>maria supikhanova - developer portfolio</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/about1.png">
    <link rel="apple-touch-icon" href="./assets/img/logo.svg" />
</head>
<body>

    <?php include 'components/nav.php'; ?>
    
    <main>
        <section class="hero">
            <h1>Maria Supikhanova <span class="inter" id="scrambleText">front-end developer & web designer</span></h1>
            <div class="logo-spinner">
                <svg width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M155.302 221.242c-.65-7.726-2.409-18.547 2.701-25.657 5.006-7.044 15.683-6.01 17.729 1.935 2.439 9.031-2.627 18.834-4.501 27.838-1.156 5.412-2.125 10.675-.798 15.564.691 2.948 3.564 5.082 6.537 3.293 4.414-2.473 7.894-10.566 13.608-12.267 2.944-1.094 6.098.096 7.197 2.891 2.843 8.036-3.85 17.698-6.177 25.754-2.725 7.925-3.034 17.394-3.519 26.149-.257 5.418-.461 11.019-.299 16.209.719 10.884 1.04 22.032-7.012 31.266-6.808 8.606-18.601 7.4-20.991-2.909-1.583-6.287 1.519-13.893 4.717-20.049 3.799-7.806 8.283-15.136 10.42-23.472 1.085-3.983-.036-10.034-5.201-8.555-4.728 1.455-8.833 7.512-14.039 8.546-2.867.543-5.352-.956-6.554-3.273-1.794-3.382-.791-7.862.256-11.86 1.608-6.093 3.624-12.339 4.916-18.477 2.263-10.97 1.85-21.922 1.02-32.814l-.015-.168.005.056Z" fill="url(#a)"/><path d="M124.567 158.87c7.112-2.989 16.792-7.986 25.108-5.271 8.216 2.633 10.559 13.144 3.67 17.528-7.773 5.076-18.614 3.242-27.722 4.21-5.478.552-10.758 1.233-14.969 3.985-2.572 1.567-3.708 4.951-1.091 7.245 3.713 3.461 12.43 4.297 15.817 9.243 1.944 2.468 1.813 5.848-.503 7.76-6.723 5.16-17.935 1.742-26.274 1.974-8.34-.19-17.387 2.428-25.838 4.64-5.194 1.409-10.563 2.927-15.429 4.654-10.07 4.003-20.505 7.709-31.758 2.859-10.248-3.858-12.77-15.493-3.764-20.924 5.45-3.439 13.61-2.79 20.422-1.627 8.57 1.237 16.898 3.288 25.434 2.78 4.098-.183 9.485-3.101 6.478-7.586-2.84-4.077-9.848-6.142-12.445-10.812-1.412-2.555-.765-5.395 1.052-7.259 2.648-2.753 7.191-3.143 11.284-3.381 6.264-.313 12.8-.321 18.997-.941 11.079-1.189 21.305-4.931 31.348-9.042l.142-.068.041.033Z" fill="url(#b)"/><path d="M174.073 109.663c5.011 5.819 12.739 13.463 12.688 22.257-.008 8.658-9.299 14.228-15.597 9.057-7.224-5.79-8.775-16.723-12.469-25.077-2.187-5.049-4.444-9.867-8.373-12.992-2.288-1.961-5.853-1.968-7.234 1.264-2.156 4.632-.305 13.222-3.998 18.003-1.768 2.636-5.025 3.568-7.556 1.968-6.981-4.769-7.132-16.528-9.914-24.411-2.368-7.998-7.619-15.81-12.309-23.152-2.931-4.51-6.002-9.137-9.151-13.215-6.887-8.323-13.612-17.092-12.423-29.354.547-11.007 10.88-17.088 18.812-10.229 4.944 4.109 6.811 12.081 7.781 18.946 1.423 8.557 2.035 17.137 5.104 25.122 1.43 3.854 5.864 8.05 9.198 3.77 3.027-3.99 2.845-11.324 6.504-15.281 2.016-2.156 4.908-2.437 7.248-1.303 3.422 1.645 5.197 5.838 6.663 9.688 2.225 5.867 4.207 12.092 6.696 17.802 4.51 10.178 11.197 18.745 18.207 27l.103.12.02.017Z" fill="url(#c)"/><path d="M235.724 142.38c-3.953 6.625-8.795 16.411-17.075 19.096-8.168 2.693-16.26-4.514-13.327-12.158 3.256-8.737 13.07-13.62 19.826-19.754 4.08-3.675 7.938-7.347 9.68-12.08 1.146-2.794.049-6.228-3.424-6.561-5.036-.629-12.56 3.809-18.209 1.767-3.024-.88-4.917-3.714-4.19-6.635 2.346-8.183 13.409-11.977 19.981-17.105 6.809-4.76 12.552-12.23 18.045-19.004 3.345-4.218 6.766-8.611 9.66-12.898 5.729-9.2 11.941-18.392 23.851-21.039 10.537-2.886 19.442 5.118 15.41 14.862-2.362 6.023-9.291 10.292-15.482 13.352-7.636 4.039-15.53 7.283-22.111 12.71-3.184 2.563-5.793 8.126-.733 10 4.687 1.651 11.547-.785 16.402 1.483 2.654 1.27 3.81 3.952 3.441 6.54-.496 3.812-3.917 6.808-7.08 9.407-4.849 3.954-10.097 7.799-14.722 11.974-8.201 7.503-14.221 16.564-19.867 25.868l-.08.138.004.037Z" fill="url(#d)"/><path d="M223.707 211.4c-7.507-1.706-18.276-3.287-23.382-10.339-5.057-6.927-.722-16.835 7.446-16.41 9.28.392 16.951 8.216 24.853 12.748 4.74 2.746 9.404 5.277 14.445 5.481 3.016.231 5.925-1.875 5.18-5.259-.95-4.971-7.482-10.761-7.28-16.747-.091-3.15 2.004-5.806 5.016-6.019 8.491-.29 15.503 9.038 22.376 13.705 6.625 5.005 15.478 8.172 23.581 11.281 5.031 1.887 10.249 3.774 15.218 5.204 10.511 2.603 21.122 5.677 27.314 16.173 5.989 9.129 1.118 20.067-9.376 19.236-6.434-.386-12.638-5.653-17.453-10.589-6.18-6.008-11.682-12.523-18.88-17.086-3.409-2.243-9.487-2.996-9.727 2.384-.128 4.982 4.298 10.731 3.624 16.042-.38 2.9-2.598 4.828-5.158 5.294-3.767.69-7.666-1.618-11.111-3.84-5.247-3.399-10.514-7.203-15.883-10.313-9.647-5.493-20.113-8.415-30.669-10.903l-.153-.041.019-.002Z" fill="url(#e)"/><defs><radialGradient id="a" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(6.76352 74.07075 -26.86981 2.45353 173.79 264.887)"><stop stop-color="#E36A98"/><stop offset="1" stop-color="#97A0C4"/></radialGradient><radialGradient id="b" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(2.65667 28.38806 -71.93787 6.73224 87.022 186.772)"><stop stop-color="#E36A98"/><stop offset="1" stop-color="#97A0C4"/></radialGradient><radialGradient id="c" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(5.96953 64.26665 -44.87383 4.1682 136.939 82.021)"><stop stop-color="#E36A98"/><stop offset="1" stop-color="#97A0C4"/></radialGradient><radialGradient id="d" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(84.675 71.248 186.936) scale(59.7162 50.8969)"><stop stop-color="#E36A98"/><stop offset="1" stop-color="#97A0C4"/></radialGradient><radialGradient id="e" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(84.646 19.58 252.754) scale(36.5006 69.5661)"><stop stop-color="#E36A98"/><stop offset="1" stop-color="#97A0C4"/></radialGradient></defs></svg>
            </div>
        </section>
        <section class="banner">
            <p class="intro">Creating meaningful experiences online. </br> Maria supikhanova</p>
            <div class="banner-row">
                <div class="grid">
                    <div class="col-12 col-3-lg banner-left-text">
                        <p>Based in Vancouver, BC</p>
                        <!-- <button class="code">Learn more</button> -->
                    </div>
                    <div class="banner-image s-1 col-6-lg">
                        <img src="./assets/img/banner.png" alt="Masha Supikhanova">
                    </div>
                    <div class="banner-right-text col-12 col-3-lg">
                        <p>[2024]</p>
                        <a href="./work" class="important">open to work</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-project">
            <h2>featured project.</h2>
            <div class="grid">
                <div class="project-description col-12 col-6-lg">
                    <h3>The blue - water website</h3>
                    <div class="text">
                        <p>An interactive visual experience designed to raise awareness around water pollution, created as an experiment to explore how far I can take your experience on my websites.</p>
                        <p>Experimental website, created to see how I can extend functionality and interactivity of my work using different JavaScript plugins, Libraries or Frameworks. On this site you can see anything from basic effects like parallax and background videos, made with jQuery plugins to more complex animation and interactions using GSAP, Three.js and other. TheBlue showed me how far I’ve come in my web development journey and how much more is out there to know, experience and learn.</p>
                    </div>
                    <a href="./projects/theblue">learn more</a>
                </div>
                <div class="project-video col-12 col-6-lg">
                    <video loop muted autoplay poster="./assets/img/waterwebsite-poster.jpg" title="The Blue Website Showcase">
                        <source src="./assets/video/waterwebsite.mp4" type="video/mp4">
                        <source src="./assets/video/waterwebsite.webm" type="video/webm">
                        <source src="./assets/video/waterwebsite.ogv" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
        <section class="home-projects">
            <div class="grid">
                <div class="col-12 col-6-lg left">
                    <div class="grid">
                        <div class="card small col-12 col-6-sm" onclick="window.location.href='./projects/meowdy';">
                            <div class="cover">
                                <img src="./assets/img/meowdy-mockup.jpg" alt="Meowdy Box Mockup">
                            </div>
                            <h4>meowdy! Cat surprise boxes</h4>
                            <div class="tags">
                                <div class="pill-pink">branding</div>
                                <div class="pill-pink">Photoshop</div>
                                <div class="pill-pink">Packaging</div>
                            </div>
                        </div>
                        <div class="card small col-12 col-6-sm" onclick="window.location.href='./projects/kabinet';">
                            <div class="cover">
                                <img src="./assets/img/kabinet-mockup.jpg" alt="Kabinet Nails Branding Mockup">
                            </div>
                            <h4>kabinet nails</h4>
                            <div class="tags">
                                <div class="pill-pink">Branding</div>
                                <div class="pill-pink">Illustrator</div>
                                <div class="pill-pink">Blender</div>
                            </div>
                        </div>
                    </div>
                    <a href="./work" class="desktop-link">more projects</a>
                </div>
                <div class="col-12 col-6-lg ">
                    <div class="card" onclick="window.location.href='./projects/ezt';">
                        <div class="cover">
                            <video autoplay muted loop poster="./assets/img/ezt-poster.jpg" title="EZT Prototype Mockup">
                                <source src="./assets/video/ezt-mockup.mp4" type="video/mp4">
                                <source src="./assets/video/ezt-mockup.webm" type="video/webm">
                                <source src="./assets/video/ezt-mockup.ogv" type="video/ogg">
                                Your browser does not support the video tag.
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
                </div>
                <a href="./work" class="col-12 breakpoint-link">more projects</a>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <!-- GSAP ANIMATIONS -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="./js/gsap.js"></script>
    <script src="./js/nav.js"></script>
    
    <script src="./js/scroll.js"></script>
    <script src="./js/scramble.js"></script>
    
</body>
</html>