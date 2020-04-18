<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Document</title>
</head>
<body>
   
    <div  class  = "container">
    <form action = "productinter.php" method = "POST">
        <h1>Product Insert</h1>
    ProductName     <input type          = "text" name     = "proname" placeholder    = "name" required><br>
    Brand     <input type          = "text" name     = "brand" placeholder     = "Brand" required><br>
    EXP Date <input type="date" name="expdate">
    <input    type  = "submit" value = "Show Data"><br>
    <h2>Sample</h2>
    <p>1.ProductName = Chokolet</p>
    <p>2.Brand = Pran</p>
    <p>3.EXPDate = 29/11/2020</p>
    
    
</form>
</body>
</html>