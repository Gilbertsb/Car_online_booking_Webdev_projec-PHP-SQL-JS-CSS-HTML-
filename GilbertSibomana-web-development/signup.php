<?php
include('functions.php');

if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['Cpass'])){
$fulname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['Cpass'];

signup($fulname,$username,$email,$pass,$cpass);

}
?>

<!DOCTYPE html>
<html>
<title>Car rent</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1" shrink-to-fit="yes">
    <link rel="stylesheet" href="css/style.css">
<style>
html { overflow-y: visible;}
body{
background-image: url(imag/rwanda-244e.jpg) ;
position: absolute; 
}
 
input{
     width: 400px;
     height: 30px;
     border-radius: 5px;
     border: 3px solid brown;
} 

input:hover{
           width: 400px;
           height: 30px;
           border-radius: 5px;
           border: 3px solid gold;
}
#labels{
     font-family:century gothic; 
     color: brown;
}


#button{
       width: 200px;
       height: 40px;
       background-color:brown;
       font-family:century gothic;
       color:white;
       font-size:20px;

}

#button:hover{
             border: 3px solid gold;
} 
form{
    background-color: white;
}
#whtc{
     border-radius: 12px;
     height:500px;
     
}
#container{
     height:500px;
     padding-bottom:200px;
     margin-top:70px;
    
}

   .red{
     color:red;
     font-size:15px;
     font-family:arial;
   } 
 
</style>
                                                            
</head>

<body>
<nav id="navbar">
<a id="bar" href="index.html">HOME</a>
<a id="bar" href="aboutus.html">ABOUT US</a>
<a id="bar" href="contact.php">CONTACT</a>
<a id="bar" href="Booking.php">BOOK YOUR CAR</a>
<nav id="sign">
<a id="signid" class="signcls" href="signup.php">Sign Up</a>
<a id="signid" href="login.php">Login</a>
</nav>
<br>
<center>
<div id="container">
<table width="600" height="600" align="center" bgcolor="white" id="whtc">
<tr><td align="center">
<font color="grey" face="Century Gothic" size="40">Create your account</font></td></tr>
<tr><td align="center">
<form method="post" action="signup.php" name="create_form" id="reg_form" autocomplete="off">
     <label id="labels">Full name</label>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
<input class="text" type="text" placeholder="Your names(required)" minlength="5" name="fullname" id="names" required>
<br><br>
<label id="labels">User name:</label>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input class="text" type="text" placeholder="User name(required)" minlength="5" name="username" id="names" required>
<br><br>
<label id="labels">Email:</label>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
<input class="text" type="email" placeholder="Your E-mail(required)" name="email" id="emails" required>
<br><br>
<label id="labels">Password:</label>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
<input class="text" type="password" placeholder="Password(required)" minlength="6" name="pass" id="names" required>
<br><br>
<label id="labels">Confirm Password:</label>

<input class="text" type="password" placeholder="Confirm password(required)" minlength="6" name="Cpass" id="names" required>
<br><br>
<input id="button" type="submit" value="Create account" name="button">
</form>
</td>
</tr>
</table>
</div>
</table>
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
</body>
</html>
