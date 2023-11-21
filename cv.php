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
    <title>Your CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styling.css">

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


    <div class="margin-content">
        <div class="header">
            <div class="welcome-msg">
            <p>Welcome  <?php echo $_SESSION["email"]; ?></p>
            </div>
            <h1>Zahraa Zayour</h1>
            <p>Computer Science Student</p>
        </div>

        <div class="information">
            <div class="picture-margin">
                <img src="https://th.bing.com/th/id/R.cb6a7fa71683552b0608720031eec10d?rik=4v6MVu%2fFy5KyVQ&riu=http%3a%2f%2fcliparts.co%2fcliparts%2fkTM%2fb79%2fkTMb79r8c.png&ehk=RUo1ClLfLKfRuKTi0Kfsl4Ek3l0NqAAw6fV7Ok1VO2I%3d&risl=&pid=ImgRaw&r=0" alt="Profile Picture" class="profile-picture">
            </div>
            <h2><b>Contact Information:</b></h2>
            <p class="contact"><a class="email-link" href="mailto:zahraa.zayour@lau.edu"><i class="fas fa-envelope"></i> Email: zahraa.zayour@lau.edu</a></p>
            <p class="contact"><a class="email-link" href="mailto:zahraa.zayour@lau.edu"><i class="fas fa-phone"></i> Phone Number: +961 81 631 984</a></p>
            <p><i class="fas fa-map-marker-alt"></i> Address: South governate, Saida district</p>
        </div>
        <hr>
        <div class="section">
            <h2>Work Experience</h2>
            <div class="work-experience">
                <div class="work-experience-box">
                    <p class="date"><b>June 2023 - August 2023</b></p>
                    <p><i>Web Developer Intern</i></p>
                    <p>Middle East Airlines (MEA), Lebanon</p>
                    <p><b>Responsibilities:</b></p>
                    <div class="responsibilities">
                        <ul>
                            <li>Developed and maintained web applications.</li>
                            <li>Collaborated with cross-functional teams to deliver projects on time.</li>
                            <li>Provided technical support and troubleshooting.</li>
                        </ul>
                    </div>
                </div>
                <div class="work-experience-box">
                    <p class="date"><b>June 2023 - August 2023</b></p>
                    <p><i>Web Developer Intern</i></p>
                    <p>Integrated Digital Systems (IDS), Lebanon</p>
                    <p><b>Responsibilities:</b></p>
                    <div class="responsibilities">
                        <ul>
                            <li>Developed and maintained web applications.</li>
                            <li>Collaborated with cross-functional teams to deliver projects on time.</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="work-experience-box">
                <p class="date"><b>November 2022 - Present</b></p>
                <p><i>Coding Instructor</i></p>
                <p>Geek Express, Lebanon</p>
                <p><b>Responsibilities:</b></p>
                <div class="responsibilities">
                    <ul>
                        <li>Delivered several individual classes in application development using MIT app inventor.</li>
                        <li>Delivered group classes in basic artificial intelligence concepts.</li>
                        <li>Trained students for an online competition.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="vertical-margin">
        <div class="section">
            <h2 style="margin-top: 20px;">Education:</h2>
            <ul>
                <li class="date">2021 - Present</li>
                <li><i class="fas fa-dot-circle"></i> Bachelor of Science in Computer Science</li>
                <li><i class="fas fa-dot-circle"></i> Minor in Physics</li>
                <li><i class="fas fa-dot-circle"></i> Lebanese American University, Beirut</li>
                <li><i class="fas fa-dot-circle"></i> Dean's Distinction List</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Soft Skills:</h2>
            <p>
                <i class="fas fa-check"></i> detail-oriented 
                <i class="fas fa-check"></i> hard worker 
                <i class="fas fa-check"></i> curious 
                <i class="fas fa-check"></i> pianist 
                <i class="fas fa-check"></i> team worker 
                <i class="fas fa-check"></i> communication skills 
                <i class="fas fa-check"></i> accurate
            </p>
        </div>
        <hr>
        <div class="section skills">
            <h2>Technical skills:</h2>
            <ul>
                <li><i class="fas fa-code"></i> HTML</li>
                <li><i class="fas fa-paint-brush"></i> CSS</li>
                <li><i class="fas fa-database"></i> SQL</li>
                <li><i class="fas fa-laptop-code"></i> PHP</li>
                <li><i class="fas fa-cube"></i> OOP</li>
                <li><i class="fas fa-robot"></i> Machine Learning</li>
                <li><i class="fas fa-coffee"></i> Java</li>
                <li><i class="fab fa-python"></i> Python</li>
                <li><i class="fas fa-code"></i> C</li>
                <li><i class="fas fa-chart-line"></i> Algorithm</li>
                <li><i class="fas fa-microchip"></i> Verilog</li>
                <li><i class="fab fa-windows"></i> Microsoft</li>
            </ul>
        </div>
        
    </div>
    
    
</body>
</html>

    