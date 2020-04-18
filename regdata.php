<?php

    $con = mysqli_connect("localhost","root","","labfinal");


    $name =$_POST['name'];
    $age = $_POST['age'];
    $usid = $_POST['userid'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cd = $_POST['contactDetails'];
    $gender = $_POST['gender'];
   

        $sql ="INSERT INTO reg_form(UserName,Age,UserID,Email,Password,ContactDetails,Gender) values
        ('$name' , '$age' ,'$usid', '$email', '$password' ,'$cd', '$gender')";
        
        if(!mysqli_query($con,$sql))
        {
            echo "Make a Unique UserID <br>";
        }else
        {
            header("location:login.php");
        }
    

?>