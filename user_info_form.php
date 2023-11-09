<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <h2>User Information Form</h2>
    <form method="post" action="save_user.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        <label for="city">City:</label>
        <select name="city">
            <option value="New York">New York</option>
            <option value="Los Angeles">Los Angeles</option>
            <option value="Chicago">Chicago</option>
            <option value="Houston">Houston</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>