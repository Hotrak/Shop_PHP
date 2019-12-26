<?php
  require_once "fun.php";
  // $comand = $_GET[''];
  // $login = $_GET['login'];
  // $password = $_GET['password'];

  $comand = 1;
  $login = "stas@mail.ru";
  $password = "123";

  if($comand == 1){//Вход

    $resulet = signInn($login,$password);
    $resulet = signInn("stas@mail.r","123");
    $resulet = signInn("stas@mail.ru","12");

    $resulet = signUpp("stas@mail.ru","899");
    $resulet = signUpp("vlad@mail.ru","555");
    // if($resulet == True)
    //   echo "TRUE";
    // else
    //   echo "FALSE";

  }else if($comand == 2){//Регистрация


  }     


 function signInn($login,$password){
    $query = "SELECT password FROM users WHERE login like '".$login."'";
    $user =  select_q($query);
    if(isset($user)){
      if($user['password'] == $password){
        echo "Acces TRUE ".$login." | ".$password." <br>";
        return True;
      }
      else{
        echo "PASSWORD FALSE <br>";
        return False;
      }
    }else{
      echo "LOGIN FALSE <br>";
      return False;
    }
 }

 function signUpp($login,$password){
    $select_query = "SELECT id_user FROM users WHERE login like '".$login."'";
    $user =  select_q($select_query);
    if(!isset($user)){
      echo "Insert TRUE <br>";
      $insert_query = "INSERT INTO users (login,password) VALUES ('$login','$password')";
      select_q($insert_query);
    }else{
      echo "LOGIN FALSE <br>";
      return False;
    }
 }
?>