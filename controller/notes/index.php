<?php



$config = require('config.php');

$db = new Database($config['database'], 'root', 1234);


$query = "select * from notes where user_id = 1";

$heading = 'My Notes';

$notes = $db->query($query)->get();


// dd($notes);


require 'views/notes/index.view.php';