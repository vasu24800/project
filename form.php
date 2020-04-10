<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
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

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<p align="center"><h3>ALPINO QUERY FORM</h3></p>
<form method="post" action="form.php">
<div>
  
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your answer">

    <label for="Email id">E-mail Id</label>
    <input type="text" id="Email-id" name="emailid" placeholder="Your Email-id">
   
    <label for="Contact">Contact NO.</label>
    <input type="text" id="Contact no" name="contact" placeholder="Your Contact no.">
	
	<label for="Query">Your Query</label>
    <input type="text" id="query" name="QUERY" placeholder="Your Qurey">

  
    <input type="submit" name="submit" value="Submit">
 
</div>
</form>
</body>
</html>


<?php
if (isset($_POST['submit'])){
    $db = mysqli_connect('localhost', 'root', '', 'registration');
    $f1=$_POST['firstname'];
    $e1=$_POST['emailid'];
    $c1=$_POST['contact'];
    $q1=$_POST['QUERY'];

    $sql="INSERT INTO form1 (first_name,Email,Contact,Qurey) VALUES('$f1','$e1','$c1','$q1')";
    mysqli_query($db, $sql);

}
