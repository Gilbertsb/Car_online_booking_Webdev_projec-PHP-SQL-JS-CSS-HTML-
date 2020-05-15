<?php
include('functions.php');

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['subject'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$approve='Not yet responded';

contact($firstname,$lastname,$email,$subject,$approve);
}
?>
  <!DOCTYPE html>
<html>
<title>Car rent</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" initial-scale="1" shrink-to-fit="yes">
    <link rel="stylesheet" href="css/style.css">
<style>
body{
background-image: url(imag/rwanda-244e.jpg) ;
}
#button{
       width: 160px;
       height: auto;
       background-color:brown;
       font-family:century gothic;
       color:white;
       font-size:20px;
}

#button:hover{
             border: 3px solid gold;
             background-color:white;
             color:brown; 
} 
#container{
  margin-top: 200px;
  margin-bottom:200px;  
  width: 900px;

  background-color: white;

  
}
#row1{
      display: table-row;
      padding-left: 120px;
      padding-right: 0px;
      border-radius: 5px;
      border:solid brown 1px;
      width: 500px;

    }
 
    input,textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  float:center;
}

input[type=submit] {
  width:200px;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  width:700px;  
  background-color: #f2f2f2;
  margin-top:100px;
  margin-bottom:200px;
}
label{
    float:left;
    padding-left:50px;
    font-family:century gothic;
}
h3{
    font-family:century gothic;
    font-size:20px;
    background-color:brown;
    color:white;
}

</style>
</heade>
<body>
<nav id="navbar">
<a id="bar" href="index.html">HOME</a>
<a id="bar" href="aboutus.html">ABOUT US</a>
<a id="bar" href="contact.php">CONTACT</a>
<a id="bar" href="Booking.php">BOOK YOUR CAR</a>
<nav id="sign">
<a id="signid" class="signcls" href="signup.php">Signin</a>
<a id="signid" href="login.php">Login</a>
</nav>
</nav>
<center>
<div class="container">
<h3>Contact Form</h3>
  <form method="post" action="contact.php">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="country">Email    :</label>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
    <input type="email" id="lname" name="email" placeholder="Your emai.." required>

    <label for="subject">Subject:</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit" id="button">
  </form>
</div>
   
<center>
	 <table width="1340" height="100" align="center" bgcolor="brown">
<tr>
</td>
<td>
<a href="#"><b>Home</b></a>
&nbsp;&nbsp;&nbsp;
<a href="#"><b>About us</b></a>
&nbsp;&nbsp;&nbsp;
<a href="#"><b>Contact</b></a>
</td>
</tr>
<table width="1340" height="35" align="center" bgcolor="black">
<tr>
<td align="center">
<font color="grey" face="arial">2020 © Kigali car rental ltd</font>
</html>




