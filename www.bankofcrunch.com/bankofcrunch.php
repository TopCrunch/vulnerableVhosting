
<?php
/*
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    echo "Connection failed. Please try again later.";
} else {
    echo "Connected successfully.";
}

// Validate user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Direct SQL query (vulnerable to SQL injection)
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        // Additional logic for a successful login
    } else {
        echo "Login failed. User not found or invalid password.";
    }
}

// Close the database connection
$conn->close();

*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank of Crunch</title>
    <style>
        /* Set the background image */
        body, html {
            height: 100%;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .bg {
            /* The image used */
            background-image: url('Background.png');

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            /* Needed to position the login box */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Container holding the form */
        .login-container {
            background: rgba(255, 255, 255, 0.9); /* White background with a little transparency */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Style adjustments for form and inputs */
        form {
            margin-top: 20px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: calc(100% - 20px); /* input padding and border */
        }

        button {
            background-color: #007aff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #0051a8;
        }

        /* Additional styling for the header */
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

<div class="bg">
    <div class="login-container">

        <h1>Bank of Crunch</h1>

        <!-- Login form -->
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>

</body>
</html>
