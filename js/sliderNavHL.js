let slider = document.getElementById('slider'); // Get the slider
let dots = document.querySelectorAll('.slider-nav a'); // Get all nav dots
let slides = slider.getElementsByTagName('img'); // Get all slides
dots[0].classList.add('active');

slider.addEventListener('scroll', function() {
  for (let i = 0; i < slides.length; i++) {
    // Check if this slide is in view
    if (slider.scrollLeft >= slides[i].offsetLeft - slides[i].offsetWidth/2) {
      // Remove active from all dots
      for (let j = 0; j < dots.length; j++) {
        dots[j].classList.remove('active');
      }
      // Add active to current dot
      dots[i].classList.add('active');
    }
  }
});
