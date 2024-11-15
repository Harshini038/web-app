

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <style>

    body{
        background-color: lightsteelblue;
    }
    h1{
        text-align: center;
        color:indigo;
    }
    .update
    {
        background-color: green;
        color: white;
    }
    </style>
</head>
<body>

<?php 
include("db.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "select * from studentinfo where id ='$id'";
    $data= mysqli_query($conn,$query);
    //$res=mysqli_fetch_assoc($data);
    $rows=mysqli_num_rows($data);
}
else
{
    echo "ID not provided";
}

        if($rows>0){

            ?>

            <h1>Mark scored by student:</h1>
            <center><table border="2">
                <tr>
                    <th>ID</th>
                    <th>Name:</th>
                    <th>Class</th>
                    <th>Mark1</th>
                    <th>Mark2</th>
                    <th>Mark3</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Update</th>
                </tr>

                <?php
                while($res=mysqli_fetch_assoc($data))
                {
                    echo"<tr>
                            <td>".$res['id']."</td>
                            <td>".$res['name']."</td>
                            <td>".$res['class']."</td>
                            <td>".$res['mark1']."</td>
                            <td>".$res['mark2']."</td>
                            <td>".$res['mark3']."</td>
                            <td>".$res['percent']."</td>
                            <td>".$res['grade']."</td>
                            <td><a href='update.php?id=$res[id]'><input
                            type='submit'value='Update mark' class='update'>
                        </tr>";

                }
        }
        else
        {
            echo "No record found";
        }

        ?>
   


</table>
    </center>
    
</body>
</html>