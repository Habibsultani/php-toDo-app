<?php

// Start session
session_start();

$heading = 'register here';

// Include configuration file
$config = require_once base_path('config.php');

// Include Validator class
require_once base_path('core/Validator.php');

// Validate email and password
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$error = [];

if (!Validator::email($email)) {
    $error['login'] = 'Please enter a valid email address';
} elseif (!Validator::string($password, 7, 255)) {
    $error['login'] = 'Please enter a password between 7 and 255 characters';
}

// Handle validation errors
if (!empty($error)) {
    require_once view('register/index.view.php');
    exit();
}

// Database interaction
$db = new Database($config['database'], 'root', 1234);

$result = $db->query('SELECT * FROM users WHERE email = :email', [':email' => $email])->find();

if (empty($result)) {
    // Insert user into the database
    $db->query("INSERT INTO users (password, email) VALUES (:password, :email)", [
        ':password' => $password,
        ':email' => $email
    ]);

    // Store user data in session
    $_SESSION['user'] = ['email' => $email];

    // Redirect to notes page
    header('Location: /notes');
    exit();
} else {
    // User already exists, redirect to home page
    header('Location: /');
    exit();
}