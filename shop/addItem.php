<?php include('connections.php'); ?>

<?php
if(isset($_POST['addItem'])){

    $itemname= $_POST['itemName'];
    $itemprice= $_POST['itemPrice'];
    $imagelink= $_POST['imageLink'];

    $query = "INSERT INTO items(item_name, item_price, item_img) Values( '$itemname', '$itemprice', '$imagelink')";
    $rs = mysqli_query($connect, $query);

    if (!$rs) {
      die('Query Failed ' . mysqli_error());
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
	<title>Add Item</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <link href="css/footer.css" rel="stylesheet">
  <style>
    body { background-color: #DAE0E2;  height: auto; width: auto; }
  </style>
  </head>

  <body>

  <?php  include('headerA.php'); ?>

  <div class="container" style= "width:60%">
  <h1 align ="center"><br></h1>
  <h2 align ="center">Add Item</h2>
  <h6 align ="center"><br></h6>

  <form action="addItem.php" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="itemName">Item Name</label>
        <input type="text" name="itemName" class="form-control"  placeholder="Item Name" required autofocus>
      </div>

      <div class="form-group col-md-6">
        <label for="itemPrice">Item Price</label>
        <input type="text" name="itemPrice" class="form-control"  placeholder="Item Price" required autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="imageLink">Image link</label>
      <input type="text" name="imageLink" class="form-control" placeholder="link" required autofocus>
    </div>

    <input class="btn btn-primary" type="submit" name="addItem" value="Add Item">
  </form>

</div>
<?php
if(isset($_POST['addItem'])){
  if($rs){
    ?><p align="center">ADDED</p><?php
   }
 }
?>
  <?php include('footer1.php'); ?>
  <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>
