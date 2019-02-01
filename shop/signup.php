<?php include('connections.php'); ?>

<?php
if(isset($_POST['signup'])){
    
    $adminusername = $_POST['userName'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $fname = $_POST['inputFirstName'];
    $lname = $_POST['inputLastName'];
    $address = $_POST['inputAddress'];
    $city = $_POST['inputCity'];
    $state = $_POST['inputState'];
    $zip = $_POST['inputZip'];
    $pan = $_POST['inputPan'];
    
    $query = "INSERT INTO admin(admin_username, email, password, fname, lname, address, city, state, zip, pan) Values( '$adminusername', '$email', '$password', '$fname', '$lname', '$address', '$city', '$state', '$zip', '$pan')";
    $rs = mysqli_query($connect, $query);

    if(!$rs){
        die('Query Failed ' . mysqli_error());
    }
    echo '<script>window.location="login.php"</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
    <link href="css/bootstrap4.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
    <style>
    body { background-image: url(img/MonteCarlo.jpg); }
    </style>
</head>
<body >
<!-- <div class="container" style="width: 40%; margin: 10%"> -->
<form class="form-signup" action="signup.php" method="post">
  <div class="container" style = "background-color: #f8f9fa; width: 100%; border-radius: 25px;">
    <h4><br></h4>
    <h4 align="center">Admin Details</h4>
	<div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" name="inputEmail" placeholder="Email" required autofocus>
    </div>

	<div class="input-group mb-3">
     	<input type="text" class="form-control" name="userName" placeholder="Username" aria-label="Username" aria-describedby="button-addon2" required autofocus>
	</div>

    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" name="inputPassword" placeholder="Password" required autofocus>
    </div>
    <div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" name="inputFirstName" placeholder="First Name" required autofocus>
        </div>

        <div class="form-group col-md-6">
			<label for="inputLasttName">Last Name</label>
            <input type="text" class="form-control" name="inputLastName" placeholder="Last Name" required autofocus>
        </div>
    </div>

    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="inputAddress" placeholder="" required autofocus>
    </div>

    <div>
    	<div class="form-group">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="inputCity" required autofocus>
        </div>

        <div class="form-group">
            <label for="inputState">State</label>
            <input type="text" class="form-control" name="inputState" required autofocus>
        </div>

        <div class="form-group">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" name="inputZip" required autofocus>
        </div>

				<div class="form-group">
            <label for="inputZip">PAN Card No</label>
            <input type="text" class="form-control" name="inputPan" required autofocus>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" name="signup"value="Sign Up">
    <a href="login.php" class="btn btn-danger" >Back To Login</a>
    <h4><br></h4>    
  </div>
</form>
<!-- </div> -->

<script type="text/javascript" src="js/action.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</body>
</html>
