<?php


include 'scon.php';

$ids = $_GET['id'];

$showquery = "SELECT * FROM `reg` WHERE id={$ids}";
//echo "select * form `enquiry` where id={$ids}";die;
//print_r($showquery);

$query = mysqli_query($con, $showquery);

$num = mysqli_fetch_array($query);
//echo $num;die;


if (isset($_POST['submit'])) {

    $idupdate = $_GET['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];

    $phone_no = $_POST['no'];



    // $insertquery = " insert into enquiry(name,email,phone,message,jobpost) values('$name','$email','$phone','$message','jobpost')";

    // $query =  mysqli_query($con, " UPDATE `add1` SET id='$ids', name='$name', email='$email', number='$number', WHERE id=$idupdate");
    $query = " UPDATE `reg` SET  name='$name', email='$email', no='$no' WHERE id=$idupdate";


    //print_r($query); die;
    $res = mysqli_query($con, $query);
    // $res = mysqli_query($con,$query) or die ( mysqli_error());
    if ($res) {
        header('location:table.php');
        ?>
        <script>
            alert("data inserted properly");
        </script>
    <?php
    } else {
        ?>
        <script>
            alert("data not insertedn");
        </script>
    <?php
    }
}




?>


<!DOCTYPE html>
<html>

<head>
    <title>home</title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" name="name" placeholder="name" value="<?php echo $num['name']; ?>"><br>
        <input type="email" name="email" placeholder="e-mail" value="<?php echo $num['email']; ?>"><br>
        <input type="number" name="no" placeholder="number" value="<?php echo $num['no']; ?>"><br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>