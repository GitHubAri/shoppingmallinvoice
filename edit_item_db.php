<?php
include "config.php";
$item_id = $_REQUEST['id'];
$items = $_REQUEST['item_name'];
$p_amount = $_REQUEST['purchase_amount'];
$s_amount = $_REQUEST['amount'];
$p_date = $_REQUEST['date'];
$update="UPDATE `item_details` SET `id`='$item_id',`Item_name`=$item,`purchase_amount`='$p_amount',`sales_amount`='$s_amount',`purchase_date`='$p_date'";
mysqli_query($mysqli, $update);
echo "Item Submited <br><br><br>";
echo "Item Name = " ,$items,"<br>";
echo "Item Price = " ,$s_amount,"<br>";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Item Added...</title>
  </head>
  <body align = "center">
    <br>
    <br>
    <a href="index.php">HOME-PAGE</a> <br>
    <br>
    <a href="users.php">INVOICE-GENERATOR</a>
  </body>
</html>
