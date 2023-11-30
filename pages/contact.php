<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'khan77@uwindsor.ca';
    $subject = 'New contact form submission';
    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n".
        'X-Mailer: PHP/'.phpversion();
    $body = 'Name: '.$name."\n".'Email: '.$email."\n".'Message: '.$message;

    if(mail($to, $subject, $body, $headers)) {
        $_SESSION['message'] = 'Thank you for your email. We will get back to you soon.';
    } else {
        $_SESSION['message'] = 'There was a problem with your submission.';
    }

    header('Location: contact.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../scripts/header.js"></script>
    <title>CSHub - Contact</title>
</head>

<body>
    <script src="../scripts/navbar.js"></script>
    <div class="container">
        <div class="contact title">
            <h3><span>Contact</span> Us</h3>
            <p>
                Feel free to reach out to CSHub's active respresentatives if you have
                any queries or feedback.
            </p>
        </div>
        <section id="contact" class="contact-container">
            <form id="contactForm" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your message" required></textarea>
                <input type="submit" value="Submit">
            </form>
            <p id="validationMessage" style="color: red;"></p>
            <?php
            if(isset($_SESSION['message'])) {
                echo '<div id="myModal" class="modal">
            <div class="modal-content">
            <a href="contact.php">&larr; Back</a><br/>
                <p>'.$_SESSION['message'].'</p>
            </div>
          </div>';
                unset($_SESSION['message']);
            }
            ?>
        </section>
    </div>
    <script src="../scripts/footer.js"></script>
</body>

</html>
