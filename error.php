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
    
    <!-- Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Metadata --><meta property="og:title" content="error page - 404" />
    <meta property="og:description" content="i'm sorry, but the page you're looking for doesn't exist." />

    <title>error - 404</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <link rel="apple-touch-icon" href="./assets/img/logo.svg" />
</head>
<body>
    
    <?php include 'components/nav.php'; ?>

    <div id="cursor-follower">
        <span class="cursor-text"></span>
    </div>
    
    <main>
        <section class="error">
            <div class="grid error-box">
                <div class="col-12">
                    <h1>404</h1>
                </div>
                <div class="col-6 image">
                    <img src="./assets/img/miaupixels.png" alt="Cat with pixels">
                    <img class="pixel-overlay" src="./assets/img/miau.png" alt="Cat">
                </div>
                <div class="col-6 message">
                    <div class="text">
                        <h2>ohhhh, now that's awkward...</h2>
                        <p>It’s not you, it’s me. I might have moved around some pages around or maybe this one never even existed. Who knows?</p>
                        <p>Let’s get you back home and pretend this never happened. Peace!</p>
                    </div>
                    <a class="button live" href="./">BACK HOME</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="./dist/vendors.js"></script>
    <script src="./dist/global.js"></script>
    
</body>
</html>