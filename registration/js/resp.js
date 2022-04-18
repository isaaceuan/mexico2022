
//     // If a link has a dropdown, add sub menu toggle.
//   $(function() { // DOM ready
//     // If a link has a dropdown, add sub menu toggle.
//     $('nav ul li a:not(:only-child)').click(function(e) {
//       $(this).siblings('.nav-dropdown').toggle();
//       // Close one dropdown when selecting another
//       $('.nav-dropdown').not($(this).siblings()).hide();
//       e.stopPropagation();
//     });
//     // Clicking away from dropdown will remove the dropdown class
//     $('html').click(function() {
//       $('.nav-dropdown').hide();
//     });
//     // Toggle open and close nav styles on click
//     $('#nav-toggle').click(function() {
//       $('nav ul').slideToggle();
//     });
//     // Hamburger to X toggle
//     $('#nav-toggle').on('click', function() {
//       this.classList.toggle('active');
//     });
//   }); // end DOM ready


  // search-box open close js code
  let navbar = document.querySelector(".navbar");
  let searchBox = document.querySelector(".search-box .bx-search");
  // let searchBoxCancel = document.querySelector(".search-box .bx-x");
  
//   searchBox.addEventListener("click", ()=>{
//     navbar.classList.toggle("showInput");
//     if(navbar.classList.contains("showInput")){
//       searchBox.classList.replace("bx-search" ,"bx-x");
//     }else {
//       searchBox.classList.replace("bx-x" ,"bx-search");
//     }
//   });
  
  // sidebar open close js code
  let navLinks = document.querySelector(".nav-links");
  let menuOpenBtn = document.querySelector(".navbar .bx-menu");
  let menuCloseBtn = document.querySelector(".nav-links .bx-x");
  menuOpenBtn.onclick = function() {
  navLinks.style.left = "0";
  }
  menuCloseBtn.onclick = function() {
  navLinks.style.left = "-100%";
  }
  
  
  // sidebar submenu open close js code
  let htmlcssArrow = document.querySelector(".htmlcss-arrow");
  htmlcssArrow.onclick = function() {
   navLinks.classList.toggle("show1");
  }
  let moreArrow = document.querySelector(".more-arrow");
  moreArrow.onclick = function() {
   navLinks.classList.toggle("show2");
  }
  let jsArrow = document.querySelector(".js-arrow");
  jsArrow.onclick = function() {
   navLinks.classList.toggle("show3");
  }
  