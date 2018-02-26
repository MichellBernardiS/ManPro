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

      <div id="loginbox">
        <h2>Register</h2>
        <form action="login.php" method="POST">
          <i class="fa fa-user"></i><input type="text" name="username" id="username" class="textlogin" placeholder="Username"></input>
          <br>

          <i class="fa fa-user"></i><input type="text" name="fullname" id="fullname" class="textlogin" placeholder="Fullname"></input>
          <br>

          <i class="fa fa-envelope"></i><input type="text" name="username" id="username" class="textlogin" placeholder="Username"></input>
          <br>

          <i class="fa fa-lock"></i><input type="password" name="password" id="password" class="textlogin" placeholder="Password"></input>
          <br>

          <i class="fa fa-lock"></i><input type="password" name="retypepassword" id="retypepassword" class="textlogin" placeholder="Retypepassword"></input>
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
          <a href="index.php"><button type="submit" name="Cancel" id="signup"  style="width: 120px;height: 50px;">Cancel <i class="fa fa-close"></i></button>
          <button type="submit" name="register" id="login" style="width: 120px;height: 50px;">Register <i class="fa fa-sign-in"></i></button>
          

        </form>
      </div>
    </center>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>