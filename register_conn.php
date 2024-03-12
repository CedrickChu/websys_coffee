<?php
include_once("db_conn.php");
include_once("user_conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email_add = $_POST["email_add"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    if ($password !== $confirmPassword) {
        echo '<script>alert("Passwords do not match.");</script>';
    } elseif (substr($mobile, 0, 2) !== "09" || strlen($mobile) !== 11) {
        echo '<script>alert("Invalid mobile number. It should start with 09 and have 11 digits.");</script>';
    } else {


        $database = new Database();
        $user = new User($database);

        // Check if username already exists
        $existingUser = $user->getUserByUsername($username);
        if ($existingUser) {
            echo '<script>alert("Username is already taken. Choose a different username.");</script>';
        } else {
            // Check if email already exists
            $existingEmail = $user->getUserByEmail($email_add);
            if ($existingEmail) {
                echo '<script>alert("Email is already registered. Choose a different email address.");</script>';
            } else {
                // Create the user
                $userId = $user->createUser($username, $password, $first_name, $last_name, $email_add, $mobile);

                if ($userId) {
                    echo '<script>alert("Registration successful!"); window.location.href = "index.php";</script>';
                } else {
                    echo '<script>alert("Error creating user. Please try again.");</script>';
                }
            }
        }
    }
}
?>
