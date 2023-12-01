/* Updated with harcoded credntials */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank of Crunch</title>
    <style>
        /* Set the background image */
        * {
            margin: 0;
            padding-top: 0;
            box-sizing: border-box;
            font-family: "TradeGothic", Helvetica, Arial, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.15;
            color: black;
            text-align: center;
            -webkit-font-smoothing: antialiased;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            background: white;
            box-sizing: border-box;
        }

        .nav1 {
            position: fixed;
            top: 115px;
            left: 0;
            width: 100%;
            padding: 25px 100px;
            background: #EEEEEE;
            box-sizing: border-box;
        }

        .nav2 {
            position: fixed;
            top: 165px;
            left: 0;
            width: 100%;
            padding: 25px 100px;
            background: #00395D;
            box-sizing: border-box;
        }

        .logo-image{
            max-width: 480px;
            max-height: 100vh;
            margin: auto;
        }

        body, html {
            height: 100%;
        }

        .bg {
            /* The image used */
            background-image: url("/pexels-nout-gons-378570.jpg");

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
            position: absolute;
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
            background-color: #00395D;
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

<header>
<a href="/">
        <img src="/bankofcrunch_logoV4.svg" alt="Bank of Crunch Logo" class="logo-image">
    </a>
</header>

<nav class="nav1">
</nav>
<nav class="nav2">
</nav>

<body>
<div class="bg">
    <div class="login-container">
        <h1>Log In to Online Banking</h1>
        <?php
        session_start();
        // Hardcoded credentials
        $hardcoded_username = "moneybags";
        $hardcoded_password = "fatstacks123";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                // Check if credentials match hardcoded values
                if ($_POST['username'] == $hardcoded_username && $_POST['password'] == $hardcoded_password) {
                    $_SESSION['logged_in'] = 1;
                    // Set a role if needed, for now hardcoded as 'user'
                    $_SESSION['role'] = 'user';
                    // Redirect or include another page here
                    echo "<p>Login successful! Redirecting...</p>";
                    // Redirect to another page or include it here
		            header("Location: account_overview.php"); // Uncomment to redirect
                } else {
                    echo "<p>Wrong username/password</p>";
                }
            }
        }
        ?>
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
