<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico" type="image" sizes="32*32">
  <link rel="stylesheet" href="css/index2.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <title>Movie App</title>
  <style>
    body {font-family: "Roboto", sans-serif;background-image: url("images/background/newbg.jpg");}
    .form1 {font-size: 30px;color: #4dbf00;border-radius: 10px;font-family: inherit;font-size: inherit;
      padding-bottom: 50px;font-weight: 900;display: inline-block;}
    .new {margin-top: 20px;color: #4dbf00;font-size: 30px;color: #4dbf00;border-radius: 10px;font-family: inherit;
      font-size: inherit;font-weight: 900;background-color: black;display: inline-block;padding-left: 10px;
      padding-right: 10px;padding-bottom: 5px;padding-bottom: 5px;}
  </style>
</head>
<body>
  <?php
  include("header.php");
  ?>
  <center>
    <div class="mid">
      <p style="font-size: 40px;" class="new">Registration Form 
      </p><br> <br>
      <form class="form1" action="" method="post">
        <p>Fullname:</p>
        <p style="text-align: center;"> <input style="border-radius:10px;" name="name" type="text" require="required"></p>
        <p>Username:</p>
        <p style="text-align: center;"><input style="border-radius:10px;" name="user" type="text" required="required"></p>
        <p>E-mail
          Addrress:</p>
        <p style="text-align: center;"><input style="border-radius:10px;" name="email" type="email" required="required"></p>
        <p>Password</p>
        <p style="text-align: center;"><input style="border-radius:10px;" name="pass" type="password" required="required"></p>
        <p>Re-typePassword</p>
        <p style="text-align: center;"><input style="border-radius:10px;" name="repass" type="password" required="required"></p><br>
        <p style="text-align: center;"><input style="border-radius:10px;" name="submits" value="Register Account" type="submit">
        </p>
        <div style="color: red; text-align: center;">
          <?php
          include('conn.php');
          if (isset($_POST['submits'])) {
            $name = $_POST["name"];
            $username = $_POST["user"];
            $email = $_POST["email"];
            $password = $_POST["pass"];
            $repassword = $_POST["repass"];
            $hash=md5($password);
            $result = mysqli_query($conn, "SELECT * FROM accounts WHERE username='$username' or email='$email'") or die("Wrong Query");
            if (strlen($username) <= 8) {
              echo '<script type="text/javascript">alert("Username length cannot be less than 8!")</script>';
            }
            if (strlen($username) >= 15) {
              echo '<script type="text/javascript">alert("Username length cannot be more than 16!")</script>';
            }
            if (strlen($password) <= 8) {
              echo '<script type="text/javascript">alert("Password length cannot be less than 8!")</script>';
            }
            if (strlen($password) >= 16) {
              echo '<script type="text/javascript">alert("Password length cannot be more than 16!")</script>';
            }
            if (mysqli_num_rows($result) > 0) {
              echo '<script type="text/javascript">alert("Username and Email aready exists")</script>';
            } else {
              if ($password == $repassword) {
                mysqli_query($conn, "INSERT INTO accounts (name,username,email,password) VALUES('$name','$username','$email','$hash')");
                die("<button type='a' onclick=''><a href='Login.php'>Login to your account now</a></button>");
              } else {
                echo '<script type="text/javascript">alert("Password did not match!")</script>';
              }
            }
          }
          ?>
        </div>
      </form>
    </div>
  </center>
</body>
</div>
<br><br><br><br>
<?php
    include("FOOTER.php")
    ?>
</html>