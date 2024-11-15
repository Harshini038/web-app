<html>
    <head>
        <title>
            Display
        </title>
        <style>
            body{
                background-color: #D071f9;
            }
            table{
                background-color: white;
            }
            .update{

                background-color: green;
                color: white;

            }

            .delete{
                background-color: red;
                color: white;
            }

            </style>
    </head>



<?php
 include("db.php");
// include("form.php");

 $query = "SELECT * FROM form";
 $data = mysqli_query($conn,$query);
 $rows = mysqli_num_rows($data);

 

if($rows !=0)
{
    ?>
    <h2><center><mark>Displaying all records</mark></center></h2>
<center><table border="1">
    <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Operations</th>
    </tr>
    <?php
    while($res = mysqli_fetch_assoc($data))
    {
        
        echo"<tr>
                <td>".$res['id']."</td>
                <td>".$res['firstname']."</td>
                <td>".$res['lastname']."</td>
                <td>".$res['gender']."</td>
                <td>".$res['email']."</td>
                <td>".$res['phone']."</td>
                <td>".$res['address']."</td>
                <td><a href='update.php?id=$res[id]'><input type='submit' value='Update' 
                class='update'></a>
                <a href='delete.php?id=$res[id]'><input type='submit' value='Delete' class='delete'
                onclick='return checkdelete()'></a></td>
                
             </tr> ";
      
    }
}
else{
    echo "no records found";
}

//while fetching the data from db,give the exact columnname present in the table

?>

</table>
</center>
</html>

<script>
 function checkdelete()
 {
    return confirm('Are u sure u want to delete this record?');
 }

    </script>

