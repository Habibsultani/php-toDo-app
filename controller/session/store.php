<?php 

$config = require_once base_path('config.php');

$db = new Database($config['database'], 'root', 1234);

// Include Validator class
require_once base_path('core/Validator.php');

$email = $_POST['email'];
$password = $_POST['password'];

$error = [];

if (! Validator::email($email)) {
  $error['login'] = 'Please write a valid email adress.';
} 

if (! Validator::string($password, 7, 255)) {
  $error['login'] = 'Please write at least 7 character password';
}

if (! empty($error)) {
  require view('session/index.view.php');
  exit();
}

$user = $db->query('select * from users where email = :email', [
  ':email' => $email,
])->find();

if ($user && empty($error)) {
  if ($email === $user['email']  && password_verify($password ,$user['password'])) {
     $_SESSION['user'] = ['email' => $email];
     header('location: /');
     exit();
  }
}

$error['login'] = 'no such much found please try again';
require view('session/index.view.php');