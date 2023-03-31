<?php
// Define database connection constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ce154');

// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ce154');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form submitted
if (isset($_POST['submit'])) {
    // Get form data and sanitize input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query database to check if user exists
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if query was successful and user exists
    if (mysqli_num_rows($result) > 0) {
        // User is authenticated, set session variable
        session_start();
        $_SESSION['email'] = $email;
        // Redirect to home page or dashboard
        header("Location: index.php");
        exit();
    } else {
        // Display error message
        echo "Invalid email or password. Please try again.";
    }
}

// Check if user is logged in
// session_start();
// if (isset($_SESSION['email'])) {
//     // User is logged in, display logout link
//     echo "<a href='logout.php'>Logout</a>";
// } else {
//     // User is not logged in, display login form
//     ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <style>h1 {
  text-align: center;
  font-size: 32px;
  margin-bottom: 20px;
}

form {
  width: 400px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 10px;
}

label {
  font-size: 18px;
  margin-bottom: 10px;
}

input[type="email"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  font-size: 18px;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>
    <body>
        <!-- Header section -->
	<div class="header">
		<img src="img/logo.png" alt="My Logo">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about_artist.php">About artist</a></li>
			<li><a href="merchandise_listing.php">Merchandise listing</a></li>
			<li><a href="merchandise_details.php">Merchandise details</a></li>
			<li><a href="basket.php">Basket</a></li>
			<li><a href="resgistration.php">Registration</a></li>
			<li><a href="login.php">login</a></li>
		</ul>
	</div>
        <h1>Login</h1>
        <form method="post" action="login.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" name="submit" value="Login">
        </form>
    </body>
    </html>
    <?php
// Close database connection
mysqli_close($conn);
?>
