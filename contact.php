<?php

include "config.php";

?>
<!DOCTYPE html>
<html>
<head>

<title>
contact us form </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    
    <body>
        
        <header>
            <div class="main">
<ul>
<li class="active"><a href="index.php">Home</a></li>
<li><a href="facilities.php">Facilities</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="aboutus.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
        </header>
        
<div class="container">

    <p>CONTACT US</p>
<div class="login">
<input type="text" name="Name" placeholder="Your Name" class="input">
<input type="text" name="Email" placeholder="Your Email" class="input">
</div>
    
<div class="subject">
<input type="text" name="Subject" placeholder="Subject" class="input">
</div>
    
<div class="msg">
<textarea class="area" placeholder="Leave a Message"></textarea>
</div>
    
<div class="submit">
<a href="success.php" class "button">SEND MESSAGE</a>
</div>
    
</div>
</body>
</html>