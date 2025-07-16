document.querySelectorAll(".slider-nav a").forEach((link, index) => {
  link.addEventListener("click", function (e) {
    e.preventDefault(); // Completely prevents page jump

    // Manual slider navigation
    const slider = document.querySelector(".slider");
    const slideWidth = slider.offsetWidth;
    slider.scrollLeft = index * slideWidth;
  });
});
