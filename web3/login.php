<?php
// Assuming a connection to the database is established elsewhere
if (isset($_POST["submit"])) {
    $usernameemail = trim($_POST["usernameemail"]); // Trim leading/trailing whitespace
    $password = trim($_POST["passwords"]);          // Trim leading/trailing whitespace

    // **1. Check if connection variable $conn is defined and connected**
    if (!$conn) {
        die("Error: Connection to the database failed!");
    }

    // **2. Prepared Statement for Secure Queries:**
    $stmt = mysqli_prepare($conn, "SELECT * FROM tb_user WHERE (username = ? OR email = ?) AND is_active = 1"); // Add active user check

    // **Improved error handling:**
    if (!$stmt) {
        echo "Error: Unable to prepare statement (" . mysqli_error($conn) . ")";
        exit();
    }

    // **3. Bind parameters safely:**
    $bind_type = "ss"; // Data types for both username and email
    $bind_vars = array(&$usernameemail, &$password); // Use references for efficiency
    if (!mysqli_stmt_bind_param($stmt, $bind_type, ...$bind_vars)) {
        echo "Error: Binding parameters failed (" . mysqli_error($conn) . ")";
        exit();
    }

    // **4. Execute the statement:**
    if (!mysqli_stmt_execute($stmt)) {
        echo "Error: Statement execution failed (" . mysqli_error($conn) . ")";
        exit();
    }

    // **5. Retrieve the result:**
    $result = mysqli_stmt_get_result($stmt);

    // **Check for results (and avoid unnecessary empty check):**
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // **6. Use password_verify for secure password comparison:**
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: index.php");
            exit(); // Exit after successful login
        } else {
            echo "<script> alert('Incorrect password.'); </script>";
        }
    } else {
        echo "<script> alert('Username or email not found, or account is inactive.'); </script>";
    }

    // **Close prepared statement and result set:**
    mysqli_stmt_close($stmt);
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
    <h1>Se connecter :</h1><br>
    <form action="" method="post" autocomplete="off">
        <label for="usernameemail">Username or Email:</label>
        <input type="text" id="usernameemail" name="usernameemail" required value=""> <br>
        <label for="passwords">Password:</label>
        <input type="password" id="passwords" name="passwords" required value="">
        <br>

        <button type="submit" name="submit">Login</button> <br>
    </form>
    <br><br><br><br><br>
    <a href="registration.php">Registration</a>
</body>
</html>
