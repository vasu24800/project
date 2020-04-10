<?php
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?><!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
background-color:;
    font-size: 28px;
}

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
.style4 {font-size: 36px}
.style3 {font-size: 18px;}
.style5 {font-size: 24px}
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
<li  style="float:right"><a href="login.php" name="logout">LOGOUT</a></li>
</ul>

</div>
<h3 class="style4">Why Us?</h3>
        <p class="style3">Alpino Delicacy Is A Distinguished Manufacturer, Exporter & Supplier Of Creamy Peanut Butter And Crunchy Peanut Butter. Some Of The Unique Business Attributes That Set Us Apart Are:</p>
        <p class="style3">Ethical Business Practices </p>
        <p class="style3">Team Of Experts</p>
		<p class="style3">Hygienic Processing And Packaging</p>
		<p class="style3">Unmatched Quality</p>
		<p class="style3">Vast Distribution Network</p>
		<p class="style3">Safe And Timely Delivery</p><hr>
	  <div>
  <div>
    <div>
      <h3 class="style1 style4">We Committed To Quality, Committed To You</h3>
    </div>
    <div class="style2 style3">We Put Food Safety First. You Can Be Assured That Alpino Peanut Butter Is Safe For You And Your Family To Eat. There Is Nothing More Important To Us Than The Safety And Quality Of Our Peanut Butter. We Are Constantly Mindful That Thousands People Trust Us To Provide Safe Peanut Butter Every Day. We Follow Rigorous Food Safety Practices And Take Part In State-Of-The-Art Training Programs. In Addition To Training, We Regularly Engage External Experts To Provide Guidance To Our Quality And Safety Programs And Continuously Learn About New Food Safety Practices. We Are Committed To Providing Safe Peanut Butter To You And Your Family.</div>
  </div>
  <div></div>
</div><hr>
<div>
  <div>
    <div>
      <h3 class="style1 style4">Our Mission</h3>
    </div>
    <div class="style2 style5"><span class="style3">Our Mission Is To Nourish People's Lives By Offering A Wide Variety Of Convenient, Delicious, And Affordable Food Choices That Can Help Everyone Enjoy A Balanced, Healthful Diet</span>.</div>
  </div>
 
</div><hr>
<div>
<div>
  <div>
    <h3 class="style1 style4">Our Vision</h3>
  </div>
  <div class="style2 style3">To Be A Global Leader In Food Products And Social Responsible Company&nbsp;That Attains Its Quality Standards So That Alpino Stands For Tradition, Trust And Good Taste.</div>
</div>
<hr>
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
