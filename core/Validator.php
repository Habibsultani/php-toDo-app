<?php 

Class Validator {


  public static function string($value, $min = 1 , $max = INF)
   {

      $result = trim($value);

      return strlen($result) >= $min && strlen($result) < $max ;
 
   }


  public static function email($value)
   {

      return filter_var($value, FILTER_VALIDATE_EMAIL);
 
   }
}