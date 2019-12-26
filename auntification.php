<?php
 require_once 'fun.php';
 $login = $_GET['login'];
 $password = $_GET['password'];

 if(!isset($_GET['phone'])){
  $is_sign_in =  signIn($login,$password);
  if( $is_sign_in != 1)
    $is_sign_in = 0;
  echo $is_sign_in;
 }else{
  $is_sign_up = signUp($login,$password);
  if( $is_sign_up != 1)
    $is_sign_up= 0;
  echo $is_sign_up;
 }
 
//pattern="2[0-9]{3}-[0-9]{3}"
?>