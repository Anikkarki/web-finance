<?php 
  if(isset($_COOKIE['userNameApp'])){
  $user = $_COOKIE['userNameApp'];
  die("found");
}
else {
  $user = '';
 // die("not found");
 // die($_COOKIE['userNameApp']);
}
?>

<html>
    <head>
        <title>admin login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
<div class="container-login">
<br>
<!-- start of content -->
<div class="post-container">
  <div align="center" class="post">
  <div class="login-style">

      <form method="POST" class="login-con"action="core/admin_login_process.php">
        <br>
        <div align="center" class="post-title"><h2>Admin Log-in</h2></div>
        <br>
        <div class="login-user">Admin Id:  <input type="text" name="admin_id" value='<?php echo "$user"; ?>'></div>
        <br>
        <div class="login-pass">Password:  <input type="password" name="password"></div>
        <br>
        <div class="remember-btn"><input type="checkbox" name="remember_me" value="remember_me">Remember Me</div>
        <br>
        <input class="btn btn-success btn-block" type="submit" name="btn_login" value="Log-in"><br>
      </form>

  </div>
  </div>
  </div>

</div>
</div>
</body>
</html>