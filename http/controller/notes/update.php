<?php 

require base_path('core/Validator.php');

$config = require base_path('config.php');

$currentUser = 1;

$db = new Database($config['database'], 'root', 1234);



$error = [];


if (! Validator::string($_POST['notes'], 1 , 1000)) {
  $error['body'] = 'The note must be under 1000 character and more than 1 character';

}

if (empty($error)) {
    
    $db->query('update notes set notes = :notes where id = :id', [
      'id' => $_POST['id'],
      'notes' => $_POST['notes']
    ] );
    
}

header('location: /notes');
exit();