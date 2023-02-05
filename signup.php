<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?w=1060&t=st=1675243157~exp=1675243757~hmac=f6b7776b076bb4ca122aa5874596d0470f4afe60bb1e3c1523dba2bb4121280e);
            background-size: cover;

        }

        div {
            width: 5cm;
            height: auto;
            margin: auto;
            margin-top: 3cm;
            padding: 2cm;
            background-color: white;
        }
    </style>
</head>

<body>
    <div>
        <?php
        include 'scon.php';
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $no = $_POST['no'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $pass = password_hash($password, PASSWORD_BCRYPT);
            $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

            //chek mail
            $mailquery = "select *from reg where email='$email'";
            $query = mysqli_query($con, $mailquery);
            $mailcount = mysqli_num_rows($query);
            if ($mailcount > 0) {
                echo "email alredy exits";

            } else {
                if ($password === $cpassword) {
                    $insetquery = "insert into reg (name,email,no,password,cpassword)values('$name','$email','$no','$pass','$cpass')";
                    $iquery = mysqli_query($con, $insetquery);
                    if ($iquery) {
                        ?>
                        <script>
                            location.replace("ecom.php")
                            alert("User register successfully..");
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            alert("not registerd..");
                        </script>
                        <?php
                    }

                } else {
                    echo "password are not matching";
                }
            }
        }
        ?>


        <form action="" method="post">
            <h1>New User registation</h1>

            Name:<input type="text" name="name" placeholder="Enter full name" required /><br><br>
            email:<input type="email" name="email" placeholder="Enter email" required /><br><br>
            phone:<input type="text" name="no" placeholder="Enter phone no" required /><br><br>
            password:<input type="password" name="password" placeholder="Enter password" required /><br><br>
            cpassword:<input type="password" name="cpassword" placeholder="re enter password" required /><br><br>
            <input type="submit" name="submit" /><br>
            <span>Alredy have a account</span><a href="login.php">LOGIN</a>
        </form>
    </div>
</body>

</html>