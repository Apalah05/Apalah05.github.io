<?php
session_start();
require "koneksi.php";

if (isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}

if (isset($_POST['submit'])) {
  $nama_lengkap = $_POST['nama_lengkap'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $sql_check = "SELECT * FROM akun WHERE username = '$username'";
  $result_check = $conn->query($sql_check);

  if ($result_check->num_rows > 0) {
    echo "<script>alert('Username sudah terdaftar!');</script>";
  } else {
    $sql = "INSERT INTO akun (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>
              alert('Registrasi berhasil!');
              window.location.href = 'login.php';
            </script>";
      exit;
    } else {
      echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
  }
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | De' Auction</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="login-container">
    <div class="login-box">
      <h2>Register</h2>
      <form action="register.php" method="POST">
        <div class="input-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
          <button type="submit" name="submit" class="button">Register</button>
        </div>
      </form>
      <p style="text-align: center;">Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
  </div>
</body>

</html>