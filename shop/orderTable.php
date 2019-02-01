
<h3 align="center"><br></h3>
<h3 align="center">Order Details</h3>
<h6 align="center"><br></h6>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th width="30%">Item Name</th>  
            <th width="15%">Quantity</th> 
            <th width="15%">Price</th>  
            <th width="15%">Total</th>
            <th width="15%">Action</th>
        </tr>  
        <?php
        $query0 = "SELECT * FROM cartdata ";
        $rs0 = mysqli_query($connect, $query0);
        $total =0;
        if(mysqli_num_rows($rs0)>0){
            $k=0;
            while ($row0 = mysqli_fetch_array($rs0)) {
                $k++;
                ?>
                <tbody>

                <tr>
                <form action="homeCus.php" method="post">
                <td><?php echo $row0["item_name"]; ?></td>  
                <td><?php echo $row0["quantity"]; ?></td>  
                <td>INR <?php echo $row0["item_price"]; ?></td>  
                <td>INR <?php echo number_format($row0["quantity"] * $row0["item_price"], 2); ?></td>  
                <td><input type="submit" name="remove<?php echo $k ?>" class="text-danger" value="Remove"></td>  
                </form>
                </tr>  

                </tbody>
                <?php  
                $total = $total + ($row0["quantity"] * $row0["item_price"]);

                if(isset($_POST['remove'.$k])){
                    $item = $row0["item_name"];
                    $query3 ="DELETE FROM cartdata WHERE item_name = '$item' ";
                    $rs3 = mysqli_query($connect, $query3);

                    // $customerNo = $_SESSION['customerC'];
                    // $admin_uname = $_SESSION['uname'];

                    // $query4 = "INSERT INTO shopdata(item_name, quantity, price, customer_no, admin_username) values('$itemName', '$quantity', '$itemPrice', '$customerNo', '$admin_uname')";
                    // $rs4 = mysqli_query($connect, $query4);

                    if($rs3){
                        echo '<script>window.location="homeCus.php"</script>';
                        // header('location: homeCus.php');
                        // echo "d connected";
                    }
                } 
            }
        }    
            ?>  
            <tr>  
              <form action="homeCus.php" method="post">
                <td colspan="3" align="right">Total</td>  
                <td align="right">INR <?php echo number_format($total, 2); ?></td>
                <td><input type="submit" name='submitshop' class="btn btn-primary" value="Submit to Main"></td>
              </form> 
            </tr>  
            <?php  
            if(isset($_POST['submitshop'])){
                
                $customerNo = $_SESSION['customerC'];
                $admin_uname = $_SESSION['uname'];

                $query4 = "SELECT * FROM cartdata ";
                $rs4 = mysqli_query($connect, $query4);
                if(mysqli_num_rows($rs4)>0){
                    while ($row4 = mysqli_fetch_array($rs4)) {
                    
                        $itemS = $row4["item_name"];  
                        $quantityS = $row4["quantity"];  
                        $itempriceS = $row4["item_price"];

                        $query5 = "INSERT INTO shopdata(item_name, quantity, price, customer_no, admin_username) values('$itemS', '$quantityS', '$itempriceS', '$customerNo', '$admin_uname')";
                        $rs5 = mysqli_query($connect, $query5);
                        if($rs5){
                            echo "Submitted";
                        }
                    }
                }
            }     
        ?>  
    </table>  
</div>  