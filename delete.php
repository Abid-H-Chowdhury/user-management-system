<?php


include('ecrud_class.php');

$user_delete =  Ecrud::user_delete();



if ($user_delete) {
  
      
       header("Location: http://localhost/ecrud/admin2/read.php");
   }



       // echo "Update Successfull";
       // header("Location: http://localhost/ecrud/read.php");
   




 