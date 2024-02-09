<?php
include('db.php');
    
    if(isset($_POST["btnl"])){

        $un = $_POST["un"];
        
        $p = $_POST["p"];

        $query = "select username , password from user where username = '$un'";

       $result =  mysqli_query($con,$query);

        
        $count = mysqli_num_rows($result);
        if($count!=0){

           session_start();
            $_SESSION["user"] = $un;
           

            header('location:d.php');
        }
        else{
            echo " u/p error ";
        }
    }
    
    ?>