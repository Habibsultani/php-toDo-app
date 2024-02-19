<?php 

$router->get('/' , 'controller/index.php');

$router->get('/about' , 'controller/about.php');

$router->get('/contact' , 'controller/contact.php');


////// notes part route

$router->get('/notes' , 'controller/notes/index.php')->only('auth');

$router->get('/note' , 'controller/notes/show.php')->only('auth');

$router->delete('/note' , 'controller/notes/destroy.php')->only('auth');

$router->get('/note/create' , 'controller/notes/create.php')->only('auth');

$router->get('/note/edit' , 'controller/notes/edit.php')->only('auth');

$router->patch('/note/update' , 'controller/notes/update.php')->only('auth');

$router->post('/note/create' , 'controller/notes/add.php')->only('auth');

//// the user register router

$router->get('/register' , 'controller/register/index.php')->only('guest');

$router->post('/register' , 'controller/register/store.php')->only('guest');


//// the user login part router

$router->get('/session' , 'controller/session/index.php')->only('guest');

$router->post('/session' , 'controller/session/store.php')->only('guest');