<?php 

$router->get('/' , 'index.php');

$router->get('/about' , 'about.php');

$router->get('/contact' , 'contact.php');


////// notes part route

$router->get('/notes' , 'notes/index.php')->only('auth');

$router->get('/note' , 'notes/show.php')->only('auth');

$router->delete('/note' , 'notes/destroy.php')->only('auth');

$router->get('/note/create' , 'notes/create.php')->only('auth');

$router->get('/note/edit' , 'notes/edit.php')->only('auth');

$router->patch('/note/update' , 'notes/update.php')->only('auth');

$router->post('/note/create' , 'notes/add.php')->only('auth');

//// the user register router

$router->get('/register' , 'register/index.php')->only('guest');

$router->post('/register' , 'register/store.php')->only('guest');


//// the user login part router

$router->get('/session' , 'session/index.php')->only('guest');

$router->post('/session' , 'session/store.php')->only('guest');

$router->delete('/sessions' , 'session/destroy.php')->only('auth');