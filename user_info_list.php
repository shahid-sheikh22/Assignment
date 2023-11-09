<!DOCTYPE html>
<html>
<head>
    <title>User Information List</title>
</head>
<body>
    <h2>User Information List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
        </tr>

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

        // Retrieve user information from the database
        $sql = "SELECT name, email, gender, city FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No user information available.";
        }

        // Close the database connection
        $conn->close();
        ?>

    </table>
</body>
</html>
