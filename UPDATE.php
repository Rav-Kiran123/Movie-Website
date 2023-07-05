<?php
include("SESSION.PHP"); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="favicon.ico" type="image" sizes="32*32">
	<link rel="stylesheet" href="css/index2.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="css/gallery.css">
	<title>Movie App</title>
	<style>
		body{background-image: url("images/background/newbg.jpg");}
		</style>
</head>
<body>
<?php
include("GALLERY_header.php");
?>
	<center>
    <br>
<div style="margin-left: 80px;width: 230px; height: 350px;background-color:black" class="img">
    <?php
    include('conn.php');
    $query = mysqli_query($conn, "SELECT * FROM `cinema1`"); {
    $row = mysqli_fetch_array($query);
    echo "<a href='movie1.php'>"; ?><img src="<?php echo $row['image']; ?>" width="180px" height="154px" /><?php echo "</a><br>";
    }
    ?>
    <div class="desc">
	<p style="text-align: left; margin-left:10px;font-family: 'Roboto', sans-serif;font-weight: bold; color:white; font-size:15px; text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
<?php
    include('conn.php');
    $query = mysqli_query($conn, "SELECT * FROM `cinema1`"); {
        $row = mysqli_fetch_array($query);
        echo "<p>" . $row['status'] . "<br><br>";
        echo $row['title'] . "<br><br>";
        echo "Price:&nbsp;&nbsp;" . $row['price'] . "<br><br>";
        echo $row['cinema'] . "<br></p>";
    }
    ?> </div>
    </div>
    <div style="margin-left: 138px; width: 230px; height: 350px;background-color:black" class="img">
        <?php
        include('conn.php');
        $query = mysqli_query($conn, "SELECT * FROM `cinema2`"); {
            $row = mysqli_fetch_array($query);
            echo "<a href='movie2.php'>"; ?><img src="<?php echo $row['image']; ?>" width="180px" height="154px" /><?php echo "</a><br>";
        }
        ?>
        <div class="desc">
            <p style="text-align: left; margin-left:10px;font-family: 'Roboto', sans-serif;font-weight: bold; color:white; font-size:15px; text-shadow: 0 0 30px rgba(81, 203, 238, 1);" 
            <?php
        include('conn.php');
        $query = mysqli_query($conn, "SELECT * FROM `cinema2`"); {
			$row = mysqli_fetch_array($query);
			echo "<p>" . $row['status'] . "<br><br>";
			echo $row['title'] . "<br><br>";
			echo "Price:&nbsp;&nbsp;" . $row['price'] . "<br><br>";
			echo $row['cinema'] . "<br></p>";
		}
        ?></div>
        </div>
        <div style="margin-left: 138px; width: 230px; height: 350px;background-color:black" class="img">
            <?php
            include('conn.php');
            $query = mysqli_query($conn, "SELECT * FROM `upcoming1`"); {
                $row = mysqli_fetch_array($query);
                echo ""; ?><img src="<?php echo $row['Image']; ?>" border="2px solid" opacity="0.5" width="180px" height="154px" /><?php echo "";
        }
            ?>
            <div class="desc">
                <p style="text-align: left; margin-left:10px;font-family: 'Roboto', sans-serif;font-weight: bold; color:white; font-size:15px; text-shadow: 0 0 30px rgba(81, 203, 238, 1);" 
                <?php
            include('conn.php');
            $query = mysqli_query($conn, "SELECT * FROM `upcoming1`"); {
                $row = mysqli_fetch_array($query);
                echo "<p>" . $row['status'] . "<br><br>";
                echo $row['title'] . "<br><br>";
                echo $row['date'] . "<br><br></p>";
            }
            ?> </div>
            </div>
            <div style="margin-left: 138px;width: 230px; height: 350px;background-color:black" class="img">
                <?php
                include('conn.php');
                $query = mysqli_query($conn, "SELECT * FROM `upcoming2`"); {
                    $row = mysqli_fetch_array($query);
                    echo ""; ?><img src="<?php echo $row['Image']; ?>" border="2px solid" opacity="0.5" width="180px" height="154px" /><?php echo "";
                }
                    ?>
                <div class="desc">
                    <p style="text-align: left; margin-left:10px;font-family: 'Roboto', sans-serif;font-weight: bold; color:white; font-size:15px; text-shadow: 0 0 30px rgba(81, 203, 238, 1);" 
                    <?php
                    include('conn.php');
                    $query = mysqli_query($conn, "SELECT * FROM `upcoming2`"); {
                        $row = mysqli_fetch_array($query);
                        echo "<p>" . $row['status'] . "<br><br>";
                        echo $row['title'] . "<br><br>";
                        echo $row['date'] . "<br><br></p>";
                    }
                    ?>        
</body>
</center>
</div>
<div>
</div>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    include("FOOTER.php")
    ?> 
</html>