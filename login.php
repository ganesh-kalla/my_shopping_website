<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <style>
    body {
      background-image: url("https://img.freepik.com/free-photo/medium-shot-man-talking-phone_23-2149151166.jpg?w=996&t=st=1675424871~exp=1675425471~hmac=72ceb1b45479d3fa4487ddebd0bc4f31541a20e1c2ad1bf67d1f9b2c6623924e");
      height: 100vh;
      width: 100vw;
    }

    form {
      width: 500px;
      margin: 50px auto;
      text-align: center;
      padding: 30px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: lightgoldenrodyellow;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-size: 20px;
      font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>

<body>
  <?php
  include 'scon.php';
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pword = $_POST['pass'];
    $email_search = "select *from reg where email='$email'";
    $querry = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($querry);
    if ($email_count) {
      $email_pass = mysqli_fetch_assoc($querry);
      $db_pass = $email_pass['password'];
      $pass_decode = password_verify($pword, $db_pass);
      if ($pass_decode) {
        echo "login sucessfull";
        ?>
        <script>
          location.replace("ecom.php");
                         // alert ('login succsessful');
        </script>
        <?php
      } else {
        echo "password in correct";
      }
    } else { ?>
      <script>
        alert("invalid mail id")
      </script>
      <?php
    }
  }
  ?>
  <div id="errorMsg"></div>
  <form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="pass" required><br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>