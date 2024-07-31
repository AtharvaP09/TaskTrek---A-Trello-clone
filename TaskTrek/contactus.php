<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
<video id="background-video" autoplay loop muted>
  <source src="logo/3129671-uhd_3840_2160_30fps.mp4" type="video/mp4">
</video>
    <div class="banner">
        <div class="navbar">
            <img src="Logo/tasktrek-high-resolution-logo-transparent.png" alt="Schedule Master" class="logo">
            <ul>
                <li><a href="userregistration.php">Get Started</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="aboutus.php">About US</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>  
        <div class="contact">
            <div class="contact-form">
                <span class="heading">Contact Us</span>
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                  <label for="name">Name:</label>
                  <input type="text" required name="name">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required="">
                  <label for="subject">Subject</label>
                  <input type="text" name="subject">
                  <label for="message">Message:</label>
                  <textarea id="message" name="message" required=""></textarea>
                  <button type="submit" name="submit">Submit</button>
                </form>
              </div>
            </div>
    </div>
</body>
</html>