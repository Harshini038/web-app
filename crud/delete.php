<?php 
include("db.php");

$id = $_GET['id'];


$query=" delete from form where id='$id'";

$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Deleted');</script>";
}
else{
    echo "Couldnt delete";
}
?>