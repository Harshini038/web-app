<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Create new Account</h1>

    <form action="#" method="POST">
    <center>
        <table>
        

            <tr>
                <td><label>ID: </label></td>
                <td><input type="number" name="id" ></td>
            </tr>

            <tr>
                <td><label>Password: </label></td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td><label>Name: </label></td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td><label>Class: </label></td>
                <td><input type="text" name="class"></td>
            </tr>

            <tr>
                <td><label>Mark1: </label></td>
                <td><input type="number" name="mark1"></td>
            </tr>

            <tr>
                <td><label>Mark2: </label></td>
                <td><input type="number" name="mark2"></td>
            </tr>

            <tr>
                <td><label>Mark3: </label></td>
                <td><input type="number" name="mark3"></td>
            </tr>


        </table>
        <input type="submit" value="Register" name="register">
    </center>


    </form>
    
</body>
</html>

<?php
    if(isset($_POST['register'])){
        $id = $_POST['id'];
        $password=$_POST['password'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $mark1 = $_POST['mark1'];
        $mark2 = $_POST['mark2'];
        $mark3 = $_POST['mark3'];
        
        $percent= ($mark1+$mark2+$mark3)*0.33;

        if ($percent >= 90) {
            $grade = 'A';
        } elseif ($percent >= 80) {
            $grade = 'B';
        } elseif ($percent >= 70) {
            $grade = 'C';
        } elseif ($percent >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        if($id !="" && $password !="" && $name !="" && $class !="" && $mark1 !="" && $mark2 !="" 
        && $mark3 !=""){

            $query= "insert into studentinfo values(id='$id', '$password',
            '$name', '$class','$mark1','$mark2','$mark3','$percent','$grade')";

            $data=mysqli_query($conn,$query);
            if($data)
            {
                echo "Registered Successfully";
            }
            else
            {
                echo "Registration Failed";
            }
            

        }
        else
        {
            echo "All fields are required";
        }
    }

  
?>

