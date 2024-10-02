<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}

if(isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "<p style='succes-message'>Login sukses!</p>";
        header('Refresh: 2; URL=dashboard.php');
        exit;
    } else {
        echo "<p style='error-massage'>Login Invalid username or password!</p>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login dan Registrasi Form De' Auction</title>
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" methhod="post">
            <label for="username">username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>