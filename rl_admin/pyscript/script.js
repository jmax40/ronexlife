document.addEventListener("DOMContentLoaded", function() {
  // Toggle search box visibility
  let searchButton = document.getElementById("searchButton");
  if (searchButton) {
    searchButton.addEventListener("click", function() {
      let searchBox = document.getElementById("searchBox");
      if (searchBox) {
        searchBox.style.display = "block";
      } else {
        console.error("Search box element not found.");
      }
    });
  } else {
    console.error("Search button element not found.");
  }

  // Toggle submenu visibility
  let arrow = document.querySelectorAll(".arrow");
  arrow.forEach((arrow) => {
    arrow.addEventListener("click", (e) => {
      let arrowParent = e.target.parentElement.parentElement; // Selecting main parent of arrow
      if (arrowParent) {
        arrowParent.classList.toggle("showMenu");
      } else {
        console.error("Parent element of arrow not found.");
      }
    });
  });

  
  // Toggle sidebar visibility
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  if (sidebarBtn && sidebar) {
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  } else {
    console.error("Sidebar or sidebar button element not found.");
  }

  // Show overlay on add button click
  let addButton = document.getElementById("addButton");
  if (addButton) {
    addButton.addEventListener("click", function() {
      let overlay = document.getElementById("overlay");
      if (overlay) {
        overlay.style.display = "flex";
      } else {
        console.error("Overlay element not found.");
      }
    });
  } else {
    console.error("Add button element not found.");
  }



  

  // Hide overlay on close button click
  let closeButton = document.getElementById("closeButton");
  if (closeButton) {
    closeButton.addEventListener("click", function() {
      let overlay = document.getElementById("overlay");
      if (overlay) {
        overlay.style.display = "none";
      } else {
        console.error("Overlay element not found.");
      }
    });
  } else {
    console.error("Close button element not found.");
  }

  // Change input background color on click, focus, and blur
  changeInputBackgroundOnClickAndFocus();
});


function changeInputBackgroundOnClickAndFocus() {
  var inputs = document.querySelectorAll('input, select, textarea'); // Select all input elements
  inputs.forEach(function(input) {
    // Event listener for click
    input.addEventListener('click', function() {
      input.style.backgroundColor = "rgba(255, 255, 0, 0.2)"; // 20% yellow
    });

    // Event listener for focus
    input.addEventListener('focus', function() {
      input.style.backgroundColor = "rgba(255, 255, 0, 0.2)"; // 20% yellow
    });

    // Event listener for blur (when the element loses focus)
    input.addEventListener('blur', function() {
      // Check if the input has content
      if (input.value.trim() !== "") {
        input.style.backgroundColor = "rgba(255, 255, 0, 0.2)"; // Keep background color 20% yellow if it has content
      } else {
        input.style.backgroundColor = "rgba(255, 255, 255, 0.7)"; // 70% white
      }
    });

    // Event listener for input (while typing)
    input.addEventListener('input', function() {
      input.style.backgroundColor = "rgba(255, 255, 0, 0.2)"; // 20% yellow
      input.style.borderColor = "aqua"; // Set border color to aqua while typing
    });

    // Event listener for blur after typing
    input.addEventListener('blur', function() {
      input.style.borderColor = "#050505"; // Reset border color when losing focus after typing
    });
  });
}



document.addEventListener('DOMContentLoaded', function() {
  var inputs = document.querySelectorAll('input[type="text"], input[type="date"]');

  inputs.forEach(function(input) {
      input.addEventListener('input', function() {
          if (input.value.trim() !== '') {
              input.classList.add('has-value');
          } else {
              input.classList.remove('has-value');
          }
      });
  });
});




document.addEventListener("DOMContentLoaded", function() {
  let button = document.getElementById("searchButton");
  if (button) {
      button.addEventListener("mouseenter", function() {
          transformToInput();
      });
  } else {
      console.error("Button element not found.");
  }
});





const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('focus', () => {
  searchInput.style.width = '500px';
  searchInput.style.backgroundColor = 'transparent';
});

searchInput.addEventListener('blur', () => {
  searchInput.style.width = '120px';
  searchInput.style.backgroundColor = ''; // Remove background color
});
