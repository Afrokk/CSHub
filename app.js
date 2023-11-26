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

const updateLabel = () => {
  var inputFile = document.getElementById("fileToUpload");
  var label = document.getElementById("fileLabel");
  var uploadButton = document.getElementById("uploadButton");
  var fileName = inputFile.value.split("\\").pop();

  var maxLength = 20;
  if (fileName.length > maxLength) {
    fileName = fileName.substring(0, maxLength) + "...";
  }

  label.innerHTML = fileName ? fileName : "Choose a file";

  if (fileName) {
    uploadButton.style.display = "inline-block";
    uploadButton.style.margin = "20px";
    uploadButton.style.padding = "10px 20px";
    uploadButton.style.fontSize = "1rem";
  } else {
    uploadButton.style.display = "none";
    uploadButton.style.margin = "0";
    uploadButton.style.padding = "0";
  }
};

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".nav-links a");
  const contactButton = document.querySelector(".cta");
  let url = window.location.href;

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

  // Search bar for Tutorials
  const tutorialsList = document.getElementById("tutorials-list");
  if (tutorialsList) {
    document.getElementById("search").addEventListener("input", function (e) {
      const searchValue = e.target.value.toLowerCase();
      document.querySelectorAll("#tutorials-list li").forEach((tutorial) => {
        const title = tutorial.querySelector("h2").textContent.toLowerCase();
        const description = tutorial
          .querySelector("p")
          .textContent.toLowerCase();
        if (title.includes(searchValue) || description.includes(searchValue)) {
          tutorial.style.display = "";
        } else {
          tutorial.style.display = "none";
        }
      });
    });
  }

  let modal = document.getElementById("myModal");
  if (modal) {
    modal.style.display = "block";

    let span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
      modal.style.display = "none";
    };

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  }

  navSlide();
});
