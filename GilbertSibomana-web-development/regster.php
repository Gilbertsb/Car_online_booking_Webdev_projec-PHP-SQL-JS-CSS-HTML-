<?php
$platnum=$_GET['plat'];
$loca=$_GET['loc'];
$r_date=$_GET['rdate'];
$p_date=$_GET['rdate'];
 
?>

<!DOCTYPE html>
<html>
<title>Car rent</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1" shrink-to-fit="yes">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="Js/javas.js"></script>


    <style>

body{
background-image: url(imag/rwanda-244e.jpg) ;
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
#pick,#drop{
     width: 200px;
     height: 30px;
     border-radius: 5px;
     border: 3px solid brown;    
}

#pick:hover,#drop:hover{
           width: 200px;
           height: 30px;
           border-radius: 5px;
           border: 3px solid gold;
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

textarea{
        border-radius: 5px;
        border:3px solid brown;
}


textarea:hover{
              border-radius: 5px;
              border:3px solid gold;
}


form{
    background-color: white;
    
}


#container{
  padding-top:50px;
  padding-bottom:50px;
  


}
#whtc{
     border-radius: 12px;
     background-color:white;
    
     
   

}
#row{
      display: table-row;
      padding-left: 120px;
      padding-right: 0px;

    }
    #left3, #middle3{
    display: table-cell;
    padding-left: 120px;
    padding-right: 0px;
    padding-top:0px;
    border:solid brown 1px;
    border-radius: 5px;
    float:center;
    font-family:century gothic;
    background-color:#E6E6FA;
   select{
    width: 400px;
     height: 30px;
     border-radius: 5px;
     border: 3px solid brown;
   } 
   .red{
     color:red;
     font-size:15px;
     font-family:arial;
   } 
   #reg_form{
     height:300px;
   }
   #order{
     border: solid brown 1px;
     padding-bottom:30px;
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
</nav>

<br>
<center>
<div id="container">
<table id="whtc">
<tr><td align="center">
<font color="grey" face="Century Gothic" size="30">Book your Car now !!</font></td></tr>
<tr><td align="center">
<form method="POST" action="Succesfulpage.php?email" name="reg_form" id="reg_form" autocomplete="off">
<div id="order">     
  <?php
 
  $platenum=$platnum;
      
  $connect=mysqli_connect("localhost","root","","kcar-rental");
        
  $result = mysqli_query($connect,"SELECT * FROM add_new WHERE plate='$platenum'");
  echo"<center>";
  echo "<div id='container'>";
  while($row = mysqli_fetch_array($result))
  {

    $image_nameu=$row['image_name'];
    $image_pathu=$row['image_path'];
    $image_typeu=$row['image_type'];
    $mark_nameu=$row['mark_name'];
    $pripdayu=$row['pripday'];
    $passengersu=$row['passengers'];
    echo "<div id='row2'>";
    echo "<div id='left3'>";?> <img width='90' height='60' src=<?php echo "image/".$row['image_name'].">"?> <?php echo "</div>";
    echo "<div id='middle3'>". $row['mark_name'] .'<br>'.$row['plate'] .'<br>' .$row['pripday'] ."</div>";
    echo "<input type='hidden' value='$platnum' name='plat'>";
    echo "<input type='hidden' value='$loca' name='loc' >";
    echo "<input type='hidden' value='$r_date' name='p_date' >";
    echo "<input type='hidden' value='$p_date' name='r_date' >";
    echo "<input type='hidden' value='$image_nameu' name='image_name'>";
    echo "<input type='hidden' value='$image_pathu' name='image_path'>";
    echo "<input type='hidden' value='$image_typeu' name='image_type'>";
    echo "<input type='hidden' value='$mark_nameu' name='mark_name'>";
    echo "<input type='hidden' value='$pripdayu' name='pripday'>";
    echo "<input type='hidden' value='$passengersu' name='passengers'>";
    echo "</div>";
  }
  echo "</div>";
  echo"</center>";
  ?>

  <input id="pick" class="text" type="text" placeholder="First name(required)" name="fname" required>
  <input id="drop" class="text" type="text" placeholder="Last name(required)" name="lname" required>
  <br><br>
  <input class="text" type="email" placeholder="Your E-mail(required)" name="email" id="emails" required>
  <br><br>
  <input class="text" type="number" placeholder="Your phone number(required)" minlength="10" maxlength="10" name="phone" id="phone" tabindex="10" value="" required>
  <br><br>
  <input id="button" type="submit" value="Finish Booking" name="button">
</div>
</form>
</td>
</tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="1340" height="100" align="center" bgcolor="brown">
<tr>
</td>
<td>
<a href="ymnahomepag1.html"><b>Home</b></a>
&nbsp;&nbsp;&nbsp;
<a href="ymnabautusg1.html"><b>About us</b></a>
&nbsp;&nbsp;&nbsp;
<a href="ymnacontactpag1.html"><b>Contact</b></a>
</td>
<td align="right">
</td>
</tr>
<table width="1340" height="35" align="center" bgcolor="black">
<tr>
<td align="center">
<font color="grey" face="arial">2020 © Kigali car rental ltd</font>
</body>
</html>