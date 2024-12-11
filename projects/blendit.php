<!DOCTYPE html>
<html lang="en" class="lenis">
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
    <meta name="description" content="Project: Blendit - Online Ordering. Built with React.js and Tailwind CSS, this interactive platform offers a fully customizable experience, empowering users to create their perfect smoothie bowl blend with ease and creativity." >
    <meta name="keywords" content="Maria Supikhanova, Web Developer, UX/UI Designer, Vancouver, Blendit, Online Ordering, Smoothie Bowl Customization, UI Design, Figma Prototyping, Interactive Web Development, Front-End Development, React.js, Tailwind CSS, Responsive Design, Customizable User Experience, Digital Storytelling, Agile Development, Collaborative Design, Component-Based Design, Modern Web Development, Interactive Design, Portfolio Project">
    <meta property="og:url" content="https://mariasupix.com/projects/blendit" />
    <meta property="og:title" content="mariasupix - Blendit Online Ordering Platform" />
    <meta property="og:description" content="Explore Blendit — a fully interactive, customizable online smoothie bowl ordering experience built with React.js and Tailwind CSS. Discover how UI design, agile development, and modern web technologies come together in this dynamic project." />
    <meta property="og:image" content="https://mariasupix.com/assets/img/blendit/blendit-banner.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mariasupix.com/projects/blendit">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <title>mariasupix - blend it</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.svg">
    <link rel="apple-touch-icon" href="../assets/img/logo.svg" />
