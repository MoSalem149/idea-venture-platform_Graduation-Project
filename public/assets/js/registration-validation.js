// Function to validate the form
function validateForm() {
  var fullName = document.getElementById("full-name").value.trim();
  var email = document.getElementById("email").value.trim();
  var password = document.getElementById("password").value;
  var profileType = document.getElementById("profile-type").value;

  // Regular expression for email format validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Password length validation
  var passwordLength = password.length >= 8;

  // Check if the name contains only alphabetic characters
  var nameRegex = /^[a-zA-Z\s]+$/;

  var valid = true;

  // Full Name validation
  var fullNameError = document.getElementById("fullNameError");
  if (fullName === "") {
    fullNameError.innerText = "Full Name is required";
    valid = false;
  } else if (!nameRegex.test(fullName)) {
    fullNameError.innerText =
      "Full Name should contain only alphabetic characters";
    valid = false;
  } else {
    fullNameError.innerText = "";
  }

  // Email validation
  var emailError = document.getElementById("emailError");
  if (email === "") {
    emailError.innerText = "Email Address is required";
    valid = false;
  } else if (!emailRegex.test(email)) {
    emailError.innerText = "Please enter a valid email address";
    valid = false;
  } else {
    emailError.innerText = "";
  }

  // Password validation
  var passwordError = document.getElementById("passwordError");
  if (password === "") {
    passwordError.innerText = "Password is required";
    valid = false;
  } else if (!passwordLength) {
    passwordError.innerText = "Password must be at least 8 characters long";
    valid = false;
  } else {
    passwordError.innerText = "";
  }

  // Profile Type validation
  var profileTypeError = document.getElementById("profileTypeError");
  if (profileType === "") {
    profileTypeError.innerText = "Profile Type is required";
    valid = false;
  } else {
    profileTypeError.innerText = "";
  }

  return valid;
}
