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
  <h4 align="center"> All Customer Details</h4>
  <h6 align="center"><br></h6>
  <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th width="10%" scope="col">#</th>
      <th width="20%" scope="col">Name</th>
      <th width="20%" scope="col">Contact No</th>
      <th width="20%" scope="col">Money Spent Total</th>
      <th width="20%" scope="col">Date Joined</th>
    </tr>
  </thead>
  <?php
  $query = "select t2.customer_name, t2.contact_no, t1.money_spent, t2.date_joined from ( select customer_no, sum( quantity*price ) as money_spent from shopdata group by customer_no order by money_spent DESC ) t1 inner join ( select customer_name, contact_no, date_joined from customer ) t2 on ( t1.customer_no = t2.contact_no ) order by money_spent desc";
  $rs = mysqli_query($connect, $query);

  if(mysqli_num_rows($rs)>0){
    $i=0;
      while ($row = mysqli_fetch_array($rs)) {
        $i++;
        ?>
    <tbody>
    <tr>
    <td> <?php echo $i ; ?> </td>
    <td> <?php echo $row['customer_name']; ?> </td>
    <td> <?php echo $row['contact_no']; ?> </td>
    <td>INR  <?php echo $row['money_spent']; ?> </td>
    <td> <?php echo $row['date_joined']; ?> </td>
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
