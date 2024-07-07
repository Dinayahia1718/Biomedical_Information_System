// Get all tab links and tab contents
const tabLinks = document.querySelectorAll(".tab-link");
const tabContents = document.querySelectorAll(".tab-content");

// Add click event listener to each tab link
tabLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const targetTab = link.dataset.tab;
    // Hide all tab contents
    tabContents.forEach((content) => {
      content.style.display = "none";
    });
    // Show the target tab content
    const targetContent = document.getElementById(targetTab);
    targetContent.style.display = "block";
    // Remove the active class from all tab links
    tabLinks.forEach((link) => {
      link.classList.remove("active");
    });
    // Add the active class to the clicked tab link
    link.classList.add("active");
  });
});

document.addEventListener('DOMContentLoaded', function() {
  // Add event listener for logout button
  const logoutBtn = document.getElementById('logout-btn');
  logoutBtn.addEventListener('click', () => {
      // Redirect to the login page
      window.location.href = 'login.html';
  });
});