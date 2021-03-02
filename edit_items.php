<?php
require('config.php');
$id=$_REQUEST['id'];
$query = "SELECT * from item_details where id='".$id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
 ?>

<!DOCTYPE html>
<html>
<head>
<style>
.header{
  background-color: #4CAF50;
  color: white;
  width: 100%;
  height: 15%;
  text-align: center;
}
input[type=text],[type=number],[type=date] {
     width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #008000;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.main{
  color: green;
  text: 100px;
  font-family: Impact, Charcoal, sans-serif;
  font-weight: bold;
  font-size: 30px;
  word-spacing: 30px;
}
</style>
</head>
<title>ADD ITEMS</title>
<body>
  <div class="header">
    <h1> E-Market</h1>
  </div>
</div>
<div class="" style="background-color: #4CAF90">
<h3 align="center">
  <a href="index.php"><span>Home</span></a><br>
  <a href="user.php"><span>Go&nbsp;to&nbsp;User&nbsp;page</span></a><br>
  <a href="view_items.php"><span>View&nbsp;Items</span></a><br>
  <a href="invoice/index.php"><span>Generate&nbsp;Ivoice</span></a><br>
  <a href="additems.php"><span>Add &nbsp; new &nbsp; Items</span></a><br>
  <a href="login\login.php"><span>Log-In</span></a><br>
</h3>
</div>
  <div class="main">
      <form action="edit_item_db.php" method="post" align="middle">
              <label for="id"> Goods_ID  :</label><input type="number" name="id"  value="<?php echo $row['id'];?>"><br>
              <label for="item_name">Item_Name  :</label><input type="text" name="item_name"  value="<?php echo $row['Item_name'];?>"><br>
              <label for="pamount">Purchase_Amount  :</label><input type="number" name="purchase_amount"  value="<?php echo $row['purchase_amount'];?>"><br>
              <label for="amount">Selling_Price  :</label><input type="number" name="amount"  value="<?php echo $row['sales_amount'];?>"><br>
              <label for="date">Purchase_Date  :</label><input type="date" name="date"  value="<?php echo $row['purchase_date'];?>">
              <input type="submit" value="Update">
      </form>

  </div>
</body>
</html>
