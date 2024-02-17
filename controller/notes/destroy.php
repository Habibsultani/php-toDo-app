<?php

$config = require base_path('config.php');


$currentUser = 1;


$db = new Database($config['database'], 'root', 1234);

    
$db->query('delete from notes where id = :id', [':id' => $_POST['deleteValue']]);


header('location: /notes');
exit();
  
  