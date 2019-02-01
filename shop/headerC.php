
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="homeCus.php">
    <img src="img/redcart.png" width="32" height="32" alt="">
  </a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    </ul>
  </div>
	<form class="form-inline">
  <div>	<img src="img/admin_img.png" alt="" width="32" height="32">
  <span class="navbar-text"  style = 'margin-right:0.75em; margin-left:0.5em; display:inline-block;'>
  <?php echo $_SESSION['uname']; ?>    
  </span>
  </div>
	</form>
</nav>

