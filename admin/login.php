<?php
include '../config.php';
// login.php
session_start();

// Fungsi login
function login($username, $password) {
  global $conn;
  $password = md5($password);
  $stmt = $conn->prepare("SELECT nama 
  FROM user 
  WHERE nama=? AND password=?");

  //parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string

  //database executes the statement
  $stmt->execute();

  //menampung hasil eksekusi
  $result = $stmt->get_result();
  if (mysqli_num_rows($result) > 0) {
      return true;
  } else {
      return false;
  }
  $stmt->close();
  $conn->close();
}

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $_POST['login'];
    if (login($username, $password)) {
        // Login berhasil, redirect ke halaman utama
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        // Login gagal, tampilkan pesan error
        $error = "Username atau password salah";
    }
}


// Tampilkan form login
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Login</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
          <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>