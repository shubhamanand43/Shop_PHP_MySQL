<?php# include('display_items.php'); ?>
<?php
$k=0;
// $i=0;
while($k<10)
{
    $k++;
    // $i++;
?>
<form  action="addtocart.php" method="post">
<input type="submit" name="add_to_cart<?php echo $k; ?>" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
</form>
<?php

if(isset($_POST['add_to_cart'.$k])){
$n=$k;
print_r($n);
}
}
?>
