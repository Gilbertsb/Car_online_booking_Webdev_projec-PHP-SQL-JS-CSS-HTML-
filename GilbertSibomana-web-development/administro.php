<?php
session_start();

session_start();
$dbname='kcar-rental';
mysqli_connect("localhost","root","",$dbname);
$connect=mysqli_connect("localhost","root","",$dbname);
if(isset($_SESSION['logintb'])!="")
{
  header("Location: logintb");
}
$button=isset($_POST['button']);

if($button)
{
	 if (!empty($_POST['username']) AND !empty($_POST['password'])) 
  {
    
      $username =($_POST['username']);
      $password =($_POST['password']);

	$get=mysqli_query($connect,"SELECT * FROM logintb WHERE username='$username' AND password='$password'");
	$get2=mysqli_num_rows($get);

	if($get2==1)
	{
		$ge=mysqli_fetch_assoc($get);
		$id=$ge['id'];
		$username=$ge['username'];
		$password=$ge['password'];
 

            if ($get2['password'] == $pasword)
        	{
        	     $_SESSION['id'] = $id;	
        	     $_SESSION['username'] = $Username;	

        	     header("location: ymnadmin1.php?id=$id");
	}
        	}
	}
}
      else
      {
        $error_sms = "Username and Password is Incorrect !";
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
body{
background-image: url(imag/rwanda-244e.jpg) ;
}
input{
     width: 400px;
     height: 40px;
     border-radius: 5px;
     border: 3px solid brown;
     font-size:20px;
     font-family:century gothic;
} 

input:hover{
           width: 400px;
           height: 40px;
           border-radius: 5px;
           border: 3px solid gold;
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
a{
 text-decoration: none;
 color: white;
 font-family: arial;
}

#Sign-In{
margin-top:150px;
margin-bottom:150px;
margin-right:150px;
margin-left:450px;m
border:3px solid #a1a1a1;
padding:9px 35px; 
background:white;
width:400px;
border-radius:20px;
box-shadow: 7px 7px 6px;

}
#button{
border-radius:10px;
width:100px;
height:40px;
font-size:20px
}

 legend{
  font-family:century gothic;
  color:brown;
 }    
 fieldset{
  color:brown;
 }
</style>

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
<div id="Sign-In">
<fieldset style="width:30%"><legend>Log-in here</legend>
	<form action="administro.php" method="post">
              		<br><br><br>
                <input type="text" placeholder= "User name" name="username" id="user" size="40%">
                <br><br><br>
                <input type="password" placeholder= "Password" name="password" id="pass" size="40%">
                <br><br><br>
                <input type="submit" value="Login" name="button" id="button" size="20%">
            </form>
</form>
</fieldset>
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
</body>
</html>