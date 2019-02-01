<?php include('connections.php'); ?>

<?php
if(isset($_POST['login'])){

    $user = $_POST['inputUser'];
    $pass = $_POST['inputPassword'];

    $query = "SELECT admin_username, password FROM admin where admin_username = '$user'";    
    $rs = mysqli_query($connect, $query);
    
    if(mysqli_num_rows($rs)>0) {
      $row = mysqli_fetch_array($rs);    
      
      if($row[0]===$user & $row[1]===$pass) {
        $_SESSION['uname'] = $user;
        echo '<script>window.location="home.php"</script>';
      } else {
        echo '<script> alert(" Password incorect!! ")</script>';
      }
    }

    if (!$rs) {
        die('Query Failed ' . mysqli_error());
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <link href="css/bootstrap4.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <style>
    body { background-color: Gray; background-image: url(img/MonteCarlo.jpg); }
    </style>
  </head>

  <body class="text-center">

  <div class="container" style = "background-color: white; width: 30%; border-radius: 25px;">

    <form class="form-login" action ="login.php" method ="post">

      <img class="mb-4" src="img/login_icon.png" alt="" width="72" height="72">
      <input type="text" name = "inputUser" id="inputUser" class="form-control" placeholder="Username" required autofocus>
      
      <input type="password" name = "inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" name = "login" type="submit">Login</button>
      
      <label>Don't Have Account <span><a href="signup.php">Signup</a></span></label>
    </form>
    <script type="text/javascript" src="js/action.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  </div>
  </body>
</html>
