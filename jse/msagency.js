window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbarmed');
    var scrollPosition = window.scrollY;
  
    if (scrollPosition > 300) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  },5000);
  