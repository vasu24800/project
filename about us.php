<?php
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
background-color:;
    font-size: 28px;
}

.style1 {font-size: 36px}
.style2 {font-size: 24px}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #330000;
 
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:green;
}

.active {
    background-color:white;
	align:right;
}
.style6 {font-size: 36px; color: #000000; }
.style7 {font-size: 24px; color: #000000; }
.footer{background-color:#CCCCCC}
.style8 {color: #FFFFFF}
.style9 {font-size: 24px; color: #FFFFFF; }
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}

</style>
<div class="header"></div>

<ul>
  <li> <img src="alpino-logo.png" width="167" height="62">
  <li  style="float:right" >    <a href="contact.php" >CONTACT</a></li>
  <li  style="float:right"><a  href="about us.php">ABOUT US</a></li>
  <li  style="float:right"><a  href="why us.php">WHY US</a></li>
   <li  style="float:right"><a href="product.php">PRODUCT</a></li>
<li  style="float:right"><a href="index.php">HOME</a></li>
<li  style="float:right"><a href="login.php" name="logout"> LOGOUT</a></li>
</ul>
<div>
  <h3 class="style1">Who Are We?</h3>
</div>
<div class="style2">We Are Manufacturing And Supplying Good Quality Of Food Products. Alpino Delicacy Hold Its Head Office In Gujarat, India. We Have Established Ourselves As The Notable Name For Quality, As We Offer Products That Are Hygienically Prepared Under Expert Supervision. What We Offer Is Soft, Tasty, And Has No Added Colors.&nbsp;Our Products Are Pure, Fresh And Best In Taste. Our Products Are Manufactured With Best Quality Raw Materials And Strict Quality Control.&nbsp;<br />
  Our Name, Alpino Delicacy, Is Synonymous With Our Love And Passion For The Food That We Make. All Our Products Are Manufactured Using The Recipes That Are Passed Down From Generations And Are Tried &amp; Tested Methods To Preserve The Authenticity.</div>
<hr>
<div>
  <h3 class="style1">What Are We Offer?</h3>
</div>
<div class="style2">We Offer High Quality&nbsp;<strong>Peanut Butter</strong>, Which Is Known For Its Yummy Taste. It Is Used In Preparation Of Various Products In Order To Make Them Appealing To Taste Buds.&nbsp;With The Backing Of Our Adept Professionals, We Are Engrossed On Offering A Premium Range Of Peanut Butter. Peanut Butter In Three Flavors Crunchy, Creamy And Chocolate. Our Peanut Butter Is Stored, Packaged And Delivered In The Most Efficient Manner So As To Ensure Maximum Customer Satisfaction.</div><hr>
<table width="1343" height="255" bgcolor="#333333">
		<tr>
		<td width="650" height="249">
		<div class="style5">
		<h3 align="center" class="style6 style8"> Contact Us</h3>
		<div class="style9"> 
		  <div align="center">Email us @ support@alpinodelicacy.com</div>
		</div>
		<div class="style7">
		  <p align="center" class="style8">Contact @ +91-83 4747 5000</p>
		  </div></td>
		  <td width="681">
		  <p align="left" class="style8">FOLLOW US</p>
		  <a href="https://www.facebook.com/alpinodelicacy/?notif_t=page_user_activity&notif_id=1475810531055186" class="fa fa-facebook"></a>
		  <a href="https://www.instagram.com/alpino_peanut_butter/?hl=en"class="fa fa-instagram"></a>
		  <a href="https://plus.google.com/102325417845147862296" class="fa fa-google"></a></td>
		</tr>
</table>
	     <p align="center" class="footer">2018 Alpino Delicacy. All Rights Reserved. |&nbsp;<a href="index.php" target="_blank">Alpino Delicacy</a></p>
</body>
</html>
