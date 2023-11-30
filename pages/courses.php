<?php
$courses = [
    [
        'name' => 'COMP-1400 Intro to Algorithms I',
        'instructor' => 'Dr. Saeed Samet',
        'schedule' => 'Mon, Wed, Fri - 10:00 AM to 11:00 AM',
    ],
    [
        'name' => 'COMP-1410 Intro to Algorithms II',
        'instructor' => 'Dr. Saeed Samet',
        'schedule' => 'Mon, Wed, Fri - 10:00 AM to 11:00 AM',
    ],
    [
        'name' => 'COMP-2120 Object Oriented Programming with Java',
        'instructor' => 'Peter Zoura',
        'schedule' => 'Mon, Wed, Fri - 10:00 AM to 11:00 AM',
    ],
    [
        'name' => 'COMP-3400 Advanced OOP using C++',
        'instructor' => 'Dr. Mike Williams',
        'schedule' => 'Mon, Wed, Fri - 10:00 AM to 11:00 AM',
    ],
    [
        'name' => 'COMP-2460 System Programming',
        'instructor' => 'Dr. Dan Wu',
        'schedule' => 'Mon, Wed - 11:00 AM to 1:00 PM',
    ],
    [
        'name' => 'COMP-3150 Database Management Systems',
        'instructor' => 'Dr. Hossein Fani',
        'schedule' => 'Mon - 6:00 PM to 9:50 PM',
    ],
    [
        'name' => 'COMP-3220 Object Oriented System Design',
        'instructor' => 'Paul Preney',
        'schedule' => 'Fri - 10:00 AM to 11:00 AM',
    ],
    [
        'name' => 'COMP-2310 Theoretical Foundations of Computer Science',
        'instructor' => 'Peter Tsin',
        'schedule' => 'Tue - 10:00 AM to 11:00 AM',
    ],
    [
        'name' => 'COMP-2067 Programming for Beginners I',
        'instructor' => 'David Mayo',
        'schedule' => 'Asynchronous',
    ],
    [
        'name' => 'COMP-2650 Computer Architecture I',
        'instructor' => 'Dr. Imran Ahmed',
        'schedule' => 'Mon, Wed, Thurs - 1:00 PM to 3:00 PM',
    ],
];

$picks = [
    [
        'name' => 'COMP-2707 Advanced Website Design',
        'instructor' => 'Dr. Saja Al Mamoori',
        'schedule' => 'Tue - 7:00 PM to 8:50 PM (online)',
    ],
    [
        'name' => 'COMP-1047 Computer Concepts for End Users',
        'instructor' => 'David Mayo',
        'schedule' => 'Asynchronous',
    ],
    [
        'name' => 'COMP-2057 Intro to the Internet',
        'instructor' => 'David Mayo',
        'schedule' => 'Asynchronous',
    ],
    [
        'name' => 'COMP-2067 Programming for Beginners II',
        'instructor' => 'David Mayo',
        'schedule' => 'Asynchronous',
    ],
    [
        'name' => 'COMP-2460 System Programming',
        'instructor' => 'Dr. Dan Wu',
        'schedule' => 'Mon, Wed - 11:00 AM to 1:00 PM',
    ],
    [
        'name' => 'COMP-3150 Database Management Systems',
        'instructor' => 'Dr. Hossein Fani',
        'schedule' => 'Mon - 6:00 PM to 9:50 PM',
    ],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../scripts/header.js"></script>
    <title>CSHub - Courses</title>
</head>

<body>
    <script src="../scripts/navbar.js"></script>
    <div class="container">
        <section id="courses">
            <div class="courses-container">
                <div class="title courses-heading">
                    <h3><span>Winter 2024</span> Courses</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Instructor</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($courses as $course): ?>
                            <tr>
                                <td>
                                    <?php echo htmlspecialchars($course['name']); ?>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($course['instructor']); ?>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($course['schedule']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="title courses-heading">
                    <h3><span>CSHub's</span> Picks</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Instructor</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($picks as $pick): ?>
                            <tr>
                                <td>
                                    <?php echo htmlspecialchars($pick['name']); ?>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($pick['instructor']); ?>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($pick['schedule']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <div class="separated"></div>
        </section>
    </div>
    <script src="../scripts/footer.js"></script>
</body>

</html>
