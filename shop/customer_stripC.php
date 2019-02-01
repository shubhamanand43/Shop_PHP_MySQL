<?php

if(isset($_POST['logoutC'])) {
  $query4 ="DELETE FROM cartdata";
  $rs4 = mysqli_query($connect, $query4);
  if($rs4){
    echo '<script>window.location="home.php"</script>';
    unset($_SESSION['customerN']);
    unset($_SESSION['customerC']);
    // header('location: homeCus.php');
  }
}

?>

  <!-- <div class="row">
    <div class="col"> </div>
    <div class="col-md-auto">  </div>
    <div class="col col-lg-2"> 
    <form class="form-inline" action="homeCus.php" method="post">
    <li><input name = "logoutC" class="text-danger" type="submit" value="logout"/></li>
    </form
    </div>
  </div> -->

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand"> </a>
  <form class="form-inline" method="post" action="homeCus.php">
		<div> <img src="img/cusimg.png" alt="" width="32" height="32"> </div>    
    <span class="navbar-text"  style = 'margin-right:1.25em; margin-left:0.5em; display:inline-block;'>
      <?php echo $_SESSION['customerN']; ?>    
      </span><br>
    <button class="btn btn-outline-danger my-2 my-sm-0" name="logoutC" type="submit">Customer Logout</button>
  </form>
</nav>

<!-- class="collapse navbar-collapse" id="navbarSupportedContent -->