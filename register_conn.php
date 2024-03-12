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
    } else {
        $database = new Database();
        $user = new User($database);

        $existingUser = $user->getUserByUsername($username);
        if ($existingUser) {
            echo '<script>alert("Username is already taken. Choose a different username.");</script>';
        } else {
            $userId = $user->createUser($username, $password, $first_name, $last_name, $email_add, $mobile);

            if ($userId) {
                echo '<script>alert("Registration successful!"); window.location.href = "login.php";</script>';
            } else {
                echo '<script>alert("Error creating user. Please try again.");</script>';
            }
        }
    }
}
