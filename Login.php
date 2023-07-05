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
        body {background-image: url("images/background/newbg.jpg");}
        .form1 {font-size: 30px;color: #4dbf00;border-radius: 10px;font-family: inherit;font-size: inherit;font-weight: 900;
            background-color: black;display: inline-block;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-bottom: 5px;}
        .form-inline .form-group {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-flex: 0;-ms-flex: 0 0 auto;
            flex: 0 0 auto;-webkit-box-orient: horizontal;-webkit-box-direction: normal;-ms-flex-flow: row wrap;flex-flow: row wrap;
            -webkit-box-align: center;-ms-flex-align: center;align-items: center;margin-bottom: 0;font-family: inherit;font-size: inherit;}
    </style>
</head>
<body>
    <?php
    include("header.php")
    ?>
    <center>
        <div class="mid">
            <br><br><br><br><br><br><br><br>
            <form action="Account.php" method="post">
                <p class="form1"><span>Username:</span>
                </p><br>
                <p>
                <div class="form-group">
                    <input type="text" style="border-radius:10px;" name="username" id="userid" size="30" required="required" />
                </div><br>
                <br>
                </p>
                <p class="form1"><span>Password:
                    </span>
                </p><br>
                <p>
                <div class="form-group"><input name="password" style="border-radius:10px;" id="passid" type="password" size="30" required="required"><br>
                    <br>
                </div>
                <input style="border-radius:10px ;border:solid 2px" id="btton" name="submits" value="Login Account" type="submit">
                </p>
            </form>
        </div>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    include("FOOTER.php")
    ?>
</body>
</html>