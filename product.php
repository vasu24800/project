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
.style3{
overflow:hidden;
background-color: #663300;
font-family:Arial, Helvetica, sans-serif;
}
.style3 a{
float:left;
font-size: 16px;
color:#FFFFFF;
text-align:center;
padding:14px 16px;
text-decoration:none;
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

<div>
  <h3 align="center" class="style1">Smooth Peanut Butter</h3>
  <p align="center" class="style1"><img src="smooth.jpg" alt="f" width="349" height="389" /></p>
</div>
<div class="style2">
  <p>Smooth Peanut Butter is made from roasted peanuts. Peanut Butter is a rich &amp; inexpensive source of protein supplement. It can be safety stored at room temperature &amp;requires no refrigeration. Our peanut butter is manufactured by roasting, blanching, grinding &amp; mixing fresh groundnut kernels. As a result, we get intense smooth textured Smooth Peanut Butter. Peanut Butter is a healthy breakfast food It can be spread on a toast &amp; can be combined with various foods. It can be whisked into salad dressings &amp; dips &amp; can be stirred into cookie better. Delicious chocolate &amp; pastries are also made with peanut butter flavor.</p><hr>
  <div>
    <h3 align="center" class="style1">Crunchy Peanut Butter</h3>
    <p align="center" class="style1"><img src="crunch.jpg" width="349" height="389" /></p>
  </div>
  <div>Crunchy Peanut Butter have been added piece of peanuts for extra heavenly taste. It is also good source of protein, other helpful vitamins, minerals and dietary fibers. Crunchy Peanut Butter is also used as spread for breads. It is also used as a dip for fresh fruit &amp; as a filling in cookies and pastries</div><hr>
  <div>
    <h3 align="center" class="style1">Chocolate Peanut Butter</h3>
    <p align="center" class="style1"><img src="chocolate.png" width="349" height="389"></p>
  </div>
  <div>Chocolate is blended with our Smooth Peanut Butter Which Results in a tasty Chocolate Peanut Butter Spread. It is not only tasty but also healthy compare to only Chocolate Spreads. It tastes great with Waffles, Pancakes, Sandwiches and Smoothies.</div><hr>
  <div>
    <h3 align="center" class="style1">Natural Smooth Peanut butter</h3>
    <p align="center" class="style1"><img src="Natural Smooth.png" width="369" height="389" /></p>
  </div>
  <div>
    <p>Alpino Natural Peanut Butter Is The Most Delicious And Nutritious Peanut Butter Available Today. Made With Just Peanuts. Brings You Direct 'From The Nuts'.</p><hr>
    <div>
      <h3 align="center" class="style1">Natural Crunch Peanut Butter</h3>
      <p align="center" class="style1"><img src="natural crunch.png" width="369" height="389" /></p>
    </div>
    <div>Alpino Natural Peanut Butter Is The Most Delicious And Nutritious Peanut Butter Available Today. Made With Just Peanuts. Crunch Flavour Makes It Yummier.</div>
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
