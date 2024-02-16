<?php

$config = require('config.php');

$db = new Database($config['database'], 'root', 1234);


$heading = ' Note';

$currentUser = 1;

$note = $db->query("select * from notes where id = :id", [
  ':id' => $_GET['id'] ,
  ])->findOrFail();
  
  

response($note && $note['user_id'] !== $currentUser);  



require 'views/notes/show.view.php';