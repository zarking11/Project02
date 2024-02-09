<?php

include('db.php');
    
    if(isset($_POST["btns"])){

        $un = $_POST["un"];
        
        $e = $_POST["e"];

        $p = $_POST["p"];

        $hash = password_hash($p,PASSWORD_DEFAULT); 

        $qdup = "Select * from user where email = '$e'";

        $rdup = mysqli_query($con,$qdup);

        $countd = mysqli_num_rows($rdup);

        if($countd){
            echo "Email already exists";
        }
        else{
    
        $qdup = "Insert into user(username,email,password)values('$un','$e','$hash')";

       $rdup =  mysqli_query($con,$qdup);
        }
        
        if($rdup){

         
            header('location:d.php');
        }
        else{
            echo " Not Inserted ";
        }
    }
    
    ?>