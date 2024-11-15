
<?php 
   include("db.php");

   $id= $_GET['id'];
   $query = "SELECT * FROM FORM WHERE ID='$id'";
   $data= mysqli_query($conn,$query);
   
   $res= mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>crud</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">Update Details</div>
        <div class="form">


            <div class="input_field">
                <label>First Name</label>
                <input type="text" value="<?php echo $res['firstname'];?>"  class="input" name="fname" required>
            </div>


            <div class="input_field">
                <label>Last Name</label>
                <input type="text" value="<?php echo $res['lastname'];?>" class="input" name="lname">
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" value="<?php echo $res['password'];?>" class="input" name="password">
            </div>

            <div class="input_field">
                <label>Confirm password </label>
                <input type="password" value="<?php echo $res['conpasspwd'];?>" class="input" name="conpassword">
            </div>

            <div class="input_field">
                <label>Gender</label>
                <select name="gender">
                    <option value="">Select</option>

                    <option value="male"
                        <?php 
                            if($res['gender']=='male')
                            {
                                echo "selected";
                            }
                        ?>
                    
                    >Male</option>

                    <option value="female"
                        <?php 
                                if($res['gender']=='female')
                                {
                                    echo "selected";
                                }
                            ?>

                    >Female</option>
                </select>
            </div>

            <div class="input_field">
                <label>Email</label>
                <input type="text" value="<?php echo $res['email'];?>" class="input" name="email">
            </div>

            <div class="input_field">
                <label>Phone</label>
                <input type="number" value="<?php echo $res['phone'];?>" class="input" name="phone">
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea"  name="address">
                    <?php echo $res['address'];?>
                </textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div> 
         
            </div class="input_field">
                 <input type="submit" value="Update" class="btn" name="update">

            </div>



        </div>
    </form>
    </div>
</body>
</html>
 

<?php 

  if(isset($_POST['update']))
  {
    $fname      =   $_POST['fname'];
    $lname      =   $_POST['lname'];
    $pwd        =   $_POST['password'];
    $cpwd       =   $_POST['conpassword'];
    $gender     =   $_POST['gender'];
    $email      =   $_POST['email'];
    $phone      =   $_POST['phone'];
    $address    =   $_POST['address'];

       $query = "UPDATE form SET firstname='$fname',lastname='$lname',password='$pwd',conpasspwd='$cpwd',gender='$gender',email='$email',
        phone='$phone',address='$address' where id='$id'";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data updated  successfully!";
        }
        else{
            echo "Couldnt update data!";
        }

    }
    


 
?>