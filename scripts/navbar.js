document.write(`
<nav class="navbar">
      <div class="nav-container">
        <div class="nav-elements">
          <a href="../index.html" class="logo">CS<span>Hub</span>.</a>
          <ul class="nav-links">
            <li><a href="../index.html" class="active">Home</a></li>
            <li><a href="./courses.html">Courses</a></li>
            <li><a href="./tutorials.html">Tutorials</a></li>
            <li><a href="./resources.php">Resources</a></li>
            <li class="mobile-contact"><a href="./contact.html">Contact</a></li>
          </ul>
          <a href="./contact.html" class="cta">Contact</a>
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
