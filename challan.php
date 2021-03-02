<?php
include "config.php";

if (isset($_POST['price']))
{
  if ($_REQUEST['particulars'] != "" || $_REQUEST['price'] != "" || $_REQUEST['quantity'] != "" || $_REQUEST['gst'] != "" ||
 $_REQUEST['sub_total'] != "") {
  $particulars = $_POST['particulars'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $gst = $_POST['gst'];
  $sub_total = ($price*$quantity*$gst);


  $db = mysqli_query($mysqli, "INSERT INTO `invoice`(`sl_no`, `particulars`, `unit_price`, `quantity`, `gst`, `subtotal`) VALUES (NULL,'$particulars','$price','$quantity','$gst','$sub_total')");
}
else {
  $q="select * from invoice";
  $num=mysqli_query($mysqli,$q);
  while ($res=mysqli_fetch_array($num)) {
   $i=$res[0];
   $id = $_REQUEST['id'.$i];
   $particulars = $_REQUEST['particulars'.$i];
   $price = $_REQUEST['price'.$i];
   $quantity = $_REQUEST['quantity'.$i];
   $gst = $_REQUEST['gst'.$i];
   $sub_total = $_REQUEST['sub_total'.$i];
   $db = mysqli_query($mysqli,"UPDATE `item_details` SET `id`='',`particulars`='$particulars',unit_price`='$price',`quantity`='$quantity',`gst`='$gst',`subtotal`='$sub_total' where `id` = '$i'");
}
}
}
?>


<DOCTYPEhtml>
  <!DOCTYPE html>
  <html>
  <style media="screen">
  .inputText{
    box-sizing: border-box;
    margin: 4px 0;
    display: inline-block;
    border: 2px solid #008000;
  }
  .header{
    background-color: #4CAF50;
    color: white;
    width: 100%;
    height: 15%;
    text-align: center;
  }
  .calculation{
    width: auto;
    height: auto;
  }
  .seller{
    float: left;
    background-color: blue;
    color: white;
    width: 75%;
    height: 20%;
    text-align: left;
  }
  .challanDetails{
    float: right;
    background-color: blue;
    color: white;
    width: 25%;
    height: 20%;
    text-align: left;
  }
  </style>
    <head>
      <meta charset="utf-8">
      <title>SHOPPING MALL INVOICE SYSTEM</title>
    </head>
    <body>
      <div class="header">
        <h1>E-Market</h1>
      </div>
      <div class="" style="background-color: #4CAF90">
      <h3 align="center">
        <a href="index.php"><span>Home</span></a><br>
        <a href="index.php"><span>Go&nbsp;to&nbsp;User&nbsp;page</span></a><br>
        <a href="view_items.php"><span>View&nbsp;Items</span></a><br>
        <a href="challan.php"><span>Generate&nbsp;Ivoice</span></a><br>
        <a href="additems.php"><span>Add &nbsp; new &nbsp; Items</span></a><br>
        <a href="login\login.php"><span>Log-In</span></a><br>
      </h3>
      </div>
      <br><br>
      <div class="seller">
        E-Market PVT. LTD.<br>
        Jamalpur<br>
        Jamalpur<br>
        Burdwan - 713401<br>
        P.H. - <br>
        e-mail ID - debabrata@gmail.com<br>
      </div>
      <div class="challanDetails">
        CHALLAN NO: <input type="text" name="challanno" required><br>
        DATE: <input type="date" name="date" required><br>
        COUSTOMER ID: <input type="text" name="coustomerid" required><br>
      </div>

    </div>

      <div class="inputText">
      <form action="" method="post" align="center">
        <table id="invoice-amount">
          <thead>
            <tr id="header_row">
              <th>PARTICULARS</th>
              <th>Unit Price (&#8377;)</th>
              <th>Quantity</th>
              <th>GST</th>
              <th>Subtotal (&#8377;)</th>
            </tr>
          </thead>
          <?php
          $quary = mysqli_query($mysqli, "select * from invoice");
          while ($data=mysqli_fetch_row($quary))
           {
             $id=$data[0];
              ?>
            <tr><input type="hidden" name="id<?php echo $data[0]; ?>" value="<?php echo $data[0]; ?>" />
              <td><input type="text" name="particulars<?php echo $data[0]; ?>" value = "<?php echo $data[1]; ?>"></td>
              <td><input type="text" name="price<?php echo $data[0]; ?>" value = "<?php echo $data[2]; ?>"></td>
              <td><input type="text" name="quantity<?php echo $data[0]; ?>" value = "<?php echo $data[3]; ?>"></td>
              <td><input type="text" name="gst<?php echo $data[0]; ?>" value = "<?php echo $data[4]; ?>"></td>
              <td><input type="text" name="sub_total<?php echo $data[0]; ?>" value = "<?php echo $data[5]; ?>"></td>
              <td align="center"><a href="delete.php?id=<?php echo $data[0]; ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
             <tr>
               <td><input type="text" name="particulars"></td>
               <td><input type="text" name="price"></td>
               <td><input type="text" name="quantity"></td>
               <td><input type="text" name="gst"></td>
               <td><input type="text" name="sub_total"></td>
             </tr>
            <tr>
              <td><input type="submit" name="save" value="ADD NEW"></td>

            </tr>
        </table>
      </form>
      </div>

    </body>
  </html>
