<?php
$newsItems = [
    [
        'imgSrc' => './assets/img/winhacks.jpg',
        'imgAlt' => 'News 1',
        'title' => 'WinHacks 2024',
        'description' => 'The biggest Hackathon event in Windsor is returning for 2024.',
    ],
    [
        'imgSrc' => './assets/img/jlp.jpg',
        'imgAlt' => 'News 2',
        'title' => 'Team JavaLoungePresidents wins NASA Space Apps 2023.',
        'description' => 'The team of 4 students from the University of Windsor won the NASA Space Apps 2023 Hackathon.',
    ],
    [
        'imgSrc' => './assets/img/fair.jpg',
        'imgAlt' => 'News 3',
        'title' => 'CompSci Fair',
        'description' => 'The quarterly CompSci Fair is set to launch careers.',
    ],
    [
        'imgSrc' => './assets/img/award.jpg',
        'imgAlt' => 'News 4',
        'title' => 'Applications still open for undergrad awards.',
        'description' => 'The Student Awards and Financial Aid office invites students to revisit their Award Profiles.',
    ],
    [
        'imgSrc' => './assets/img/crafts.jpg',
        'imgAlt' => 'News 5',
        'title' => 'CSS Crafts Night',
        'description' => 'The Literary Youth Society invites CS students to find their place at a crafting session Monday.',
    ],
    [
        'imgSrc' => './assets/img/winter.jpg',
        'imgAlt' => 'News 6',
        'title' => 'Midwinter Celebration',
        'description' => 'The Windsor University Faculty Association\'s winter solstice celebration',
    ],
    [
        'imgSrc' => './assets/img/gdsc.jpg',
        'imgAlt' => 'News 7',
        'title' => 'GDSC Delegate Applications',
        'description' => 'The Google Developer Student Club is looking for delegates to represent the University of Windsor.',
    ],
    [
        'imgSrc' => './assets/img/csgames.jpg',
        'imgAlt' => 'News 8',
        'title' => 'CS Games 2024',
        'description' => 'Registrations for CS Games 2024 are now open.',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./app.js"></script>
    <link rel="stylesheet" href="./styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
    <title>The Computer Science Hub</title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-elements">
                <a href="#home" class="logo">CS<span>Hub</span>.</a>
                <ul class="nav-links">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="./pages/courses.php">Courses</a></li>
                    <li><a href="./pages/tutorials.php">Tutorials</a></li>
                    <li><a href="./pages/resources.php">Resources</a></li>
                    <li class="mobile-contact">
                        <a href="./pages/contact.php">Contact</a>
                    </li>
                </ul>
                <a href="./pages/contact.php" class="cta">Contact</a>
            </div>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="close">X</div>
        </div>
    </nav>
    <div class="container">
        <section id="home" class="hero">
            <div class="hero-container">
                <div class="hero-image">
                    <img src="./assets/hero.svg" alt="CSHub hero section art." />
                </div>
                <div class="hero-text">
                    <h1>The Computer Science <span>Hub</span>.</h1>
                    <p>
                        Your <span>one-stop</span> resource for all things related to your
                        Computer Science coursework. Elevate your learning with
                        meticulously curated courses, comprehensive tutorials, and a
                        secure resource repository.
                    </p>
                </div>
                <a href="#news" class="scroll-down">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-arrow-down-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="8 12 12 16 16 12"></polyline>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                    </svg>
                </a>
            </div>
        </section>
        <section class="news" id="news">
            <div class="news-container">
                <div class="title">
                    <h3>Latest <span>News</span></h3>
                </div>
                <div class="news-gallery">
                    <?php foreach($newsItems as $newsItem): ?>
                        <article>
                            <img src="<?php echo htmlspecialchars($newsItem['imgSrc']); ?>"
                                alt="<?php echo htmlspecialchars($newsItem['imgAlt']); ?>" />
                            <h3>
                                <?php echo htmlspecialchars($newsItem['title']); ?>
                            </h3>
                            <p>
                                <?php echo htmlspecialchars($newsItem['description']); ?>
                            </p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
    <div class="back-to-top">
        <a href="#home">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="16 12 12 8 8 12"></polyline>
                <line x1="12" y1="16" x2="12" y2="8"></line>
            </svg>
            Back to Top
        </a>
    </div>
    <footer>
        <div class="footer-container">
            <p>&copy; 2023-2024 Computer Science Hub. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
