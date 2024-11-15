

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
    <style>
        
    body{
        background-color: lightsteelblue;
    }
    h1{
        text-align: center;
        color:indigo;
    }
    </style>

</head>



<?php

include("db.php");

        $query="select * from studentinfo;";
        $data=mysqli_query($conn,$query);
        $rows= mysqli_num_rows($data);
       

        if($rows!=0)
        {
            ?>
            
            <center><h1>Displaying all students marks</h1></center>
            <table border="1">
            <tr>
                    <th>ID</th>
                    <th>Name:</th>
                    <th>Class</th>
                    <th>Mark1</th>
                    <th>Mark2</th>
                    <th>Mark3</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    
                </tr>

                <?php 
                while($res=mysqli_fetch_assoc($data))
                {
                    echo "<tr>
                                <td>".$res['id']."</td>
                                <td>".$res['name']."</td>
                                <td>".$res['class']."</td>
                                <td>".$res['mark1']."</td>
                                <td>".$res['mark2']."</td>
                                <td>".$res['mark3']."</td>
                                <td>".$res['percent']."</td>
                                <td>".$res['grade']."</td>
                                </tr>
                    

                    ";
                }


        }
        else
        {
            echo "No data found";
        }
        ?>
    
</table>
</html>
