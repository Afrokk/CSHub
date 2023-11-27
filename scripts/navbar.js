document.write(`
<nav class="navbar">
      <div class="nav-container">
        <div class="nav-elements">
          <a href="../index.php" class="logo">CS<span>Hub</span>.</a>
          <ul class="nav-links">
            <li><a href="../index.php" class="active">Home</a></li>
            <li><a href="./courses.php">Courses</a></li>
            <li><a href="./tutorials.php">Tutorials</a></li>
            <li><a href="./resources.php">Resources</a></li>
            <li class="mobile-contact"><a href="./contact.php">Contact</a></li>
          </ul>
          <a href="./contact.php" class="cta">Contact</a>
        </div>
        <div class="burger">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="close">X</div>
      </div>
</nav>
`);

document.addEventListener("DOMContentLoaded", function () {
  var navLinks = document.querySelectorAll(".nav-links a");

  navLinks.forEach((link) => {
    if (link.href === window.location.href) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});
