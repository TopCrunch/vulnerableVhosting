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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #3498db, #e74c3c);
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      color: #fff;
    }

    form {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: left;
      /* Center the form */
    }

    h2 {
      color: #000;
      font-weight: bold;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      /* Darker text color */
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
      background-color: #f7f7f7;
      /* Light gray background */
      border: 1px solid #ddd;
      /* Border color */
      border-radius: 3px;
      /* Rounded corners */
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: white;
      cursor: pointer;
    }

    p {
      margin-top: 10px;
      color: #333;
      /* Darker text color */
    }

    .error-message {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>

<body>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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

</body>

</html>