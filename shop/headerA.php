
<?php
if(isset($_POST['logoutA'])){
  echo '<script>window.location="logoutA.php"</script>';
  echo '<script>window.location="login.php"</script>';
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="home.php">
		<img src="img/redcart.png" width="32" height="32" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="shopDatabase.php">Shop Database</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="customerDetail.php">Customers</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="ouritems.php">Our Items</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="addItem.php">Add Item</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="updateItem.php">Update Item</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="deleteItem.php">Delete Item</a>
      </li>

    </ul>
  </div>

  <form class="form-inline" method="post" action="home.php">
    <div> <img src="img/admin_img.png" alt="" width="32" height="32"> </div>

    <span class="navbar-text"  style = 'margin-right:0.75em; margin-left:0.5em; display:inline-block;'>
    <?php echo $_SESSION['uname']; ?>
    </span>
    <button class="btn btn-outline-danger my-2 my-sm-0" name="logoutA" type="submit">Admin Logout</button>

    <!-- <div> <li><a name ="logoutA" href="logoutA.php">Logout</a></li> </div>  -->
	</form>

</nav>

<!-- <i class="fa fa-suitcase"></i> -->
