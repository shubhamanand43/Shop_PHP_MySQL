<h3 align="center">RedCart</h3>
<h6><br></h6>
<!-- <hr> -->
<?php
    $query = "SELECT * FROM items ORDER BY item_id DESC";
    $rs = mysqli_query($connect, $query);
?>

<div class="container">
    <div class="row">
        <?php
        if(mysqli_num_rows($rs) > 0)  {
            $i  = 0;
            while ($row = mysqli_fetch_array($rs)) {
                $i++;
        ?>

        <div class="col-lg-3">

            <form method="post" action="homeCus.php">

            <div style="border:0px solid #333; background-color:#EAF0F1; border-radius:20px; padding:16px;" align="center">

                <div>
                <img src="<?php echo $row["item_img"]; ?>" class="img-responsive" class="img-responsive" style="width:100%; padding:5px; border-radius:10px;"  width="100" height="150" /><br />
                </div>

                <h4 class="text-info"> <?php echo $row["item_name"]; ?></h4>
                <h4 class="text-danger"> INR <?php echo $row["item_price"]; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" style="width:30%" />

                <input type="submit" name="add_to_cart<?php echo $i ?>" style="margin-top:5px;" class="btn btn-success" value="<?php echo "Add to Cart" ?>" />
            </div><br>

            </form>

        </div>
            <?php
            if(isset($_POST['add_to_cart'.$i])){
                $itemName = $row["item_name"];
                $itemPrice = $row["item_price"];
                $quantity = $_POST['quantity'];
                $query2 = "INSERT INTO cartdata(item_name, quantity, item_price) values('$itemName', '$quantity', '$itemPrice')";
                $rs2 = mysqli_query($connect, $query2);

                // $customerNo = $_SESSION['customerC'];
                // $admin_uname = $_SESSION['uname'];

                // $query3 = "INSERT INTO shopdata(item_name, quantity, price, customer_no, admin_username) values('$itemName', '$quantity', '$itemPrice', '$customerNo', '$admin_uname')";
                // $rs3 = mysqli_query($connect, $query3);

            if($rs2){
                // echo "connected";
            }
            }
            }
        }
        ?>
    </div>
</div>

<!-- SELECT * FROM table ORDER BY ID LIMIT n-1,1 -->
