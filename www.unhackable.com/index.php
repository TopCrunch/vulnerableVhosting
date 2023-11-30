<?php
// Initialize the error message variable
$error_message = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Hard-coded username and password (replace with a database lookup)
  $username = "user123";
  $password = "password123";

  // Get user input
  $inputUsername = $_POST["username"];
  $inputPassword = $_POST["password"];

  // Check if the input matches the hard-coded credentials
  if ($inputUsername == $username && $inputPassword == $password) {
    // Redirect to the welcome page upon successful login
    header("Location: welcome.php");
    exit(); // Ensure that no further code is executed after the redirect
  } else {
    // Set the error message
    $error_message = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css"/>
</head>

<nav>
  <div class="logo-image">
    <img src="./unhackable_logo_V3.svg" alt="unhackable logo"/>
  </div>
</nav>

<body>
  <section class="main">
      <div class="login-container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);">
          <h2>Login</h2>

          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>

          <input type="submit" value="Login">

          <!-- Display error message if login fails -->
          <p class="error-message"><?php echo $error_message; ?></p>

          <p>Don't have an account? <a href="#">Sign up</a></p>
        </form>
      </div>
  </section>
</body>

</html>
