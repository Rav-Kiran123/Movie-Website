<?php
include("header.php")
?>
<link rel="stylesheet" href="css/contactus.css" />
<link rel="stylesheet" href="css/index2.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
<link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<div class="container">
  <div class="form">
    <div class="contact-form">
      <span class="circle one"></span>
      <span class="circle two"></span>
      <form method="POST" id="contactForm">
        <h3 class="title">Contact us</h3>
        <h3 class="text">Having website issues? Reach out to Us.</h3>
        <div class="input-container">
          <input type="text" name="username" id="username" class="input" />
          <label for="">Enter Your UserName</label>
          <span>Username</span>
        </div>
        <div class="input-container">
          <input type="tel" name="phone" id="phone" class="input" />
          <label for="">Phone</label>
          <span>Phone</span>
        </div>
        <div class="input-container textarea">
          <textarea name="problem" id="problem" class="input"></textarea>
          <label for="">Enter issues you are facing</label>
          <span>Enter issues you are facing</span>
        </div>
        <input type="submit" value="submit" class="btn">
      </form>
    </div>
    <div class="contact-info">
      <h3 class="title"></h3>
      <p class="text">
        HAVING TROUBLES?
        DON'T FEEL LEFT OUT?
        ALWAYS AVAILABLE FOR U 24/7 ♥
      </p>
      <div class="col">
        <img class="logo" src="img/logo.jpg" alt="">
        <h4 class="text">Contact</h4>
        <p class="text"> <i class="fa-solid fa-phone"></i> <strong>Phone:</strong>1800-123-4567(Toll free)</p>
        <p class="text"> <i class="fa-solid fa-location-dot"></i> <strong>Address:</strong>VIT,Vellore</p>
        <p class="text"> <i class="fa-solid fa-envelope"></i> <strong>Mail:</strong>help@MOVITwebsite.com</p>
      </div>
    </div>
  </div>
</div>
