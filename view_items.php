<?php
require('config.php');
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <style media="screen">
     .header{
       background-color: #4CAF50;
       color: white;
       width: 100%;
       height: 15%;
       text-align: center;
     }
     </style>
     <meta charset="utf-8">
     <title>VIEW ITEMS</title>
   </head>
   <body>
     <div class="header">
       <h1> E-Market</h1>

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

     </div><br><br>
      <h4><u> Description of all items</u></h4><br><br>
  <table width="100%" border="1" style="border-collapse:collapse;">
      <thead>
      <tr><th><strong>S.No</strong></th><th><strong>Item Name</strong></th><th><strong>Purches Amount</strong></th><th><strong>Sales Amount</strong></th> <th><strong>Date</strong></th> <th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
      </thead>
      <tbody>
      <?php
      $count=1;
      $sel_query="SELECT * FROM `item_details`;";
      $result = mysqli_query($mysqli,$sel_query);
      while($row = mysqli_fetch_assoc($result)) { ?>
      <tr><td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["Item_name"]; ?></td>
        <td align="center"><?php echo $row["purchase_amount"]; ?></td>
        <td align="center"><?php echo $row["sales_amount"]; ?></td>
        <td align="center"><?php echo $row["purchase_date"]; ?></td>
        <td align="center"><a href="edit_items.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
        <td align="center"><a href="delete_items.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
      </tr>

      <?php $count++; } ?>
      </tbody>
   </table>

      <br /><br /><br /><br />
      

   </body>
 </html>
