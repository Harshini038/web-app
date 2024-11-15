<?php 
include("db.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $query= "select * from studentinfo where id='$id'";
    $data= mysqli_query($conn,$query);
    $res= mysqli_fetch_assoc($data);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
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
        margin-left: 50px;
    }
    </style>
<body>
<h1>Update marks for <?php echo $res['name']; ?></h1>
<form method="POST">

<label>Mark1:</label>
<input type="number" name="mark1" value="<?php echo $res['mark1'];?>" required>
<label>Mark2:</label>
<input type="number" name="mark2" value="<?php echo $res['mark2'];?>"
required>
<label>Mark3:</label>
<input type="number" name="mark3" value="<?php echo $res['mark3'];?>" required>

<input type="submit" value="Update" name="update" class="update">
</form>
    
</body>
</html>

<?php

if(isset($_POST['update']))
{
    $mark1=$_POST['mark1'];
    $mark2=$_POST['mark2'];
    $mark3=$_POST['mark3'];

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

    $query="update studentinfo set mark1='$mark1',mark2='$mark2',mark3='$mark3',
    grade='$grade',percent='$percent' where id='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "updated successfully";

    }
    else
    {
        echo "Failed to update";
    }

}
?>