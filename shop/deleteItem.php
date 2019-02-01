<?php include('connections.php'); ?>
<?php

if(isset($_POST['delete'])){
    $itemId = $_POST['itemID'];

    $query = "DELETE FROM items WHERE items.item_id = '$itemId'";
    $rs = mysqli_query($connect, $query);

    if (!$rs) {
      die('Query Failed ' . mysqli_error());
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
	<title>Delete Item</title>
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

  <div class="container" style= "width:60%">
  <h1 align ="center"><br></h1>
  <h2 align ="center">Delete Item</h2>
  <h6 align ="center"><br></h6>

  <form action="deleteItem.php" method="post">
    <div class="form-row">

      <div class="form-group col-md-4">
        <label for="itemID">Item ID</label>
        <input type="text" name="itemID" class="form-control"  placeholder="Item ID" required autofocus>
      </div>

    </div>

    <input class="btn btn-primary" type="submit" name="delete" value="Delete Item From Database">
  </form>

  </div>

<?php
if(isset($_POST['delete'])){
  if($rs){
    ?><p align="center">DELETED</p><?php
  }
}
?>
  <?php include('footer1.php'); ?>
</body>
</html>
