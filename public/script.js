alert('hello!');
$(document).ready(function () {
    $('.carousel').carousel({
        interval: 2000, // Set the interval in milliseconds (e.g., 3000ms = 3 seconds)
        pause: "hover" // Optional: Pause the carousel on mouse hover
    });
 });

var myCarousel = document.getElementById('myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000, // Set the interval time in milliseconds (e.g., 2000 = 2 seconds)
  wrap: true, // Allow the carousel to wrap around
  keyboard: false // Disable keyboard navigation
})

var prevButton = document.querySelector('.carousel-control-prev')
var nextButton = document.querySelector('.carousel-control-next')

prevButton.addEventListener('click', function() {
  carousel.prev()
  resetInterval()
})

nextButton.addEventListener('click', function() {
  carousel.next()
  resetInterval()
})

function resetInterval() {
  clearInterval(carouselInterval)
  carouselInterval = setInterval(function() {
    carousel.next()
  }, 2000)
}

var carouselInterval = setInterval(function() {
  carousel.next()
}, 2000)