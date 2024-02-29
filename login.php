<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials (you should use a more secure method, e.g., database lookup)
    $validUsername = "example_user";
    $validPassword = "example_password";

    if ($username == $validUsername && $password == $validPassword) {
        // Successful login
        $_SESSION["username"] = $username;
        header("Location: welcome.php"); // Redirect to a welcome page
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password";
    }
}
?>
