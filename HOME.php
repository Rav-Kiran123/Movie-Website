<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico" type="image" sizes="32*32">
  <link rel="stylesheet" href="css/index2.css">
  <link rel="stylesheet" href="css/home.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <title>Movie App</title>
  <style>
    img:hover {cursor: pointer}
    body {background-image: url("images/background/newbg.jpg");  }
  </style>
</head>
<body>
  <?php
  include("header.php")
  ?>
  <body>
    <div id="boxes">
      <div id="leftbox">
        <img class="locandina" onclick="open1()" src="https://resizing.flixster.com/oBlGCXYSo3TAJPicdj6jhulNjKk=/ems.cHJkLWVtcy1hc3NldHMvdHZzZXJpZXMvOTc5MGFhMzctYjRhNC00N2Y0LWFlMTQtMmRkMjEyMDdhMTUxLmpwZw==" width="200px" height="300px" />
      </div>
      <div id="middlebox">
        <img class="locandina" onclick="open1()" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53750.jpg" width="200px" height="300px" />
      </div>
      <div id="rightbox">
        <img class="locandina" onclick="open1()" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53715.jpg" width="200px" height="300px" />
      </div>
    </div>
  </body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    include("FOOTER.php")
    ?>
<script>
  function open1() {
    window.open("CLIP1.php", "MOVIE", "width=1920px", "height=1080px")
  }
</script>
</body>
</html>