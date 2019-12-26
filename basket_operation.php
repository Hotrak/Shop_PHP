<?php
session_start();
require_once "fun.php";
$data = $_GET;


if ($data['operation'] == 'add') {
  $_SESSION['basket'][]= $data;
  // echo "secses ".$_SESSION['basket']['id'][0];
  $summ= 0;
  foreach($_SESSION['basket'] as $item){
    $summ +=$item['cost'];
  }
  echo(count($_SESSION['basket'])." ".$summ);
}else
if ($data['operation'] == 'delete') {

  $count_b = count($_SESSION['basket']);

  if($count_b == 1){
    $_SESSION = array();
    return;
  }
  for ($i=0; $i < $count_b; $i++) { 
      if($_SESSION['basket'][$i]['id'] == $data['id'] && $_SESSION['basket'][$i]['id_type']  == $data['id_type']){
        unset($_SESSION['basket'][$i]);
      }
  }

  
  echo "i delete";
}else
if ($data['operation'] == 'delete_all') {
    $_SESSION = array();
}else
if ($data['operation'] == 'update') {
 
}


?>