<?php
$tutorials = [
    [
        'title' => 'Introduction to Python',
        'description' => 'This tutorial provides a basic introduction to Python programming language.',
        'link' => 'https://www.learnpython.org/',
    ],
    [
        'title' => 'Introduction to Java',
        'description' => 'This tutorial provides a basic introduction to Java programming language.',
        'link' => 'https://www.learnjavaonline.org/',
    ],
    [
        'title' => 'Web Development 101',
        'description' => 'This tutorial covers the basics of HTML, CSS, and JavaScript, the three core technologies of web development.',
        'link' => 'https://www.theodinproject.com/courses/web-development-101',
    ],
    [
        'title' => 'Data Structures and Algorithms',
        'description' => 'This tutorial provides an introduction to data structures and algorithms, including their design, analysis, and implementation.',
        'link' => 'https://www.coursera.org/specializations/data-structures-algorithms',
    ],
    [
        'title' => 'Introduction to Machine Learning',
        'description' => 'This tutorial provides a comprehensive introduction to the field of machine learning, including supervised learning, unsupervised learning, and best practices in machine learning.',
        'link' => 'https://www.coursera.org/learn/machine-learning',
    ],
    [
        'title' => 'Introduction to Databases',
        'description' => 'This tutorial provides a comprehensive introduction to databases, including relational databases, SQL, database design, and database administration.',
        'link' => 'https://www.coursera.org/specializations/introduction-databases',
    ],
    [
        'title' => 'Introduction to Computer Networks',
        'description' => 'This tutorial provides a comprehensive introduction to computer networks, including the principles of network architecture, network protocols, and network management.',
        'link' => 'https://www.coursera.org/specializations/computer-networking',
    ],
    [
        'title' => 'Object Oriented Programming with Java',
        'description' => 'This tutorial provides a comprehensive introduction to object-oriented programming with Java, including classes, objects, inheritance, and polymorphism.',
        'link' => 'https://www.codecademy.com/learn/learn-java',
    ],
    [
        'title' => 'Advanced OOP using C++',
        'description' => 'This tutorial provides an advanced guide to object-oriented programming with C++, including templates, exceptions, and STL.',
        'link' => 'https://www.learncpp.com/',
    ],
    [
        'title' => 'System Programming',
        'description' => 'This tutorial provides a comprehensive introduction to system programming, including process management, threads, and interprocess communication.',
        'link' => 'https://www.coursera.org/learn/system-programming',
    ],
    [
        'title' => 'Database Management Systems',
        'description' => 'This tutorial provides a comprehensive introduction to database management systems, including SQL, database design, and data modeling.',
        'link' => 'https://www.coursera.org/specializations/database-management',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../scripts/header.js"></script>
    <title>CSHub - Tutorials</title>
</head>

<body>
    <script src="../scripts/navbar.js"></script>
    <div class="container title tutorial-search" id="tutorials">
        <h3>CS Hub's <span>Tutorials</span></h3>
        <div class="tutorial-container">
            <input type="text" id="search" placeholder="&#128269; Search for tutorials..." />
            <ul id="tutorials-list">
                <?php foreach($tutorials as $tutorial): ?>
                    <li>
                        <h2>
                            <?php echo htmlspecialchars($tutorial['title']); ?>
                        </h2>
                        <p>
                            <?php echo htmlspecialchars($tutorial['description']); ?>
                        </p>
                        <a href="<?php echo htmlspecialchars($tutorial['link']); ?>" target="_blank">Go to tutorial</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="separated"></div>
        <div class="back-to-top">
            <a href="#tutorials">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-up-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="16 12 12 8 8 12"></polyline>
                    <line x1="12" y1="16" x2="12" y2="8"></line>
                </svg>
                Back to Top
            </a>
        </div>
    </div>
    <script src="../scripts/footer.js"></script>
</body>

</html>
