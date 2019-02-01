<?php include('connections.php'); ?>

<!DOCTYPE html>
<html>
  <head>
	<title>Customer</title>
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
  <h6 align="center"><br></h6>
  <h4 align="center"> All Item Details</h4>
  <h6 align="center"><br></h6>
  <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th width="10%" scope="col">#</th>
      <th width="20%" scope="col">Item ID</th>
      <th width="20%" scope="col">Item Name</th>
      <th width="20%" scope="col">Item Price</th>
      <th width="20%" scope="col">Date Added</th>
    </tr>
  </thead>
  <?php
  $query = "select * from items order by item_id desc" ;
  $rs = mysqli_query($connect, $query);

  if(mysqli_num_rows($rs)>0){
    $i=0;
      while ($row = mysqli_fetch_array($rs)) {
        $i++;
        ?>
    <tbody>
    <tr>
    <td> <?php echo $i ; ?> </td>
    <td> <?php echo $row['item_id']; ?> </td>
    <td> <?php echo $row['item_name']; ?> </td>
    <td>INR  <?php echo $row['item_price']; ?> </td>
    <td> <?php echo $row['date_added']; ?> </td>
    </tr>
  
    </tbody>
    <?php
  }
}
?>

</table>

</div>
  <?php  include('footer.php'); ?> 
  <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>
