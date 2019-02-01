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
  </head>

  <body>

  <?php  include('headerC.php'); ?>

  <?php  include('customer_stripC.php'); ?>

  <div class="container">

  <?php include('display_items.php'); ?>

  <div style="clear:both"></div>

  <?php  include('orderTable.php'); ?>
  <!-- <hr> -->
  </div>
  <?php include('footer2.php'); ?>
<script type="text/javascript" src="js/home.js"></script>
</body>
</html>
