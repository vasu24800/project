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
.style2 {font-size: 24px; }
.style3 {font-size: 18px;}
.btn {
  border: 2px solid black;
  background-color: white;
  color: green;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}


.success {
  border-color: #4CAF50;
  color: green;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}



.style4 {font-size: 36px}
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
.style10 {font-size: 16px}
</style>
</head>
<body>

<div class="header"></div>

<ul>
  <li> <img src="alpino-logo.png" width="162" height="58">
  <li  style="float:right" >    <a href="contact.php" class="style10" >CONTACT</a></li>
  <li  style="float:right"><a  href="about us.php" class="style10">ABOUT US</a></li>
  <li  style="float:right"><a  href="why us.php" class="style10">WHY US</a></li>
   <li  style="float:right"><a href="product.php" class="style10">PRODUCT</a></li>
<li  style="float:right"><a href="home.php" class="style10">HOME</a></li>
<li  style="float:right"><a href="login.php" name="logout" class="style10">LOGOUT</a></li>

</ul>

</div>
<table width="1300" border="0" cellpadding="20" align="center">
  <tr>
    <td width="347"><h4 align="center" class="style2"><img src="smooth.jpg" width="200" height="200"></h4>
        <h4 align="center" class="style2">SMOOTH PEANUT BUTTER</h4>
      <p align="center" class="style3">Spread On The Smiles With Smooth, Creamy Peanut Buttery Perfection. Alpino Smooth Peanut Butter Adds More Yum And Fun To Just About Anything</p>
	  <button class="btn succsess" >
	  <div align="center"><a href="product.html">read more</a>
        </button>
      </div></td>    <td width="377" bordercolor="#9966FF"><h4 align="center" class="style2"><img src="crunch.jpg" width="200" height="200"></h4>
        <h4 align="center" class="style2">CRUNCH PEANUT BUTTER</h4>
      <p align="center" class="style3">Craving Peanutty Taste That Packs A Crunch? Look No Further Than Alpino Crunch Peanut Butter. Every Jar Is Blended With Loads Of Real Peanut</p>
	    <button class="btn succsess" >
	  <div align="center"><a href="product.html">read more</a>
        </button></td>
    <td width="440"><h4 align="center" class="style2"><img src="chocolate.PNG" width="200" height="200"></h4>
        <h4 align="center" class="style2">CHOCOLATE PEANUT BUTTER</h4>
      <p align="center" class="style3">Chocoholics And Peanut Butter Fans Unite For A Crazy Good Combo That You'll Want To Spread On Whatever You Can Eat.</p>
	    <button class="btn succsess" >
	  <div align="center"><a href="product.html">read more</a>
        </button></td>
  </tr>
</table>
  <table width="800" border="0" cellpadding="20" align="left">
  <tr>
    <td width="349"><h4 align="center" class="style2"><img src="Natural Smooth.png" width="200" height="200"></h4>
      <h4 align="center" class="style2">NATURAL SMOOTH PEANUT BUTTER</h4>
      <p align="center" class="style3">Alpino Natural Peanut Butter Is The Most Delicious And Nutritious Peanut Butter Available Today. Made With Just Peanuts. Brings You Direct 'From The Nuts'.</p>
	    <button class="btn succsess" >
	  <div align="center"><a href="product.html">read more</a>
    </button></td>
    <td width="314" bordercolor="#F0F0F0"><h4 align="center" class="style2"><img src="natural crunch.png" width="200" height="200"></h4>
      <h4 align="center" class="style2">NATURAL CRUNCH PEANUT BUTTER</h4>
      <p align="center" class="style3">Alpino Natural Peanut Butter Is The Most Delicious And Nutritious Peanut Butter Available Today. Made With Just Peanuts. Crunch Flavour Makes It Yummier.</p>
	    <button class="btn succsess" >
	  <div align="center"><a href="product.html">read more</a>
    </button></td>
    </tr><hr>
</table>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 <hr>
  <table width="1102" border="0" cellpadding="10">
    <tr>
      <td width="594"><h3 class="style4">What Make It The Healthiest ?</h3>
        <p class="style3">Rich In Protein</p>
        <p class="style3">Rich In Nutrients Hence Boosts Energy </p>
        <p class="style3">Rich In Fiber So Help In Metabolism</p>
		<p class="style3">Heart-Friendly</p>
		<p class="style3">Healthy Fat</p>
		<p class="style3">Crisp Fress</p>
		<p class="style3">Ready To Eat Smooth And Creamy On The Tongue</p>
	  <p class="style3">Peanut Butter Contains Good Amounts Of Iron, Zinc, Manganese And Selenium</p></td>
      <td width="456"><h3 class="style4">Eat It The Way You Like It</h3>
      <p class="style3">Spread Peanut Butter On Toast, Chapati Or Biscuits</p>
      <p class="style3"> Add Peanut Butter With Smoothies        </p>
      <p class="style3">Go Straight From The Jar        </p>
      <p class="style3">Make A Classic Peanut Butter Sandwich        </p>
      <p class="style3">Add Peanut Butter On Fruits Or Vegetable Slices      </p>
      <p class="style3">Make Peanut Butter Flavour Of Ice-Cream For More Go To Our Recipe Tab</p></td>
    </tr>
</table><hr>
  <div>
    <h3 class="style4">Who Are We?</h3>
  </div>
  <div class="style3">We Are Manufacturing And Supplying Good Quality Of Food Products. Alpino Delicacy Hold Its Head Office In Gujarat, India. We Have Established Ourselves As The Notable Name For Quality, As We Offer Products That Are Hygienically Prepared Under Expert Supervision. What We Offer Is Soft, Tasty, And Has No Added Colors.&nbsp;Our Products Are Pure, Fresh And Best In Taste. Our Products Are Manufactured With Best Quality Raw Materials And Strict Quality Control.&nbsp;<br>
    Our Name, Alpino Delicacy, Is Synonymous With Our Love And Passion For The Food That We Make. All Our Products Are Manufactured Using The Recipes That Are Passed Down From Generations And Are Tried &amp; Tested Methods To Preserve The Authenticity.</div>
  <button class="btn succsess" >
	  <div align="center"><a href="about us.html">read more</a>
        </button></td><hr>
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
	     <p align="center" class="footer">2018 Alpino Delicacy. All Rights Reserved. |&nbsp;<a href="home.html" target="_blank">Alpino Delicacy</a></p>
</body>
</html>

