<?php

$heading = 'Create the note';

require base_path('core/Validator.php');

$config = require base_path('config.php');

$currentUser = 1;

$db = new Database($config['database'], 'root', 1234);


require view('notes/create.view.php');