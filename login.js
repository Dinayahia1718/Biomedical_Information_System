// Get form elements
const form = document.querySelector('form');
const usernameInput = document.querySelector('#username');
const passwordInput = document.querySelector('#password');
const roleSelect = document.querySelector('#role');

// Add event listener for form submission
form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Check user credentials and role
  const username = usernameInput.value;
  const password = passwordInput.value;
  const role = roleSelect.value;

  // Replace this with your own server-side validation code
  if (username === 'dina' && password === 'admin' && role === 'doctor') {
    window.location.href = 'nursingassessment.php';
  } else if (username === 'rawan' && password === 'hohoz' && role === 'nurse') {
    window.location.href = 'nurse.html';
  } else {
    alert('Invalid credentials or role');
  }
});

// Function to show doctor view
function showDoctorView() {
  // Redirect to doctor view
  window.location.href = 'nursingassessment.php';
}

// Function to show nurse view
function showNurseView() {
  // Redirect to nurse view
  window.location.href = 'nurse.html';
}


