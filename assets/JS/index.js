// Mobile toggle button script

const menuToggle = document.getElementById("menu-toggle");
const closePanel = document.getElementById("close-panel");
const sidePanel = document.getElementById("side-panel");
const overlay = document.getElementById("overlay");

menuToggle.addEventListener("click", () => {
    sidePanel.classList.add("active");
    overlay.classList.add("active");
});

closePanel.addEventListener("click", () => {
    sidePanel.classList.remove("active");
    overlay.classList.remove("active");
});

overlay.addEventListener("click", () => {
    sidePanel.classList.remove("active");
    overlay.classList.remove("active");
});


// // Mobile touch interactions
// document.addEventListener('DOMContentLoaded', function() {
//   // Improve touch for category items
//   const categoryItems = document.querySelectorAll('.category-item, .D-container');
  
//   categoryItems.forEach(item => {
//     item.addEventListener('touchstart', function() {
//       this.classList.add('active');
//     });
    
//     item.addEventListener('touchend', function() {
//       this.classList.remove('active');
//     });
//   });
  
//   // Prevent default on touch for smoother scrolling
//   document.addEventListener('touchmove', function(e) {
//     if (e.target.classList.contains('D-row')) {
//       e.preventDefault();
//     }
//   }, { passive: false });
  
//   // Handle FAQ for touch devices
//   const faqQuestions = document.querySelectorAll('.faq-question');
  
//   faqQuestions.forEach(question => {
//     question.addEventListener('touchstart', function() {
//       this.parentElement.classList.toggle('active');
//     });
//   });
// });



 

    // headet toggle buttonja 

    
    document.addEventListener('DOMContentLoaded', function () {
      const dropdownToggles = document.querySelectorAll('.side-panel-menu .dropdown-toggle');

      dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
          e.preventDefault();
          const parent = toggle.parentElement;

          // Close all other submenus
          dropdownToggles.forEach(otherToggle => {
            const otherParent = otherToggle.parentElement;
            const otherSubmenu = otherParent.querySelector('.submenu');
            const otherIcon = otherToggle.querySelector('i');
            if (otherParent !== parent) {
              otherParent.classList.remove('active');
              if (otherSubmenu) otherSubmenu.style.display = 'none';
              if (otherIcon) otherIcon.classList.remove('rotate');
            }
          });

          // Toggle current submenu
          parent.classList.toggle('active');
          const submenu = parent.querySelector('.submenu');
          if (submenu) {
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
          }

          const icon = toggle.querySelector('i');
          if (icon) icon.classList.toggle('rotate');
        });
      });
    });
  
    