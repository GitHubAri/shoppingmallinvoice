<?php
require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM `invoice` WHERE id=$id";
$result = mysqli_query($mysqli,$query);
header("Location: invoice/index.php");
?>
