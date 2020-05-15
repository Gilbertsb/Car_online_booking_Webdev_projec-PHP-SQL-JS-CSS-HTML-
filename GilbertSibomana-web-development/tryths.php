<?php

$loc=$_GET['location'];
$rdate=$_GET['pdate'];
$pdate=$_GET['rdate'];

if ($loc=="1") {
  $location="Kigali-Down town";
} elseif ($loc=="2") {
  $location="Kigali-Airport";
} elseif ($loc=="3") {
  $location="Kigali-Nyabugogo";
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
    

#container {
    display: table;
    background-color:white;
    padding-top:20px;
    margin-top:100px;
    margin-bottom:100px;
    width:400px;
    

    }

  #row  {
    display: table-row;
    padding-left: 120px;
    width: 100px;
    padding-top:100px;
    }
    #row2{
        display: table-row;
        align-items: center;
        align-content: center;
        padding-left: 100px;
        width: 100px;
        border: solid brown 1px;
        padding-top:100px;
        
    }
    #row{
      display: table-row;
      padding-left: 120px;
      padding-right: 0px;
      padding-top:100px;

    }
    #left2, #right2{
    display: table-cell;
    padding-left: 120px;
    padding-right: 120px;
    border-bottom:solid brown 1px;
    font-size: 15px;
    font-family: Century Gothic;
    }

    #middle2{
    display: table-cell;
    padding-left: 120px;
    padding-right: 120px;
    border-bottom:solid brown 1px;
    font-size: 15px;
    font-family: Century Gothic;
    }

    

    #divi{
   height: 42px;
   background-color: brown;
   text-align: center;
   border-radius: 5px;
   width: 150px;
   

}

#divi a{
     color: white;
     text-decoration: none;
     font-family:Century Gothic;
     line-height: 42px;
     height: 42px;
     text-align: center;	 

}

#divi:hover{
         background-color: white;
         border: 3px solid brown;
         line-height: 42px;
         height: 42px;
         color: brown;
}

#button{
       width: 180px;
       height: 40px;
       background-color:brown;
       font-family:century gothic;
       color:white;
       font-size:20px;
       border-radius:6px;
       border:none;

}

#button:hover{
             border: 3px solid gold;
} 

#button:active{
            color: brown;
            box-shadow:0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}
.rown1{
     border:solid brown 1px;
     background-color:#D3D3D3;
     height:70px;

}
.td1{
      font-size: 18px;
      font-family: Century Gothic;
      padding-bottom:10px;
      padding-top:20px;
      float:center;
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
  <?php
  $mark='<b>Mark: </b>'; 
  $passenger='<b>Passengers:  </b>'; 
  $cateories='<b>Mark: </b>';
  $plate= '<b>Plate number: </b>'; 
  $price='<b> Price/day: </b>';
  $loca='<b> Location: </b>';
  $pick='<b> Pick up date: </b>';
  $return='<b> Return date: </b>';

          $connect=mysqli_connect("localhost","root","","kcar-rental");
          
  
                  $result = mysqli_query($connect,"SELECT * FROM add_new");
  echo"<center>";
  echo "<div id='container'>";
  echo"<div class='rown1'>";
  echo"<div id='left2' class='td1'>" .$loca. $location. "</div>";
  echo"<div id='middle2' class='td1'>" .$pick. $pdate. "</div>";
  echo"<div id='right2' class='td1'>" .$return. $rdate. "</div>";
  echo "</div>";
  while($row = mysqli_fetch_array($result))
    {
    $plat=$row['plate']; 
    echo "<div id='row1'>";
    echo "<form method='POST' action='regster.php?plat=$plat&loc=$location&pdate=$pdate&rdate=$rdate' name='reg_form' id='reg_form' autocomplete='off'>";
    echo "<input type='hidden' value='$plat' name='plat'>";
    echo "<input type='hidden' value='$location' name='loc' >";
    echo "<input type='hidden' value='$pdate' name='pdate' >";
    echo "<input type='hidden' value='$rdate' name='rdate' >";
    echo "<div id='left2'>";?> <img width='140' height='100' src=<?php echo "image/".$row['image_name'].">"?> <?php echo "</div>";
    echo "<div id='middle2' width='500'>".$mark. $row['mark_name'] . '<br>'.$passenger. $row['passengers'] .'<br>'.$plate. $row['plate'] .'<br>' .$price. $row['pripday'] . "</div>";
    echo "<div id='right2'>";?><input id="button" type="submit" value="Finish Booking" name="button"><?php echo "</td>";
    echo "</form>";
    echo "</div>";
    }
  echo "</div>";
  echo"</center>";
  ?>

</table>
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
  </body>



