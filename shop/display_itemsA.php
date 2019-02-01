<h3 align="center">RedCart</h3>
<h6><br></h6>

<?php
    $query = "SELECT * FROM items ORDER BY item_id DESC";
    $rs = mysqli_query($connect, $query);
?>

<div class="container">
    <div class="row">
        <?php
        if(mysqli_num_rows($rs))  {
            while ($row = mysqli_fetch_array($rs)) {
        ?>

        <div class="col-lg-3">

            <form method="post" action="#">

                <div style="border:0px solid #333; background-color:#EAF0F1; border-radius: 20px; padding:16px;" align="center">

                    <div class="container">
                    <img src="<?php echo $row["item_img"]; ?>" class="img-responsive" style="width:100%; border-radius:10px"  width="100" height="150" /><br />
                    </div>

                <h4 class="text-info"> <?php echo $row["item_name"]; ?></h4>
                <h4 class="text-danger"> INR <?php echo $row["item_price"]; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" style="width:30%" />

                <input type="submit" name="add_to_cart<?php echo $i ?>" style="margin-top:5px;" class="btn btn-success" value="<?php echo "Add to Cart" ?>" />
            </div><br>

            </form>

        </div>
            <?php
            }
        }  
        ?>
    </div>
</div>
