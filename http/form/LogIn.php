<?php 


Class LogIn
{

  protected $error = [];

  public function validate($email, $password)  

  {

    if (!Validator::email($email)) {
          $this->error['email'] = 'Please enter a valid email address';
    } 

    if (!Validator::string($password, 7, 255)) {
          $this->error['password'] = 'Please enter a password between 7 and 255 characters';
    }
    
    return empty($this->error);
    
  }

  public function error() {
    return $this->error;
  }
}