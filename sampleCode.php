<!DOCTYPE html>
<html> 
    <title></title>
    <head>
        <style>
            body{
                background-image: url(https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?w=1060&t=st=1675243157~exp=1675243757~hmac=f6b7776b076bb4ca122aa5874596d0470f4afe60bb1e3c1523dba2bb4121280e);
                height:100vh;
                width:100vw;
                background-size: cover;
            }
           .box {
                height: 550px;
                width: 360px;
                margin:auto;
                background-color: whitesmoke;
                border-radius:5px ;
            }
    h1{
        text-align:center ;
    }
    form{
        width:300px;
        margin-left: 20px;
    }
    form label{
        display:flex;
        margin-top: 20px;
        font-size:15px;
    }
    form input{
        width:100%;
        padding:5px;
    }
    input[type="button"]{
        margin:10px;
        background-color: blue;
        color:whitesmoke;
    }
    p{
        text-align: center;
    }
  </style>
    </head>
    <body>
    <?php 
  include 'scon.php';

  if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $cpassword = $_POST['cpassword'];

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    $mailquery="select *from logdata where email='$email'";
             $query=mysqli_query($con,$mailquery);

    if($query){
        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
            echo "Email already exists";
        }else{
            if($password === $cpassword){
                $insertquery = "INSERT INTO logdata (
                $iquery = mysqli_query($con, $insertquery);
                if($iquery){
                    echo '<script> alert("new uesr registerd successful"); </script>';
                }else{
                    echo '<script> alert("Insertion failed"); </script>';
                }
            }else{
                echo '<script> alert("Password and confirm password do not match"); </script>';
            }
        }
    }else{
        echo '<script> alert("Query failed"); </script>';
    }
  }
?>
<div class="box">
        <h1>SIGH up</h1>
        <form action="" method="post">
        <label><b>first_Name:</b></label>
        <input type="text" placeholder="Enter first name" name="first_name" required/><br><br>
        <label><b>last_Name:</b></label>
        <input type="text" placeholder="Enter last name" name="last_name" required/><br><br>
        <label><b>phone_no:</b></label>
        <input type="number" placeholder="Enter contect number" name="phone_number" required/><br><br>
        <label><b>email:</b></label>
        <input type="text" placeholder="Enter email" name="email" required/></br>
        <label><b>password:</b></label>
        <input type="password" placeholder="Enter password" name="password" required/><br><br>
        <label><b>confirm password:</b></label>
        <input type="password" placeholder=" cpassword" name="cpassword" required/><br><br>
        <button type="Submit" value="SIGN UP" name="submit">SIGN UP</button>
</form>
<p>Already have an account<a href="http://localhost/login.php">LOGIN</a></p>
    </div>
    </body>
</html>


