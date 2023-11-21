<?php
session_start();
if (isset($_SESSION["email"])) {
    
    header("location:index.php");
    exit();
}
?>
<html>
<head>
    <link rel="stylesheet" href="instyle.css">
    <link rel="stylesheet" href="mainorm.css">
   
    <title>
        Login
    </title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST" id="login-form">
        <label for="un">Username</label>
        <br>
        <input type="text" name="username" class="input-txt">
        <br>
        <label for="pass">Password</label>
        <br>
        <input type="password" name="password" class="input-txt">
        <br>
        <input type="submit" value="Login" style="background-color: #9370DB; color: #fff; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#7B68EE'" onmouseout="this.style.backgroundColor='#9370DB'">

        <br>
        </form>
        <p>Don't have an account? <a href="signup.html">Sign up here</a></p>
    </div>


    <script>
        function login() {
            var un = document.getElementById("username").value;
            var pass = document.getElementById("password").value;
            if ((un == "") || (pass == "")) {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }

        }

        function ClearForm() {
            document.getElementById("username").value = "";
            document.getElementById("password").value = "";
        }
    </script>

</body>

</html>