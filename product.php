<?php	  
		$con = mysqli_connect("localhost","root","","labfinal");
		$sql = "SELECT * FROM product_details"; 
		$result = mysqli_query($con, $sql); 
	?>


<!DOCTYPE html>
<html>
<head>
	<title>All Product Details</title>
	<style>
		table,tr,td,th{
			padding: 20px;
      border: 1px solid black;
		}
	</style>
</head>
<body>


	<div class="bodyContent">
	<h1>All Product Details</h1>
	<table >
		<tr>
			<th>Serial</th>
			<th>Product Name</th>
			<th>Brand</th>
			<th>EXP Date</th>
		</tr>
    <tr>
        <?php
	        if(mysqli_num_rows($result)>0){
	        	while($row=mysqli_fetch_array($result))
        {
        ?>
        <tr>
          <td>
            <?php echo $row['SLNO.']; ?>
          </td>
          <td>
            <?php echo $row['ProductName']; ?>
          </td>
          <td>
            <?php echo $row['Brand']; ?>
          </td>
          <td>
            <?php echo $row['EXPDate']; ?>
          </td>
          
        </tr>
        <?php
        }
        }
        ?>
      </tr>
	</table>
	</div>

</body>
</html>
