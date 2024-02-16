<?php

$heading = 'Create the note';

require base_path('Validator.php');

$config = require base_path('config.php');

$currentUser = 1;

$db = new Database($config['database'], 'root', 1234);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $error = [];


  if (! Validator::string($_POST['notes'], 1 , 1000)) {
    $error['body'] = 'The note must be under 1000 character and more than 1 character';

  }

  if (empty($error)) {
    
    $db->query("INSERT INTO notes (notes, user_id) VALUES (:savedNotes, :user)", [':savedNotes' => $_POST['notes'], ':user' => $currentUser] );
    
  }
}


require view('notes/create.view.php');