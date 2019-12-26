<?php
   define('DB_HOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASWORD','Vladtumen2000');
   define('DB_NAME','laptopzone');
function Conn()
{
  $con =mysqli_connect(DB_HOST,DB_USERNAME,DB_PASWORD,DB_NAME);
  return $con;
}



function getFileName()
    {
        $getMime = explode('.', $file['name']); 
        // нас интересует последний элемент массива - расширение 
        $mime = strtolower(end($getMime)); 
        $file_name = mt_rand(0,1000000) . "( ". $today . " )" . mt_rand(0,1000000) . mt_rand(0,1000000) . mt_rand(0,1000000); 
        return file_name;
      
    }
?>
  

