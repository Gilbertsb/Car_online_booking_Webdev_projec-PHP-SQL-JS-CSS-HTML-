<?php
$ema=$_GET['email'];
include('functions.php');

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['image_name']) && isset($_POST['image_path']) && isset($_POST['image_type']) && isset($_POST['mark_name']) && isset($_POST['pripday']) && isset($_POST['plat']) && isset($_POST['loc']) && isset($_POST['p_date']) && isset($_POST['r_date']) && isset($_POST['passengers'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $image_name = $_POST['image_name'];
  $image_path = $_POST['image_path'];
  $image_type = $_POST['image_type'];
  $mark_name = $_POST['mark_name'];
  $pripday = $_POST['pripday'];
  $plat = $_POST['plat'];
  $loc = $_POST['loc'];
  $p_date = $_POST['p_date'];
  $r_date = $_POST['r_date'];
  $passengers = $_POST['passengers'];
  $approve='Not yet approved';


  book($fname,$lname,$email,$phone,$image_name,$image_path,$image_type,$mark_name,$pripday,$plat,$loc,$p_date,$r_date,$passengers,$approve);

}   
?>
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
#temp{
  font-family:century gothic;
  color:brown;
  font-size:40px;
    
}
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.mybutton{
    width: 200px;
    height: 40px;
    background-color:#B22222;
    font-family:century gothic;
    color:white;
    font-size:20px;
    border-radius: 5px;
}
#container{
  padding-top:50px;
  padding-bottom:50px;
  


}
#row2{
      display: table-row;
      padding-left: 120px;
      padding-right: 0px;

    }
    #middle3{
    display: table-cell;
    padding-left: 120px;
    padding-right: 0px;
    padding-top:0px;
    border:dashed brown 1px;
    border-radius: 5px;
    float:center;
    font-family:century gothic;
    background-color:#E6E6FA;
    }
    #left3{
    display: table-cell;
    padding-left: 120px;
    padding-right: 0px;
    padding-top:0px;
    border:solid brown 1px;
    border-radius: 5px;
    float:center;
    font-family:century gothic;
    background-color:#E6E6FA;
    width:30px;
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
</nav>
<div id="Sign-In">
     <center>
     <img src="imag/success.gif" width="150" height="130">
</center>
	<p id="temp">YOU HAVE SUCCESSFULLY BOOKED YOUR CAR!! </p>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php
    $connect=mysqli_connect("localhost","root","","kcar-rental");
    $result = mysqli_query($connect,"SELECT * FROM attempt_book_tb WHERE Email='$email'");
    while($row = mysqli_fetch_array($result))
    {
     echo"<center>";
     echo "<div id='container'>";
     echo "<h2><b>REVIEW</b></h2>";
     echo "<div id='row2'>";
     echo "<div id='left3'><b>Names</b></div>";
     echo "<div id='left3'><b>Items</b></div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Book number: </div>";
     echo "<div id='middle3'>". $row['Record_id'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Email: </div>";
     echo "<div id='middle3'>". $row['Email'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Phone number: </div>";
     echo "<div id='middle3'>". $row['Phone_number'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Date: </div>";
     echo "<div id='middle3'>". $row['Pdate'] .'<br>'.$row['Rdate'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Location: </div>";
     echo "<div id='middle3'>". $row['Location'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Car: </div>";
     echo "<div id='middle3'>";?> <img width='60' height='40' src=<?php echo "image/".$row['image_name'].">"?> <?php echo "</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Plate number: </div>";
     echo "<div id='middle3'>". $row['Plate_number'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Price: </div>";
     echo "<div id='middle3'>". $row['Price'] ."</div>";
     echo "</div>";
     echo "<div id='row2'>";
     echo "<div id='left3'>Passangers: </div>";
     echo "<div id='middle3'>". $row['Passengers'] ."</div>";
     echo "</div>";
     echo "</div>";
    }
  


    ?>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// open the modal 
  modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
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