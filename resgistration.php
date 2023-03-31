<?php
// Define database connection constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ce154');

// Connect to database
$conn = mysqli_connect('localhost', 'root','', 'ce154');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form submitted
if (isset($_POST['submit'])) {
    // Get form data and sanitize input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Insert data into "register" table
    $register_query = "INSERT INTO register (name, lastname, email, password) VALUES ('$name', '$lastname', '$email', '$password')";
    $register_result = mysqli_query($conn, $register_query);

    $register_query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    $register_result = mysqli_query($conn, $register_query);

    // Insert email and password into "users" table
    // $users_query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    // $users_result = mysqli_query($conn, $users_query);

    // Check if both queries were successful
    if ($register_result) {
        // Redirect to login page
        header("Location: login.php");
        exit();
    } else {
        // Display error message
        echo "Error: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style>form {
  margin: 0 auto;
  max-width: 600px;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px #ccc;
}

h1 {
  text-align: center;
  font-size: 36px;
  color: #333;
  margin-bottom: 30px;
}

label {
  display: block;
  font-size: 18px;
  color: #555;
  margin-bottom: 10px;
}

input[type=text], input[type=email], input[type=password] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  margin-bottom: 20px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  font-size: 18px;
  cursor: pointer;
  transition: all 0.3s ease;
}

input[type=submit]:hover {
  background-color: #3e8e41;
}
</style>
    <title>Registration Page</title>
</head>
<body>
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
    <h1>Registration Page</h1>
    <form method="post" action="">
        <link rel="stylesheet" type="text/css" href="style.css">

        <label for="name">First Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>


        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>