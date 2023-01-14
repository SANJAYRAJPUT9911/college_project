<?php

session_start();


if(isset($_SESSION["is_login"])){
   
    session_unset();
    
    session_destroy();
    
    echo "0";
}


if(isset($_SESSION["admin_login"])){
   
    session_unset();
    
    session_destroy();
    
    echo "1";
}





?>