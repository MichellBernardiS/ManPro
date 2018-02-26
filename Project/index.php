<?php
/*
  include 'koneksi.php';
  session_start();
  if (isset($_SESSION['user'])) {
      header('location:index.php');
  }
  if (isset($_POST['login'])) {
      $username = mysqli_real_escape_string($konek,$_POST['username']);
      $password = mysqli_real_escape_string($konek,$_POST['password']);

      $q = mysqli_query($konek,"SELECT * from administrator where username like '$username' and password like '$password'");
      if ($q) {
        $hasil = mysqli_fetch_array($q);
        $row = $q->num_rows;
        if ($hasil['username'] == $username && $hasil['password'] == $password ) {
          $_SESSION['user'] = $username;
          $_SESSION['user_id'] = $hasil['id_admin'];
          $_SESSION['role'] = $hasil['role'];
          header('location:index.php');
        }else{
          $_SESSION['errMsg'] = "username atau password salah";
        }
    }
  }
  */
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sistem Peminjaman Registrasi</title>
  <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="js/js.js"></script>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/fontawesome.css"/>
</head>
<body>

  <div id="header">
    <h1 style="text-align: center;">Sistem Peminjaman Registrasi</h1>
  </div>
  <div id="content">
    <center>
      <img src="img/logo.png" alt="logo" width="180px">
      <div id="loginbox">
        <h2>LOGIN</h2>
        <form action ="signup.php" method="POST">
          <i class="fa fa-user"></i><input type="text" name="username" id="username" class="textlogin" placeholder="Username"></input>
          <br>
          <i class="fa fa-lock"></i><input type="password" name="password" id="password" class="textlogin" placeholder="Password"></input>
          <br>
          <div id="errMsg" style="color: red">
                  <?php
                    if(!empty($_SESSION['errMsg'])) {
                      echo $_SESSION['errMsg'];
                      unset($_SESSION['errMsg']);
                    }
                  ?>
              </div>
          <br><br>
          <a href="signup.php"><button   type="submit" name="SignUp" id="signup" style="width: 120px;height: 50px;"> SIGNUP</button></a>
          <button type="submit" name="Login" id="login" style="width: 120px;height: 50px;">LOGIN <i class="fa fa-sign-in"></i></button>
          

        </form>
      </div>
    </center>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>