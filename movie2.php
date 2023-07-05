<?php
include("SESSION.PHP"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index2.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
    </script>
    <script src="script.js"></script>
    <title>Cinema 1</title>
    <link rel="stylesheet" href="css/movie.css">
    <style>
        body {background-image: url("images/background/newbg.jpg");}
    </style>
</head>
<center>
    <?php
    include("GALLERY_header.php")
    ?>
    <div style="color: red; text-align: center;">
        <?php include('conn.php');
        function createRandomPassword()
        {
            $chars = "abcdefghijkmnopqrstuvwxyz023456789";
            srand((float)microtime() * 1000000);
            $i = 0;
            $pass = '';
            while ($i <= 7) {
                $num = rand() % 33;
                $tmp = substr($chars, $num, 1);
                $pass = $pass . $tmp;
                $i++;
            }
            return $pass;
        }
        error_reporting(0);
        $submit = $_POST['submits'];
        $ticketnum = createRandomPassword();
        $cname = $_POST['cname'];
        $quantity = $_POST['quantity'];
        $Title = $_POST['Title'];
        $price = $_POST['price'];
        $Time = $_POST['Time'];
        $Date = date('Y-m-d');
        $Cinema = $_POST['Cinema'];
        $result = mysqli_query($conn, "SELECT ticketnum FROM cinema2");
        while ($row = mysqli_fetch_array($result)) {
            $ticket = $row['ticketnum'];
        }
        $number = $ticket - $quantity; {
            if ($submit) {
                if (strlen($cname) >= 4) {
                    if (strlen($cname) <= 16) {

                        mysqli_query($conn, "INSERT INTO movies (Ticket_Number,username,cname,quantity,Title,price,Time,date,Cinema,ticket_status) VALUES('$ticketnum','$login_session','$cname','$quantity','$Title','$price','$Time','$Date','$Cinema','Active')");
                        mysqli_query($conn, "UPDATE  cinema2 SET  ticketnum =  '$number' WHERE  `cinema2`.`No` =1;");
                        die("<button type='button' onclick=''><A href='receipt.php'> <img src='pics/print.jpg' alt='Klematis' /><br />Print Voucher</A></button>");
                    } else {
                        echo '<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
                    }
                } else {
                    echo '<script type="text/javascript">alert("Please input your Firstname & Lastname!")</script>';
                }
            }
            if ($ticket <= 0) {
                die("<h1 style='background-color:white'>Sorry no tickets available!</h1>");
            }
        }
        ?>
    </div>
    <form action="" method="post">
        <BR><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d ;"><span style="font-family: Berlin Sans FB Demi; font-size: 30px; text-align: center; color: red; font-weight: bold;"><span style="text-align: center; text-shadow: #7bdf1d; font-family: Berlin Sans FB Demi; font-size: 18px; color: #7bdf1d;;">Customer
                    Name:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input name="cname" style="padding: 5px 10px; width: 210px;" type="text" required="required">
            &nbsp;
        </p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d;font-weight: bold;"><span style="font-size: 20px;">No. of tickets:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <select type="a" name="quantity" style="padding: 5px 10px; width: 100px;" id="quantity">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d;font-weight: bold;">&nbsp;</p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d;font-weight: bold;"><br>
            <span class="style3">Title
                of Movie:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input name="Title" style="padding: 5px 10px; width: 210px;" type="text" readonly value="
 <?php
    include('conn.php');
    $query = mysqli_query($conn, "SELECT * FROM `cinema2`"); {
        $row = mysqli_fetch_array($query);
        echo "" . $row['title'] . "";
    }
    ?>">
            &nbsp;
        </p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d;font-weight: bold;"><span class="style3">Price: &nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input name="price" style="padding: 5px 10px; width: 100px;" readonly type="text" value="
 <?php
    include('conn.php');
    $query = mysqli_query($conn, "SELECT * FROM `cinema2`"); {
        $row = mysqli_fetch_array($query);
        echo "" . $row['price'] . "";
    }
    ?>">
            &nbsp;
        </p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d;;">&nbsp;</p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d;font-weight: bold;"><br>
            <span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <select name="Time" style="padding: 5px 10px; width: 210px;">
                <option><?php
                        include('conn.php');
                        $query = mysqli_query($conn, "SELECT * FROM `cinema2`"); {
                            $row = mysqli_fetch_array($query);
                            echo "" . $row['time1'] . "";
                        }
                        ?></option>
                <option><?php
                        include('conn.php');
                        $query = mysqli_query($conn, "SELECT * FROM `cinema2`"); {
                            $row = mysqli_fetch_array($query);
                            echo "" . $row['time2'] . "";
                        }
                        ?></option>
                <option><?php
                        include('conn.php');
                        $query = mysqli_query($conn, "SELECT * FROM `cinema2`"); {
                            $row = mysqli_fetch_array($query);
                            echo "" . $row['time3'] . "";
                        }
                        ?></option>
            </select>
        </p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 5px; color: #7bdf1d;;">&nbsp;</p>
        <p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: #7bdf1d; font-size: 18px; color: #7bdf1d;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cinemas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="Cinema" style="padding: 5px 10px; width: 210px;" readonly type="text" value="Cinema 2">
        </p>
        <p style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submits" class="reserve" value="Reserve Movie" type="submit">
        </p>
    </form>
    </div>
    </body>
</html>