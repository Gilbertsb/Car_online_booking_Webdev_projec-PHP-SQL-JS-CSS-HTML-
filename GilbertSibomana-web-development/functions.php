<?php
function signup($fulname,$username,$email,$pass,$cpass){
    
    $connnection=mysqli_connect("localhost", "root", "", 'kcar-rental');
    
    if($connnection===false){
        die("Cloud not connect...".mysqli_connect_error());
    
    }
    $query="INSERT INTO signup(fullname,username,email, passwords, cpassword) 
    VALUES('$fulname','$username','$email','$pass','$cpass')";

    if($pass!=$cpass){
        mysqli_connect_error();
        echo '<script>alert("Password and Confirmation password are not equal!!")</script>';
        exit;
       
        
    }
    

    if(mysqli_query($connnection, $query)){
        echo '<script>alert("Your account is created Successfully!!")</script>';
    }
    else{
        echo '<script>alert("Something went wrong try again please!!")</script>';
        
        mysqli_error($connnection);
    }
    mysqli_close($connnection);
}

function book($fname,$lname,$email,$phone,$image_name,$image_path,$image_type,$mark_name,$pripday,$plat,$loc,$p_date,$r_date,$passengers,$approve){
    
    $connnection=mysqli_connect("localhost", "root", "", 'kcar-rental');
    
    if($connnection===false){
        die("Cloud not connect...".mysqli_connect_error());
    
    }
    
    $query="INSERT INTO attempt_book_tb(image_name, image_path, image_type, mark_name, F_name, L_name, Email, Phone_number,Price,Plate_number,Location,Pdate,Rdate,Passengers,Approved_Not_yet) 
    VALUES('$image_name','$image_path','$image_type','$mark_name ','$fname','$lname','$email','$phone','$pripday','$plat','$loc','$p_date','$r_date','$passengers','$approve')";
    $sqlr=("DELETE FROM add_new WHERE plate='" .$plat. "'");
    
    if(mysqli_query($connnection, $query)){
        mysqli_query($connnection, $sqlr);
        echo '<script>alert("You Successfully booked you car!!")</script>';
    }
    else{
        echo '<script>alert("Something went wrong try again please!!")</script>';
        
        mysqli_error($connnection);
    }
    mysqli_close($connnection);
}

function contact($firstname,$lastname,$email,$subject,$approve){
    
    $connnection=mysqli_connect("localhost", "root", "", 'kcar-rental');
    
    if($connnection===false){
        die("Cloud not connect...".mysqli_connect_error());
    
    }
    echo'connect to db';

    $query="INSERT INTO contact(fname,lname,email,message,Approved_Not_yet) 
    VALUES('$firstname','$lastname','$email','$subject','$approve')";
    
    if(mysqli_query($connnection, $query)){
        echo '<script>alert("We have received your message we will reach to you back soon!!")</script>';
    }
    else{
        echo '<script>alert("Something went wrong try again please!!")</script>';
        
        mysqli_error($connnection);
    }
    mysqli_close($connnection);
}

?>