</head>
<body>
    
    <?php include '../components/nav-project.php'; ?>

    <div id="cursor-follower">
        <span class="cursor-text"></span>
    </div>

    <main class="ezt">
    <section class="title">
            <div class="grid">
                <div class="col-12">
                    <h2>blend it</h2>
                </div>
                <div class="col-12">
                    <div class="tags">
                        <div class="pill-blue">react.js</div>
                        <div class="pill-blue">tailwind css</div>
                        <div class="pill-pink">branding</div>
                        <div class="pill-pink">Figma</div>
                        <div class="pill-pink">ui design</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="project-container">
            <section class="project-banner">
                <img src="../assets/img/blendit/blendit-banner.png" alt="Project Banner">
            </section>
            <section class="description">
                <div class="grid">
                <div class="col-12">
                    <h4>Using React.js and Tailwind CSS, our team wants to develop an online ordering with a uniquely interactive and fully customizable experience, empowering customers to create their perfect smoothie bowl blend.</h4>
                </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="col-12 button-wrap">
                        <a class="button live context" data-tippy-content="Comming soon!" href="#" target="blank_">view live</a>
                        <a class="button code" href="https://github.com/christianyipper/blendit" target="blank_">view code</a>
                    </div>
                </div>
            </section>
            <section class="details">
                <div class="grid">
                    <div class="col-12 col-6-md detail border">
                        <h3>Input</h3>
                        <p>Masha Supikhanova – Web Developer</p>
                        <h3>Total Hours</h3>
                        <p>25</p>
                    </div>
                    <div class="col-12 col-6-md detail">
                        <h3>Tools</h3>
                        <p>Figma - Branding and Prototype Development <br> React.js, Tailwind CSS, StepWizard - Technologies</p>
                        <h3>Team</h3>
                        <p>Paul Aries - Web Developer <br> Christian Yip - Web Developer</p>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-8-lg sp"> 
                        <h2>intro.</h2>
                        <p>This is the first big project in <span class="context" data-tippy-content="Components based js framework">React.js</span> that me and my team have ever built. <span class="context" data-tippy-content="Teammate"><a href="https://paularies.ca/" target="_blank">Paul</a></span>, <span class="context" data-tippy-content="Teammate"><a href="https://yipper.ca/" target="_blank">Christian</a></span> and I found ourselves constantly inspired by each other's work and decided to unite our efforts and create Blend It. We were willing to dedicate our personal time to create something truly unique, you should see for yourself.</p>
                    </div>
                    <div class="col-12 col-8-lg outline">
                        <img src="../assets/img/blendit/sprints.png" alt="Team Notion">
                    </div>
                    <div class="col-12 col-7-md col-4-lg co sp">
                        <div class="text-wrap">
                            <p>We approached the project with full collaboration with <span class="context" data-tippy-content="My preferred">agile</span> style aproach, ensuring the end result was executed to the best of our abilities while holding each other accountable. We used <span class="context" data-tippy-content="PM tool" ><a href="https://www.notion.com/" target="_blank">Notion</a></span> as our project management platform—breaking down sprints, assigning tasks, defining deadlines and storing all resources in one place. When <span class="context" data-tippy-content="Communication tool"><a href="https://discord.com/" target="_blank">Discord</a></span> served as our communication software of choice.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg ">
                        <q>to start we held our first in-person meeting, where the name Blend it and the initial moodboards were born</q>
                        <p>After that I started creating color palette and gathering imagery, while Paul took change of our logo and Christian went in depth about our brandʼs story. Together we collaborated on creating fruit graphics from vectors in Figma resulting 11 original items we started with.</p>
                        </p>
                    </div>
                    <div class="visual col-12 col-8-lg ">
                        <p>With the colors, my goal was to convey boldness, freshness, and quality. They're not far from the original primary colors, which in my opinion works great when you're selling or promoting such natural and unprocessed products as fruit smoothies.</p>
                        <img src="../assets/img/blendit/style.png" alt="Style Tile">
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-8-lg sp"> 
                        <h2>prototyping.</h2>
                        <p>Website design began with <span class="context" data-tippy-content="Rough designs">wireframe</span> creation. This approach allowed us to quickly transfer ideas from our heads onto <span class="context" data-tippy-content="Design software">Figma</span> frames and iterate as needed. Once we agreed on the layout and functionality, we moved to the <span class="context" data-tippy-content="Animated functionality">prototyping</span> phase. The design started to gain colors, text copy, and interactions.</p>
                    </div>
                    <div class="col-12">
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="650" src="https://embed.figma.com/design/n46g89f4LddbEyRYoipnUt/Blend-It.-Mockups?node-id=0-1&embed-host=share" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-8-lg">
                        <video loop muted autoplay playsinline loading="lazy" style="width: 100%;">
                            <source src="../assets/video/figmablendit.mp4">
                        </video>
                    </div>
                    <div class="col-12 col-7-md col-4-lg co sp">
                        <div class="text-wrap">
                            <p>Our goal was to recreate as much functionality as the real website should have. This approach made our development process clear, seamless, and straightforward for every team member, regardless of which section they were working on.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid showcase">
                    <div class="col-12"><h2>development.</h2></div>
                    <div class="col-12 col-7-lg sp"> 
                        <p>To kickstart development, we created a shared <span class="context" data-tippy-content="Version control tool"><a href="https://github.com/" target="_blank">GitHub</a></span> repository and set up individual branches for each team member to prevent code conflicts. Since we're using Tailwind CSS for styling, we also created a <span class="context" data-tippy-content="Configuration file">tailwind.config.js</span> file to define our brand colors and fonts from the style tile, ensuring consistency throughout the project.</p>
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
                        <div class="code-show">
                            <div class="select">
                                <span>tailwind.config.js</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/tailwind.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-6-lg sp"> 
                        <p>This website was developed with a <span class="context" data-tippy-content="small to big">mobile-first</span> approach. This is my first time doing so, and now I totally understand why it works. It prioritizes essential content and functionality for smaller screens, leading to a more focused user experience. Also, adding breakpoints from smaller to larger screens makes more sense and creates a much smoother process.</p>
                    </div>
                    <div class="col-12 col-6-lg sp">
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/blendit-mobile-poster.png" title="Blend It Showcase">
                            <source src="../assets/video/blendit-mobile.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12">
                        <h2>carousel.</h2>
                    </div>
                    <div class="col-12 col-6-lg sp">
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/carousel-poster.png" title=" Blend It Showcase">
                            <source src="../assets/video/carousel.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-6-lg sp"> 
                        <p>Hero sction features a smoothie bowl carousel. Each bowl is placed along the circumference of an invisible circle using trigonometric calculations to determine its x and y coordinates. The bowls are evenly spaced by calculating an angle based on the total number of bowls, and each bowl is positioned with translate and rotate transforms to maintain alignment as the carousel rotates. The central background circle, which changes color based on the selected bowl, is absolutely centered with transforms to keep it responsive.</p>
                    </div>
                    <div class="col-12 col-8-lg"> 
                        <p>Each smoothie bowl has its own color scheme defined in an array of objects, with properties for background, fill, and text colors. When a bowl is selected, the selectedBowl state is updated, triggering a useEffect hook to apply the corresponding color scheme to the page so it matches the selcted bowl.</p>
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
                        <div class="code-show">
                            <div class="select">
                                <span>color scheme</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/colors.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span>carousel</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/carousel.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-8-lg sp"> 
                        <h2>bowl builder.</h2>
                        <p>To start of the process I created a <span class="context" data-tippy-content="Data structure">JSON</span> file to serve as the data structure for a smoothie bowl builder process. The file contains a steps array for each step on the way, "Choose Your Base," "Add Your Fruits," "Choose Your Toppingsˮ, structured as an object with an id , a title , and an ingredients array. Each ingredient object includes id , name , icon , and image properties, where image provides a visual asset that can be animated onto the bowl once selected. This step streamlined the process for managing and updating bowl components, allowing us to add or modify ingredients without changing the core code or hard-coding options into each component. Next, I passed the file to the team who will use it to implement step-by-step functionality through a step wizard and style sections.</p>
                    </div>
                    <div class="col-12">
                        <h4>code snippets:</h4>
                        <div class="code-show">
                            <div class="select">
                                <span>ingredient data</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/fruity.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg">
                        <q>overall it sparked my creativity and made me eager to collaborate more in my next projects</q>
                        <p>Canʼt discredit good time management, constant communication and effective project managment workflow that helped us stay on track and achive wonderfull results as well.</p>
                    </div>
                    <div class="visual col-12 col-8-lg">
                        <p>Blend it wasnʼt just a new development experience for me, learning React.js and Tailwind CSS, it was an exellent example how a good team can help you grow tramendously and make it fun in the process. We werenʼt afraid to try new things and take risks, thatʼs why the result is so rewarding! Canʼt discredit good time managment, constant communication and effective project managment workflow that helped us stay on track and achive wonderfull results as well.</p>
                        <video loop muted autoplay playsinline loading="lazy" poster="../assets/img/posters/blendit-poster.png" title="Blend It Showcase">
                            <source src="../assets/video/imac-blendit.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="col-12 button-wrap">
                        <a class="button live context" data-tippy-content="Comming soon!" href="#" target="blank_">view live</a>
                        <a class="button code" href="https://github.com/christianyipper/blendit" target="blank_">view code</a>
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
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./workflow';">
                                <div class="cover">
                                    <video src="../assets/video/workflow.mp4" loop muted autoplay playsinline loading="lazy"></video>
                                </div>
                                <h4>workflow - promotional landing</h4>
                                <div class="tags">
                                    <div class="pill-blue">html</div>
                                    <div class="pill-blue">scss</div>
                                    <div class="pill-blue">javascript</div>
                                    <div class="pill-blue">local storage</div>
                                    <div class="pill-pink">ui design</div>
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
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./workflow';">
                                <div class="cover">
                                    <video src="../assets/video/workflow.mp4" loop muted autoplay playsinline loading="lazy"></video>
                                </div>
                                <h4>workflow - promotional landing</h4>
                                <div class="tags">
                                    <div class="pill-blue">html</div>
                                    <div class="pill-blue">scss</div>
                                    <div class="pill-blue">javascript</div>
                                    <div class="pill-blue">local storage</div>
                                    <div class="pill-pink">ui design</div>
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