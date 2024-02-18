<?php


$heading = 'Register as a new user.';


$config = require base_path('config.php');

$db = new Database($config['database'], 'root', 1234);



require view('register/index.view.php');