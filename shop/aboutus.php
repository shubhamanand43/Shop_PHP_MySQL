<?php include('connections.php'); ?>

<!DOCTYPE html>
<html>
  <head>
	<title>About Us</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <style>
    body { background-image: url(img/MonteCarlo.jpg); height: auto; width: auto; }
    </style>
  <script> 
    // function clickAndDisable(link) {
    //  // disable subsequent clicks
    //  link.onclick = function(event) {
    //    event.preventDefault();
    //   }
    // }   
  </script>
  </head>

  <body>

  <?php  include('headerA.php'); ?>
  <h1><br></h1>
  <h1><br></h1>
  <div class="container" style = "background-color: white; width: 100%; border-radius: 25px;">
  <div class="jumbotron">
  <h1 class="display-4">
  <span class="navbar-text"  Style = 'margin-right:0.3em; margin-left:0.2em; display:inline-block;'>
  <a  href="home.php">
	<img src="img/redcart.png" width="50" height="50" alt="">
  </a>
  </span>redcart</h1>
  <p class="lead"> 
  This is a Simple Interface for the Shopkeepers to  Register their Customers, 
  to Manage their Item Database like ADD, UPDATE & DELETE, 
  to See Condition of their Shop going through with Transaction between Shop and Customer and
  to Know the demands of Customer. It also gives a Cart facility during Shop helps in Billing and very simple to add to cart.  
  </p>
  <p class="lead"> Happy to Help you more on <span> <a href="https://github.com/shubhamanand43"> https://github.com/shubhamanand43</a>  </span></p>

  </div>
  </div>
  <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>
