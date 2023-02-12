<?php
// Replace with your own database credentials
include("../db/config.php");
// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if email and password are not empty
  if(!empty($_POST['email']) && !empty($_POST['password'])) {
    // Prepare a SQL query to retrieve user information based on the email entered
    $stmt = $conn->prepare("SELECT * FROM administrators WHERE email = ?");
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a row is returned and if the entered password matches the password stored in the database
    if($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      if(password_verify($_POST['password'], $row['password'])) {
        // Password is correct, start a new session and redirect to the home page
        session_start();
        $_SESSION['admin_id'] = $row['admin_id'];
        header("location: dasbhoard.php");
      } else {
        // Password is incorrect
        $error_message = "Invalid email or password.";
      }
    } else {
      // Email is incorrect
      $error_message = "Invalid email or password.";
    }
  } else {
    // Email or password is empty
    $error_message = "Email and password are required.";
  }
}

// Close connection
$conn->close();
?>