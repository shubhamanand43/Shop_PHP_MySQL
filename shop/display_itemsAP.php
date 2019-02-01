<h3 align="center">RedCart</h3>
<h6><br></h6>

<?php
    $query = "SELECT * FROM items ORDER BY item_id DESC";
    $rs = mysqli_query($connect, $query);
?>

<div class="container">
    <div class="row">
        <?php
        $rs_per_page=5;
        $no_of_rs = mysqli_num_rows($rs);
        echo $no_of_rs." " ;
        $no_of_pages = ceil($no_of_rs/$rs_per_page);
        $page=1;
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }

        $this_page_first_result = ($page-1) * $rs_per_page;
        echo $this_page_first_result ;
        $current = $this_page_first_result;
        echo $current ;
        // if($page==)
        // $previous = 
        $query5 = "SELECT * FROM items ORDER BY item_id DESC LIMIT '$current','$rs_per_page'";
        $rs5= mysqli_query($connect, $query5);

        // if(mysqli_num_rows($rs5))  {
            while ($row = mysqli_fetch_array($rs5)) {
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
        // }  
        ?>

<nav aria-label="...">
  <ul class="pagination pagination-lg">
<?php for ($page=1; $page <= $no_of_pages ; $page++) {  ?>
    <li class="page-item"><a class="page-link" href=home.php?page=<?php echo $page; ?>"> <?php echo $page; ?> </a></li>
<?php }  ?>
  </ul>
</nav>

    </div>
</div>
