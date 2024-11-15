
<?php 
   include("db.php");
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
        <div class="title">Registration Form</div>
        <div class="form">


            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>


            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname">
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password">
            </div>

            <div class="input_field">
                <label>Confirm password </label>
                <input type="password" class="input" name="conpassword">
            </div>

            <div class="input_field">
                <label>Gender</label>
                <select name="gender">
                    <option value="not selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="input_field">
                <label>Email</label>
                <input type="text" class="input" name="email">
            </div>

            <div class="input_field">
                <label>Phone</label>
                <input type="number" class="input" name="phone">
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address"></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div> 
         
            </div class="input_field">
                 <input type="submit" value="register" class="btn" name="registerb">

            </div>



        </div>
    </form>
    </div>
</body>
</html>
 

<?php 

  if(isset($_POST['registerb']))
  {
    $fname      =   $_POST['fname'];
    $lname      =   $_POST['lname'];
    $pwd        =   $_POST['password'];
    $cpwd       =   $_POST['conpassword'];
    $gender     =   $_POST['gender'];
    $email      =   $_POST['email'];
    $phone      =   $_POST['phone'];
    $address    =   $_POST['address'];

    if($fname != "" && $lname != "" && $pwd != "" && $cpwd != "" && $gender != "" &&
    $email != "" && $phone != "" && $address != "" )
    {
        $query = "INSERT INTO form values('$fname','$lname','$pwd','$cpwd','$gender','$email',
        '$phone','$address')";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data inserted into database successfully!";
        }
        else{
            echo "Failed to register!";
        }

    }
    else
    {
        echo "<script>
                  alert('Please fill all the fields!!');
                  </script>";
    }


  }
 
?>