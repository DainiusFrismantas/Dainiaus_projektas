function toggleMobileNav() {
    var mobileNav = document.querySelector(".mobile-nav .flex-container");
    var mobileNavBackground = document.querySelector(".mobile-nav-background");
    if (mobileNav.style.display === "none") {
      mobileNav.style.display = "block";
      mobileNavBackground.style.display = "block";
    } else {
      mobileNav.style.display = "none";
      mobileNavBackground.style.display = "none";
    }
  }