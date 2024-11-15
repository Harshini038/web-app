<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

  <center><h1>Login</h1></center>
  <form action="marks.php" method="GET">
    <center>
    <table>
        <tr>
            <td><label>ID:</label></td>
            <td><input type="number" name="id" required>
        </tr>

        <tr>
            <td><label>Password:</label></td>
            <td><input type="password" name="password" required>
        </tr>

        


    </table>

</center>
<center> <input type="submit" value="Login" ></center>
  </form>
  
           
       
    
</body>
</html>