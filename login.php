<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Load users from the JSON file
    $jsonFile = "users.json";
    if (file_exists($jsonFile)) {
        $users = json_decode(file_get_contents($jsonFile), true);

        // Search for a matching user
        foreach ($users as $user) {
            if ($user["email"] == $username && $user["pass"] == $password) {
                // Set session variable
                $_SESSION["email"] = $username;

                // Successful login, redirect to cv.php
                header("Location: homepage.php");
                exit();
            }
        }
    }

    // If no match is found, display a message and redirect to the same page
    echo '<script>alert("Invalid username or password. You need to sign up if you don\'t have an account.");';
    echo 'window.location.href = "index.php";</script>';
    exit();
}
?>