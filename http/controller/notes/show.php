<?php

$config = require base_path('config.php');

$heading = ' Note';

$currentUser = 1;


$db = new Database($config['database'], 'root', 1234);


$note = $db->query("select * from notes where id = :id", [
  ':id' => $_GET['id'] ,
  ])->findOrFail();
  
  
  
response($note && $note['user_id'] !== $currentUser);  
  
  

require view('notes/show.view.php');