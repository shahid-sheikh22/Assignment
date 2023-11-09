

<?php
// Database connection settings
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];

// Insert user information into the database
$sql = "INSERT INTO users (name, email, gender, city) VALUES ('$name', '$email', '$gender', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "User information saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
