const navSlide = () => {
  const burger = document.querySelector(".burger");
  const close = document.querySelector(".close");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
    nav.classList.toggle("animate-mobile-nav");

    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `fade 0.1s ease forwards ${index / 7 + 0.2}s`;
      }
    });

    burger.classList.toggle("toggle");
    close.style.display = "block";
  });

  close.addEventListener("click", () => {
    nav.classList.remove("nav-active");
    nav.classList.remove("animate-mobile-nav");
    burger.classList.remove("toggle");
    close.style.display = "none";

    navLinks.forEach((link) => {
      link.style.animation = "";
    });
  });

  window.addEventListener("resize", function () {
    if (window.innerWidth > 768) {
      close.style.display = "none";
      nav.classList.remove("nav-active");
      burger.classList.remove("toggle");
      nav.classList.remove("animate-mobile-nav");

      navLinks.forEach((link) => {
        link.style.animation = "";
      });
    }
  });
};

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".nav-links a");
  const contactButton = document.querySelector(".cta");
  var url = window.location.href;

  if (url.indexOf("contact.html") > -1) {
    contactButton.classList.add("active");
  } else {
    contactButton.classList.remove("active");
  }

  links.forEach((link) => {
    link.addEventListener("click", function () {
      links.forEach((node) => {
        node.classList.remove("active");
      });
      this.classList.add("active");
    });
  });

  navSlide();
});
