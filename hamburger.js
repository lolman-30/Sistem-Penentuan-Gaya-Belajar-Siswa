// Event listener untuk hamburger menu
const hamburger = document.querySelector('.nav-bar .hamburger');
const mobileMenu = document.querySelector('.nav-bar .nav-list ul');

hamburger.addEventListener('click', () => {
   hamburger.classList.toggle('active');
   mobileMenu.classList.toggle('active');
});

// Event listener untuk scroll
const header = document.querySelector('#header');
document.addEventListener('scroll', () => {
   var scrollPosition = window.scrollY;
   if (scrollPosition > 250) {
      header.style.backgroundColor = "#29323c";
   } else {
      header.style.backgroundColor = "transparent";
   }
});

// Event listener untuk menu item
const menuItems = document.querySelectorAll('.nav-bar .nav-list ul li a');
menuItems.forEach((item) => {
   item.addEventListener('click', () => {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
   });
});