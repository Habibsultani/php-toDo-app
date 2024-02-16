<?php

$config = require base_path('config.php');

$heading = ' Note';

$currentUser = 1;


$db = new Database($config['database'], 'root', 1234);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  $note = $db->query("select * from notes where id = :id", [
    ':id' => $_GET['id'] ,
    ])->findOrFail();
    
    
    
  response($note && $note['user_id'] !== $currentUser); 

  $db->query('delete from notes where id = :id', [':id' => $_POST['deleteValue']]);


  header('location: /notes');
  exit();


} 

  
  


$note = $db->query("select * from notes where id = :id", [
  ':id' => $_GET['id'] ,
  ])->findOrFail();
  
  
  
  response($note && $note['user_id'] !== $currentUser);  
  
  

require view('notes/show.view.php');