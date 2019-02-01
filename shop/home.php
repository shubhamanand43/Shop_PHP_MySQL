<?php include('connections.php'); ?>

<!DOCTYPE html>
<html>
  <head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <style>
    body { background-color: #f8f9fa; }
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

  <?php  include('customer_stripA.php'); ?>

  <div class="container">

  <?php include('display_itemsA.php'); ?>
  <?php # include('display_itemsAP.php'); ?>
  <!-- <hr> -->
  </div>
  <?php include('footer.php'); ?>
  <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>
