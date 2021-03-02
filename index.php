<?php
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Welcome to E-Market</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-in">
<div class="page">
<div class="main">
<div class="header">
<div class="header-top">
<h1>Electronics <span>Market</span></h1>
</div>
<div class="header-bottom">
<h2>Welcome! to your E-Market<br>
Explore here what you need ... !</h2>
</div>
<div class="topmenu">
<ul>
  <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href="index.php"><span>Home</span></a></li>
  <li><a href="aboutus.php"><span>About&nbsp;us</span></a></li>
  <li><a href="whatsnew.php"><span>What's&nbsp;new</span></a></li>
  <li><a href="#"><span>Services</span></a></li>
  <li><a href="contact.php"><span>Contact</span></a></li>
  <li><a href="products.php"><span>Products</span></a></li>
  <li><a href="login\login.php"><span>Log-In</span></a></li>
</ul>
</div>
</div>

<img src="images/copyright.gif" class="copyright" alt="http://www.usaonlinecasinos.org"></a>
<div class="content">
<div class="content-left">
  <div class="row1">
  <h1 class="title">Welcome To <span>E-Market</span></h1>
  <p><strong>Find your necessary products from here and contact us.</strong>
    <br><br><br><br>

    <table width="100%" border="1" style="border-collapse:collapse;">
        <thead>
        <tr><th><strong>S.No</strong></th><th><strong>Item Name</strong></th><th><strong>Amount</strong></th></tr>
        </thead>
        <tbody>
        <?php
        $count=1;
        $sel_query="SELECT * FROM `item_details`;";
        $result = mysqli_query($mysqli,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <tr><td align="center"><?php echo $count; ?></td>
          <td align="center"><?php echo $row["Item_name"]; ?></td>
          <td align="center"><?php echo $row["sales_amount"]; ?></td>

        </tr>

        <?php $count++; } ?>
        </tbody>
     </table>


  </div>
  <br><br><br><br><br>
</div>
<div class="content-right">

<div class="contact">
<h2 class="sidebar2">Contact</h2>
<div class="contact-detail">
<p class="green"><strong>Burdwan</strong></p>
<p><strong>Address :</strong>&nbsp;&nbsp; Purba-Bardhaman<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pin: 713104</p>
<p><strong>E-mail :</strong> &nbsp;&nbsp;&nbsp;aritra.algo@gmail.com
</p>
<p><strong>Phone :</strong> &nbsp;&nbsp;&nbsp;+91-8918993426<br>
</div>
</div>
</div>
</div>
<div class="footer">
<p>&copy; Copyright 2021. Designed by<a target="_blank" href="https://aritra-ghosh.web.app">Aritra Ghosh</a>
</p>
<ul>
  <li style="border-left: medium none;"><a href="index.html"><span>Home</span></a></li>
  <li><a href="aboutus.php"><span>About&nbsp;us</span></a></li>
  <li><a href="whatsnew.php"><span>What's&nbsp;new</span></a></li>
  <li><a href="#"><span>Services</span></a></li>
  <li><a href="#"><span>Contact</span></a></li>
  <li><a href="#"><span>Resources</span></a></li>
  <li style="padding-right: 0px;"><a href="#"><span>Links</span></a></li>
</ul>
</div>
</div>
</div>
</div>

</body></html>
