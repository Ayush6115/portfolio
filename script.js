// Function to scroll to the top of the page
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
  
  // Show/hide the "Go to Top" button based on the scroll position
  window.addEventListener('scroll', function() {
    var goToTopBtn = document.querySelector('.go-to-top-btn');
    if (window.scrollY > 300) {
      goToTopBtn.classList.add('active');
    } else {
      goToTopBtn.classList.remove('active');
    }
  });
  
  // JavaScript for Hamburger Menu Toggle
  document.addEventListener('DOMContentLoaded', function() {
  var navbarLinks = document.querySelector('.navbar-links');
  var hamburgerMenu = document.querySelector('.hamburger-menu');
  
  hamburgerMenu.addEventListener('click', function() {
    navbarLinks.classList.toggle('show');
  });
});