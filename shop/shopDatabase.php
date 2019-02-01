<?php include('connections.php'); ?>

<!DOCTYPE html>
<html>
  <head>
	<title>Shop Bill Database</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <link href="css/footer.css" rel="stylesheet">  
  <style>
    body { background-color: #DAE0E2; }
  </style>
  </head>
  <body>

  <?php  include('headerA.php'); ?>

  <div class="container">

  <h1 align="center"><br></h1>
  <h2 align="center">Shop Bill Database</h2>  
  <h6 align="center"> <br></h6>

  <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Admin Username</th>
      <th scope="col">Date_Time</th>
    </tr>
  </thead>
  <?php

  $query = "SELECT * FROM shopdata ORDER BY id DESC";
  $rs = mysqli_query($connect, $query);
  
  if(mysqli_num_rows($rs)>0){
    while ($row = mysqli_fetch_array($rs)) {
      ?>
      <tbody>
      
      <tr>
      <td> <?php echo $row['id']; ?> </td>
      <td> <?php echo $row['item_name']; ?> </td>
      <td> <?php echo $row['quantity']; ?> </td>
      <td> <?php echo $row['price']; ?> </td>
      <td> <?php echo $row['customer_no']; ?> </td>
      <td> <?php echo $row['admin_username']; ?> </td>
      <td> <?php echo $row['time_added']; ?> </td>
      </tr>
    
      </tbody>
      <?php
    }
  }
  ?>

</table>
</div>
  <?php include('footer.php'); ?> 
  <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>