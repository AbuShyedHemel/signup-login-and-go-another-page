<?php
        $con = mysqli_connect("localhost","root","","labfinal");


       $pname = $_POST['proname'];
       $brand = $_POST['brand'];
       $exp = $_POST['expdate'];
       
    
            $sql ="INSERT INTO product_details(ProductName,Brand,EXPDate) values
            ('$pname','$brand','$exp')";
            
            if(!mysqli_query($con,$sql))
            {
                echo "Something Wrong With Data Base <br>";
            }else
            {
                header("location:product.php");
            }
        
?>