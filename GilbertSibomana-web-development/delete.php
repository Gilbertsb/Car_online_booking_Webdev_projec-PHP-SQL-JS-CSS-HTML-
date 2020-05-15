<?php
$dbname='kcar-rental';
mysqli_connect("localhost","root","",$dbname);
$connect=mysqli_connect("localhost","root","",$dbname);
$button=isset($_POST['button']);
$button1=isset($_POST['button2']);
$plt=isset($_POST['plt']);


if($button1)
{
  $sqlr=("DELETE FROM add_new WHERE plate='" . $_POST['plt'] . "'");
  if (!mysqli_query($connect,$sqlr))

  {
  die('Error: ' . mysqli_error($connect));
  }
}
mysqli_close($connect);
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
form{
    background-color: white;
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
#row0,#row1{
  font-family:century gothic;
  font-size:13px;
  
} 
select{
   font-family:century Gothic;
   color:gray;
   width: 400px;
   height: 30px;
   border-radius: 5px;
   border: 3px solid brown;

}
select:hover{
          width: 400px;
           height: 30px;
           border-radius: 5px;
           border: 3px solid gold;
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
<br><br>
<?php
      $connect=mysqli_connect("localhost","root","","kcar-rental");

                $result = mysqli_query($connect,"SELECT * FROM add_new");
echo"<center>";

echo "<table cellspacing='0' cellpodding='0'  width='500' height='200' id='whtc' border='1' bgcolor='white'>
<tr>
<th id='row1'>Mark name</th>
<th id='row1'>Plate</th>
<th id='row1'>Image</th>
<th id='row1'>Passangers</th>
<th id='row1'>Price</th>

</tr >";

while($row = mysqli_fetch_array($result))
  {
    
  echo "<tr id='row1'>";
  echo "<td id='row0'>" . $row['mark_name'] . "</td>";
  echo "<td id='row0'>" . $row['plate'] . "</td>";
  echo "<td id='row0'>";?> <img width='90' height='60' src=<?php echo "image/".$row['image_name'].">"?> <?php echo "</td>";
  echo "<td id='row0'>" . $row['passengers'] . "</td>";
  echo "<td id='row0'>" . $row['pripday'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo"</center>";
?>
<form method="post" action="delete.php">
<center>
<select id="user" class="text" name="plt">
                  <?php
                   $connect=mysqli_connect("localhost","root","","kcar-rental");
                   $result = mysqli_query($connect,"SELECT * FROM add_new");

                    while($row=mysqli_fetch_array($result))
                    {
                    ?>
                  <option name="plt"><?php echo $row["plate"];    ?></option>
                  <?php
                      }
                  ?>
                </select>
                
<input id="button" type="submit" value="Delete a car" name="button2">
</form>
</center>
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
</html>
