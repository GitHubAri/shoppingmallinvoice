<?php
require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM `item_details` WHERE id=$id";
$result = mysqli_query($mysqli,$query);
header("Location: view_items.php");
?>
