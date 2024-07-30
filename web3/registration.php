<?php
require 'connection.php'; // Assuming this file handles database connection

// Check if user is already logged in (using $_SESSION)
if (!empty($_SESSION["id"])) {
    header("Location: index.php");  // Redirect to index if logged in
    exit();                        // Terminate script execution
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["passwords"];  // Consider renaming to $password
    $email = $_POST["emails"];
    $confirmPassword = $_POST["confirmpasswords"];

    // **1. Create table if it doesn't exist (assuming appropriate table structure)**
    $createTableQuery = "CREATE TABLE IF NOT EXISTS tb_user (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        username VARCHAR(50) UNIQUE NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL, 
        password VARCHAR(255) NOT NULL
    )";

    if (!mysqli_query($conn, $createTableQuery)) {
        echo "Error creating table: " . mysqli_error($conn);
    }

    // **2. Check for duplicate username or email (using prepared statements for security)**
    $stmt = mysqli_prepare($conn, "SELECT * FROM tb_user WHERE username = ? OR email = ?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username or email has already been taken.');</script>";
    } else {
        // **3. Check if passwords match and hash password before insertion**
        if ($password === $confirmPassword) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // **4. Use prepared statement for secure insertion**
            $insertQuery = "INSERT INTO tb_user (name, username, email, password) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $insertQuery);
            mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedPassword);
            mysqli_stmt_execute($stmt);

            echo "<script>alert('Registration successful!');</script>";
        } else {
            echo "<script>alert('Passwords do not match.');</script>";
        }
    }

    mysqli_stmt_close($stmt);  // Close the prepared statement (optional but good practice)
    mysqli_free_result($result); // Free the result set (optional but good practice)
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="registration .css">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription :</h1><br>
    <form action="" method="post" autocomplete="off">
        <label for="name">Name:</label><br><br>
        <input type="text" id="name" name="name" required value="">
        <br><br>

        <label for="username">Username:</label><br><br>
        <input type="text" id="username" name="username" required value="">
        <br><br>

        <label for="passwords">Password:</label><br><br>
        <input type="password" id="passwords" name="passwords" required value="">
        <br><br>

        <label for="emails">Email:</label><br><br>
        <input type="email" id="emails" name="emails" required value="">
        <br><br>

        <label for="confirmpasswords">Confirm Password:</label><br><br>
        <input type="password" id="confirmpasswords" name="confirmpasswords" required value="">
        <br><br>

        <button type="submit" name="submit">Register</button>
        <br>
    </form>
    <br><br><br><br><br>
    <a href="login.php">Login</a>
</body>
</html>
