<?php
   $con = mysqli_connect("localhost","root","","labfinal");
   if(isset($_POST['email']))
   {
       $email = $_POST['email'];
       $password = $_POST['pass'];

      

       $sql = "SELECT * FROM reg_form WHERE Email='".$email."'AND Password ='".$password."'
       limit 1";

       $result = mysqli_query($con,$sql);

       if(mysqli_num_rows($result)==1){
            
            header("Location:productinterface.php");
       }
       else
       {
           echo "You have Entered A Wrong Password Or Email";
           exit();
       }
   }
   
?>  