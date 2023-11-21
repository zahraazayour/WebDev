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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #edd5f1;
            color: #0e0d0d;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            height: 100vh; 
        }

        .navbar {
            background-color: rgba(98, 45, 98, 0.464);
            width: 100%;
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .navbar a {
            color: rgb(61, 57, 57);
            text-decoration: none;
            font-size: 18px;
            padding: 0px 1px;
            color: #FFFFFF;
        }

        

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
           
        }

        .welcome-container {
            text-align: center;
            margin-top: 20px; 
        }

        .welcome-container h1 {
            font-size: 36px;
            color: #443044;
            margin-bottom: 10px;
        }

        .welcome-container .welcome-text {
            font-size: 18px;
            color: #6d6d6d;
        }

        .picture-margin {
            text-align: center;
            margin-top: 20px;
        }

        .profile-picture {
            width: 300px; 
            height: 300px; 
            object-fit: cover;
            border-radius: 50%; 
            border: 4px solid #e4dcdc; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); 
        }
        .header {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .welcome-msg {
    
    align-items: center;
    margin-top: 80px;
  }
  
    </style>
</head>
<body>
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
    <div class="header">
            <div class="welcome-msg">
            <p>Welcome  <?php echo $_SESSION["email"]; ?></p>
            </div>
            
        
    </div>
    <div class="welcome-container">
        <h1>Welcome to my Website</h1>
        <p class="welcome-text">You can choose to go either to my CV, my Gallery, my Contact Information page, or to stay here. Have fun!</p>
    </div>
    <div class="picture-margin">
        <img src="https://th.bing.com/th/id/R.dc9e2204559895b60c8107b36a20c586?rik=fiuPUPE4J82QgQ&pid=ImgRaw&r=0" alt="Profile Picture" class="profile-picture">
    </div>
</body>
</html>
