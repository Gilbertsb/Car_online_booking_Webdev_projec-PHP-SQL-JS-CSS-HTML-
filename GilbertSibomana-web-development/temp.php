<?php
$email=$_GET['email'];
$id=$_GET['id'];

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

textarea{
        border-radius: 5px;
        border:3px solid brown;
}


textarea:hover{
              border-radius: 5px;
              border:3px solid gold;
}

a{
 text-decoration: none;
 color: white;
 font-family: arial;
}

a img{
     box-shadow: 10px 8px 10px;
     color: white;
     border-radius: 8px;
}

a img{
     box-shadow: 10px 8px 10px;
     color: white;
     border-radius: 8px;
}
#Sign-In{
margin-top:110px;
margin-bottom:150px;

border:3px solid #a1a1a1;
padding:9px 35px; 
background:white;
width:500px;
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
#temp{
  font-family:century gothic;
  color:brown;
  font-size:40px;
    
}
#container{
  padding-top:50px;
  padding-bottom:50px;
  border:solid brown 1px;

  
}
#collect{
  padding-top:50px;
  padding-bottom:50px;
  border:solid brown 1px;
  height:200px;
  
}
#row2{
      display: table-row;
      padding-left: 120px;
      padding-right: 0px;
      border-radius: 5px;
      border:solid brown 1px;

    }
    #left3,#middle3{
    display: table-cell;
    padding-left: 120px;
    padding-right: 0px;
    padding-top:0px;
    float:center;
    font-family:century gothic;
    background-color:#E6E6FA;
    width:50px;
    border:solid brown 1px;
    }
    legend{
         background-color:brown;
         color:white;
    }
    h2{
         padding-top:0px;
         font-family:century gothic;
    }
    #red{
     font-family:century gothic;
     color:red;
    }
    #green{
     font-family:century gothic;
     color:green;
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
<a id="signid" class="signcls" href="login.php">Logout</a>
<a id="signid" href="login.php">  </a>
</nav>
</nav>
<center>
<div id="Sign-In">
     <?php
     $connect=mysqli_connect("localhost","root","","kcar-rental");
        
     $result = mysqli_query($connect,"SELECT * FROM signup WHERE email='$email'");
     echo"<center>";
     echo "<div id='container'>";
     while($row = mysqli_fetch_array($result))
     {
          echo"<legend><h2>WELECOME ".$row['username']."</h2></legend>";
     }
    $result = mysqli_query($connect,"SELECT * FROM attempt_book_tb WHERE Email='$email'");
    while($row = mysqli_fetch_array($result))
    {

     echo"<center>";
     echo "<div id='collect'>";
     echo "<h2><b>Your Bookings</b></h2>";
     echo "<div id='row2'>";
     echo "<div id='left3'><b>Names</b></div>";
     echo "<div id='left3'><b>Items</b></div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Book number: </div>";
     echo "<div id='left3'>". $row['Record_id'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Car: </div>";
     echo "<div id='left3'>";?> <img width='60' height='40' src=<?php echo "image/".$row['image_name'].">"?> <?php echo "</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Plate number: </div>";
     echo "<div id='left3'>". $row['Plate_number'] ."</div>";
     echo "</div>";
     echo "</div>";
     if($row['Approved_Not_yet']=='Approved'){
          echo"<img width='30' height='30' src='imag/yes.png'><h5 id='green'>Your booking is Approved</h5>";

     }
     else{
          echo"<img width='30' height='30' src='imag/no.png'><h5 id='red'>Your booking is Not yet Approved</h5>";
     }
     
    }
     echo"</center>";
     echo "</div>";


?>

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