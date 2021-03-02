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
    <h1>  E-Market </h1>
  </div><br><br>
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

  <?php
	require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['id'])){
		$id = stripslashes($_REQUEST['id']);
		$id = mysqli_real_escape_string($mysqli,$id);
		$Item_name = stripslashes($_REQUEST['Item_name']);
		$Item_name = mysqli_real_escape_string($mysqli,$Item_name);
		$purchase_amount = stripslashes($_REQUEST['purchase_amount']);
		$purchase_amount = mysqli_real_escape_string($mysqli,$purchase_amount);
    $sales_amount = stripslashes($_REQUEST['sales_amount']);
		$sales_amount = mysqli_real_escape_string($mysqli,$sales_amount);
    $purchase_date = stripslashes($_REQUEST['purchase_date']);
		$purchase_date = mysqli_real_escape_string($mysqli,$purchase_date);
        $query = "INSERT into `item_details` (id, Item_name, purchase_amount, sales_amount, purchase_date) VALUES ('$id', '$Item_name', '$purchase_amount', '$sales_amount', '$purchase_date')";
        $result = mysqli_query($mysqli,$query);
        if($result){
            echo "<div class='form'><h3>You have entered Item successfully.</h3><br/><br/>Click here to <a href='index.php'>Home</a></div>";
        }
    }else{
  ?>
    <form action="" method="post" align="middle">
            <label for="id"> Goods_ID  :</label><input type="number" name="id"><br>
            <label for="Item_name">Item_Name  :</label><input type="text" name="Item_name" required><br>
            <label for="purchase_amount">Purchase_Amount  :</label><input type="number" name="purchase_amount" required><br>
            <label for="sales_amount">Selling_Price  :</label><input type="number" name="sales_amount" required><br>
            <label for="purchase_date">Purchase_Date  :</label><input type="date" name="purchase_date">
            <input type="submit" value="Submit">
    </form>
  </div>

  <?php } ?>
</body>
</html>
