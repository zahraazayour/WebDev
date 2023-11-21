<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required variables exist
    if (isset($_POST["Fullname"], $_POST["email"], $_POST["pass"], $_POST["sex"], $_POST["birthdate"])) {
        // Retrieve form data
        $fullName = $_POST["Fullname"];
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $sex = $_POST["sex"];
        $birthdate = $_POST["birthdate"];

        // Validate that all fields are filled
        if (empty($fullName) || empty($email) || empty($password) || empty($sex) || empty($birthdate)) {
            echo '<script>alert("Please fill in all the fields.");';
            echo 'window.location.href = "signup.html";</script>';
        } else {
            // Specify the path to the JSON file
            $jsonFile = "users.json";

            // Check if the file exists
            if (!file_exists($jsonFile)) {
                // If the file doesn't exist, attempt to create it with an empty array
                if (file_put_contents($jsonFile, '[]') !== false) {
                    echo '<script>alert("User data file created successfully.");</script>';
                } else {
                    echo '<script>alert("Error creating user data file.");</script>';
                    echo "Debug: " . json_last_error_msg(); // Add this line for additional error information
                }
            }

            // Read existing users from the JSON file
            $users = json_decode(file_get_contents($jsonFile), true);

            // Check if the user already exists based on email
            if (userExists($users, $email)) {
                echo '<script>alert("User already exists.");</script>';
            } else {
                
                $userData = [
                    "Fullname" => $fullName,
                    "email" => $email,
                    "pass" => $password,
                    "sex" => $sex,
                    "birthdate" => $birthdate
                ];

                // Add the new user data to the array
                $users[] = $userData;

                // Encode the array and append it to the JSON file
                if (file_put_contents($jsonFile, json_encode($users, JSON_PRETTY_PRINT)) !== false) {
                    echo '<script>window.location.href = "index.php";</script>';
                    exit();
                } else {
                    echo '<script>alert("Error writing user data to the file.");</script>';
                }
            }
        }
    } else {
        echo '<script>alert("Invalid form submission.");';
        echo 'window.location.href = "signup.html";</script>';
    }
}

// Function to check if the user already exists based on email
function userExists($users, $email) {
    foreach ($users as $user) {
        if ($user["email"] === $email) {
            return true;
        }
    }
    return false;
}
?>
