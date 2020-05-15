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
       width: 400px;
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

textarea{
        border-radius: 5px;
        border:3px solid brown;
}


textarea:hover{
              border-radius: 5px;
              border:3px solid gold;
}
}
#container{
  margin-top: 200px;
  margin-bottom:200px;  
  width: 900px;

  background-color: white;

  
}
#Sign-In{
margin-top:80px;
margin-bottom:150px;
margin-right:120px;
margin-left:150px;
border:3px solid #a1a1a1;
padding:9px 35px; 
background:white;
width:1000px;
border-radius:20px;
box-shadow: 7px 7px 6px;
background-image:url(imag/admin.jpg);
}
#button{
border-radius:10px;
width: 370px;
height:40px;
font-size:20px;
margin-left:50px;
}

 legend{
  font-family:century gothic;
  color:brown;
  width:700px;
 
 }    
 #field{
  color:brown;
  width:1000px;
  height:700px;
  float:center;
 }
 #nav2{
   height: 20px;
   background-color: cornflowerblue;
   align: center;
   border-radius: 3px
 }
 #nav2 ul{
      list-style: none;
}

#nav2 ul li a{
           float: left;
           text-decoration: none;
           color: white;
           padding: 0px 10px;
           line-height: 20px;
           height: 20px;
           font-family: century gothic;   
}

#nav2 ul li a:hover{
                 background-color: white;
                 color: cornflowerblue;
                 border-radius: 3px;
}

#nav2 ul li a:active{
                 background-color: white;
                 color: cornflowerblue;
                 border-radius: 3px;
}
#add{
margin-bottom:150px;
margin-right:150px;
margin-left:300px;
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
    <br>
    <br>
<div id="Sign-In">
<fieldset id="field">
<nav id="nav2">
<ul align="center">
<li><a href="addnew.php">Add New Car</a>
<li><a href="delete.php">Delete a car</a>
<li><a href="peaplebook.php">View People Who Book</a>
<li><a href="contactmanag.php">View Contact</a>
</ul>
</nav>
<br><br><br><br><br><br><br>
<center>
<form action"addnew.php" method="post" enctype="multipart/form-data" required>
<input type="file" name="file_img" required/>
&nbsp;&nbsp;&nbsp;
<input type="text" name="mark" placeholder="Name or Mark" required>
<br><br>
<input type="text" name="pass" placeholder="Passengers" required>
<br><br>
<input type="text" name="cat" placeholder="Category" required>
<br><br>
<input type="text" name="plat" placeholder="Plate number" required>
<br><br>
<input type="text" name="price" placeholder="Price/day" required>
<br><br>
<input type="submit" name="btn_upload" value="upload" id="button">
</form>
</fieldset>
</div>
</center>
<br>
<?php
$connect=mysqli_connect("localhost","root","","kcar-rental");
if(isset($_POST['btn_upload']))
{
$text=$_POST['mark'];
$textp=$_POST['pass'];
$textc=$_POST['cat'];
$textl=$_POST['plat'];
$textpr=$_POST['price'];
$filetmp=$_FILES['file_img']['tmp_name'];
$filename=$_FILES['file_img']['name'];
$filetype=$_FILES['file_img']['type'];
$filepath="image/".basename($_FILES['file_img']['name']);
move_uploaded_file($_FILES['file_img']['tmp_name'], $filepath);
$sql="INSERT INTO add_new(image_name,image_path,image_type,mark_name,passengers,category,plate,pripday ) VALUES ('$filename','$filepath','$filetype','$text','$textp','$textc','$textl','$textpr')";
mysqli_query($connect,$sql);
}
?>
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
