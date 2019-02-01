
<?php
if (isset($_POST['addCustomer'])) {

  $contactno = $_POST['contactNo'];
  $customername = $_POST['customerName'];
  $query =  "SELECT contact_no from customer where contact_no ='$contactno'";
  $rs= mysqli_query($connect, $query);

  if(mysqli_num_rows($rs) > 0){
    echo '<script>window.location="homeCus.php"</script>';  
  } else {
    $query1 = "INSERT INTO customer(contact_no, customer_name) values('$contactno','$customername')";
    $rs1 = mysqli_query($connect, $query1);
    echo '<script>window.location="homeCus.php"</script>';
  }

  $_SESSION['customerN'] = $customername;
  $_SESSION['customerC'] = $contactno;

}
?>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand"> </a>
  <form class="form-inline" method="post" action="home.php">
    <input class="form-control mr-sm-2" type="text" name="customerName" placeholder="Customer Name" required autofocus>
		<input class="form-control mr-sm-2" type="text" name="contactNo" placeholder="Contact No" required autofocus>
    <button class="btn btn-outline-success my-2 my-sm-0" name="addCustomer" type="submit">Submit</button>
  </form>
</nav>
