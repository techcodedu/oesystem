// Get the remember me checkbox
var rememberMe = document.getElementById("remember");

// Check if the remember me checkbox is checked on page load
if (localStorage.getItem("rememberMe") === "true") {
  rememberMe.checked = true;
}

// Listen for changes to the remember me checkbox
rememberMe.addEventListener("change", function () {
  localStorage.setItem("rememberMe", rememberMe.checked);
});
