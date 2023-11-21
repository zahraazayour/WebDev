<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ContactInfo</title>
    <link rel="stylesheet" href="CStyle.css" />
    
    <style>
    .welcome-logout {
        position: absolute;
        top: 9px;
        right: 10px;
        text-align: right;
        font-family: sans-serif;
    }
    </style>
</head>
<div class="navbar">
    <a class="navbar-logo" href="#">Your Pages</a>
    <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="cv.php">CV</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="ContactInfo.php">Contact-Information</a></li>
    </ul>
</div>


    </div>
    <div class="header">
            <div class="welcome-msg">
            <p>Welcome  <?php echo $_SESSION["email"]; ?></p>
    </div>
    
    

    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h1>Contact Information</h1>
                <p><b>Name:</b> Zahraa Zayour</p>
                <p><b>Email:</b> <a class="contact-link" href="mailto:zahraa.zayour@lau.edu">zahraa.zayour@lau.edu</a></p>
                <p><strong>Phone:</strong> <a class="contact-link" href="tel:81631984">81 631984</a></p>
                <p><b>Address:</b> Beirut, Qraitem, facing LAU</p>
            </div>
            <div class="contact-details">
                <h2>Contact Me</h2>
                <p>If you have any questions or would like to get in touch, please feel free to email me at the address above.</p>
            </div>
    </div>
</body>
</html>




