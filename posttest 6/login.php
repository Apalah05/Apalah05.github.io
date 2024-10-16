
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelelangan De' Auction | Website Pelelangan Barang Antik Yang Anda Inginkan</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="login-form">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="button">Login</button>
                </div>
                <p class="error-message"></p>
            </form>
        </div>
    </div>

    <div class="home-container">
        <h2>Selamat Datang, <span class="username-display"></span>!</h2>
        <p>Kamu Telah Sukses Login pada Website Pelelangan.</p>
        <button class="logout()" class="button">Logout</button>
    </div>

    <script>
        const username = localStorage.getItem('username');
        document.getElementById('username-display').textContent = username;

        function logout() {
            localStorage.removeItem('username');
            window.location.href = "login.php";
        }
    </script>

    <script class="script.js"></script>
</body>
</html>
