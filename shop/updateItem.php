<?php include('connections.php'); ?>

<?php
if(isset($_POST['update'])){
    $itemname= $_POST['itemName'];
    $itemprice= $_POST['itemPrice'];
    $imagelink= $_POST['imageLink'];
    $itemid= $_POST['itemId'];
    if($connect){
        // echo "we are connected";
    } else {
        die("Database Connection Failed");
    }
    $query = "UPDATE items SET item_name = '$itemname', item_price = '$itemprice',item_img = '$imagelink' WHERE items.item_id = '$itemid'";
    $rs = mysqli_query($connect, $query);


    if (!$rs) {
        die('Query Failed ' . mysqli_error());
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
	<title>Update Item</title>
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
  <h2 align ="center">Update Item</h2>
  <h6 align ="center"><br></h6>

  <form action="updateItem.php" method="post">
  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="itemName">Item Name</label>
      <input type="text" name="itemName" class="form-control"  placeholder="Item Name" required autofocus>
    </div>

    <div class="form-group col-md-4">
      <label for="itemPrice">Item Price</label>
      <input type="text" name="itemPrice" class="form-control"  placeholder="Item Price" required autofocus>
    </div>

    <div class="form-group col-md-4">
      <label for="itemPrice">Item Id</label>
      <input type="text" name="itemId" class="form-control"  placeholder="Item Id" required autofocus>
    </div>

  </div>
  <div class="form-group">
    <label for="imageLink">Image link</label>
    <input type="text" name="imageLink" class="form-control" placeholder="link" required autofocus>
  </div>

   <input class="btn btn-primary" type="submit" name="update" value="Update Item">
</form>

</div>
 <?php
 if(isset($_POST['update'])){
   if($rs){
     ?><p align="center">UPDATED</p><?php
    }
  }
 ?>

  <?php include('footer1.php'); ?>
  <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>
