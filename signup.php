<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regstyle.css">
    <title>Document</title>
</head>
<body>
   
    <div  class  = "container">
    <form action = "regdata.php" method = "POST">
        <h1>Signup</h1>
    Name     <input type          = "text" name     = "name" placeholder    = "name" required><br>
    Age      <input type          = "text" name     = "age" placeholder     = "age" required><br>
    UserID   <input type="text" name="userid" placeholder="userid(MustbeUnique)">
    Email    <input type          = "email" name    = "email" placeholder   = "email" required><br>
    Password <input type          = "password" name = "pass" placeholder    = "password" required><br>
    Contact Details<input type="text" name="contactDetails" placeholder="contactDetails"> 
    <br><br>
    <div   class = "magender">
    <input type  = "radio" name = "gender" value = "male"><br>Male
    </div>
    <div   class = "fegender">
    <input type  = "radio" name = "gender" value = "female">Female
    </div>
    <br>
   
    <input    type  = "submit" value = "Sign UP"><br>
    
</form>
</body>
</html>